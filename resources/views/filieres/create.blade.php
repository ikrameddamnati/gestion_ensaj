<!-- resources/views/filieres/create.blade.php -->
    <h1>Ajouter une filière</h1>

    <form action="{{ route('filieres.store') }}" method="post">
        @csrf

        <div>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>
        </div>

        <div>
            <label for="abreviation">Abréviation :</label>
            <input type="text" name="abreviation" id="abreviation" required>
        </div>

        <div>
            <label for="niveau">Niveau :</label>
            <input type="text" name="niveau" id="niveau" required>
        </div>

        <button type="submit">Enregistrer</button>
    </form>

    <a href="{{ route('filieres.index') }}">Retour à la liste des filières</a>

