<div class="container">
        <h1>Détails du professeur {{ $professeur->Nom }} {{ $professeur->Prenom }}</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>Nom :</th>
                    <td>{{ $professeur->Nom }}</td>
                </tr>
                <tr>
                    <th>Prénom :</th>
                    <td>{{ $professeur->Prenom }}</td>
                </tr>
                <tr>
                    <th>Email :</th>
                    <td>{{ $professeur->Email }}</td>
                </tr>
                <tr>
                    <th>Spécialité :</th>
                    <td>{{ $professeur->Specialite }}</td>
                </tr>
            </tbody>
        </table>
    </div>
