<div class="container">
        <h1>Détails de l'étudiant {{ $etudiant->nom }} {{ $etudiant->prenom }}</h1>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><strong>Nom</strong></td>
                            <td>{{ $etudiant->nom }}</td>
                        </tr>
                        <tr>
                            <td><strong>Prénom</strong></td>
                            <td>{{ $etudiant->prenom }}</td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td>{{ $etudiant->email }}</td>
                        </tr>
                        <tr>
                            <td><strong>CNE</strong></td>
                            <td>{{ $etudiant->cne }}</td>
                        </tr>
                        <tr>
                            <td><strong>Date de naissance</strong></td>
                            <td>{{ $etudiant->date_de_naissance }}</td>
                        </tr>
                        <tr>
                            <td><strong>Filière</strong></td>
                            <td>{{ $etudiant->filiere->nom }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('etudiants.edit', ['etudiant' => $etudiant->id]) }}" class="btn btn-primary">Modifier</a>
                <form action="{{ route('etudiants.destroy', ['etudiant' => $etudiant->id]) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
