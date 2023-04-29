<div class="container">
        <h1>{{ $filiere->Nom }}</h1>
        <p><strong>Abréviation:</strong> {{ $filiere->abreviation }}</p>
        <p><strong>Niveau:</strong> {{ $filiere->Niveau }}</p>
        <a href="{{ route('filieres.index') }}" class="btn btn-primary">Retour</a>
    </div>

