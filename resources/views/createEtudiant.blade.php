@extends("layouts.master")

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Ajouter etudiant</h3>

    <div class="mt-4">
        @if (session()->has('success'))
            <div class="alert alert-success ">
                <h3>{{ Session::get('success') }}</h3>
            </div>

        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>

                    @endforeach
                </ul>
            </div>

        @endif

        <form style="width: 65%;" method="post" action="{{route('etudiant.ajouter')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="" name="nom">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Prenom</label>
                <input type="text" class="form-control" name="prenom">
            </div>
            <div class="form-group mb-4">
                <label for="exampleInputPassword1">Classe</label>
                <select type="text" class="form-control" name="classe_id">
                    <option value="">Selectionner une classe</option>
                    @foreach ($classes as $classe)
                        <option value="{{ $classe->id }}">{{ $classe->libelle }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{route('etudiant')}}" class="btn btn-danger">Annuler</a>

        </form>
    </div>

</div>

@endsection