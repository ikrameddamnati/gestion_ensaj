<div class="container">
    <h1>Détails de l'administrateur</h1>
    <table class="table">
        <tbody>
            <tr>
                <th>Nom :</th>
                <td>{{ $administrateur->nom }}</td>
            </tr>
            <tr>
                <th>Prénom :</th>
                <td>{{ $administrateur->prenom }}</td>
            </tr>
            <tr>
                <th>Email :</th>
                <td>{{ $administrateur->email }}</td>
            </tr>
            <tr>
                <th>Mot de passe :</th>
                <td>{{ $administrateur->mot_de_passe }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('administrateurs.edit', ['administrateur' => $administrateur->id]) }}" class="btn btn-primary">Modifier</a>
    <form action="{{ route('administrateurs.destroy', ['administrateur' => $administrateur->id]) }}" method="POST" style="display: inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet administrateur ?')">Supprimer</button>
    </form>
</div>
