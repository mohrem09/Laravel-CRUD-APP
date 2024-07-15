@extends("layouts.master")

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des etudiant inscrits</h3>

    <div class="mt-4">
        <div class="d-flex justify-content-end">
            <a href="#" class="btn btn-primary">Ajouter un etudiant</a>
        </div>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <a href="#" class="btn btn-info">Modifier</a>
                        <a href="#" class="btn btn-danger">Supprimer</a>

                    </td>

                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection