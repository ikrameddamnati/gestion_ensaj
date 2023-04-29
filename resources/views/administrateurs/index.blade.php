<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Liste des administrateurs</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($administrateurs as $administrateur)
                            <tr>
                                <td>{{ $administrateur->nom }}</td>
                                <td>{{ $administrateur->prenom }}</td>
                                <td>{{ $administrateur->email }}</td>
                                <td>
                                    <a href="{{ route('administrateurs.show', ['administrateur' => $administrateur->id]) }}" class="btn btn-primary">Afficher</a>
                                    <a href="{{ route('administrateurs.edit', ['administrateur' => $administrateur->id]) }}" class="btn btn-warning">Modifier</a>
                                    <form action="{{ route('administrateurs.destroy', ['administrateur' => $administrateur->id]) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet administrateur ?')">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('administrateurs.create') }}" class="btn btn-success">Ajouter un administrateur</a>
            </div>
        </div>
    </div>
