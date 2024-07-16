@extends("layouts.master")

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des etudiant inscrits</h3>

    <div class="mt-4">


        <div class="d-flex justify-content-between">
            {{$etudiants->links()}}
            <div> <a href="{{route("etudiant.create")}}" class="btn btn-primary">Ajouter un etudiant</a>
            </div>
        </div>
        @if (session()->has('successDelete'))
            <div class="alert alert-success ">
                <h3>{{ Session::get('successDelete') }}</h3>
            </div>

        @endif
        <table class="table table-border table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Classe</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($etudiants as $etudiant)


                    <tr>
                        <th scope="row">{{$loop->index + 1}}</th>
                        <td>{{$etudiant->nom}}</td>
                        <td>{{$etudiant->prenom}}</td>
                        <td>{{$etudiant->classe->libelle}}</td>
                        <td>
                            <a href="{{route('etudiant.edit', ['etudiant' => $etudiant->id])}}"
                                class="btn btn-info">Modifier</a>
                            <a href="#" class="btn btn-danger"
                                onclick="if(confirm('are you sure!')){document.getElementById('form-{{$etudiant->id}}').submit() }">Supprimer</a>
                            <form id="form-{{$etudiant->id}}"
                                action="{{route('etudiant.supprimer', ['etudiant' => $etudiant->id])}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                            </form>

                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>
@endsection