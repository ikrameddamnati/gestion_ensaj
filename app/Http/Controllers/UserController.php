<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Filiere;
class UserController extends Controller
{
    public function indexProfesseur()
    {
        $professeurs = User::where('role', 'professeur')->get();
        return view('professeurs.index', ['professeurs' => $professeurs]);
    }

    // Afficher le formulaire de création d'un nouveau professeur
    public function createProfesseur()
    {
        return view('professeurs.create');
    }

    // Enregistrer un nouveau professeur dans la base de données
    public function storeProfesseur(Request $request)
    {
        $professeur = new User();
        $professeur->nom = $request->input('nom');
        $professeur->prenom = $request->input('prenom');
        $professeur->email = $request->input('email');
        $professeur->mot_de_passe = bcrypt($request->input('mot_de_passe'));
        $professeur->specialite = $request->input('specialite');
        $professeur->role = 'professeur';
        $professeur->save();
        return redirect()->route('professeurs.index');
    }

    // Afficher les détails d'un professeur spécifique
    public function showProfesseur($id)
    {
        $professeur = User::where('role', 'professeur')->find($id);
        return view('professeurs.show', ['professeur' => $professeur]);
    }

    // Afficher le formulaire de modification d'un professeur spécifique
    public function ediProfesseur($id)
    {
        $professeur = User::where('role', 'professeur')->find($id);
        return view('professeurs.edit', ['professeur' => $professeur]);
    }

    // Mettre à jour les informations d'un professeur spécifique dans la base de données
    public function updateProfesseur(Request $request, $id)
    {
        $professeur = User::where('role', 'professeur')->find($id);
        $professeur->nom = $request->input('nom');
        $professeur->prenom = $request->input('prenom');
        $professeur->email = $request->input('email');
        if(!empty($request->input('mot_de_passe'))) {
            $professeur->mot_de_passe = bcrypt($request->input('mot_de_passe'));
        }
        $professeur->save();
        return redirect()->route('professeurs.show', ['professeur' => $professeur->id]);
    }

    // Supprimer un professeur spécifique de la base de données
    public function destroyProfesseur($id)
    {
        $professeur = User::where('role', 'professeur')->find($id);
        $professeur->delete();
        return redirect()->route('professeurs.index');
    }
    public function indexEtudiant()
    {
        $etudiants = User::where('role', 'etudiant')->get();
        return view('etudiants.index', ['etudiants' => $etudiants]);
    }

    // Afficher le formulaire de création d'un nouveau étudiant
    public function createEtudiant()
    {
        $filieres = Filiere::all();
        return view('etudiants.create')->with('filieres', $filieres);
    }

    // Enregistrer un nouveau étudiant dans la base de données
    public function storeEtudiant(Request $request)
    {
        $etudiant = new User();
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->email = $request->input('email');
        $etudiant->mot_de_passe = bcrypt($request->input('mot_de_passe'));
        $etudiant->role = 'etudiant';
        $etudiant->CNE = $request->input('CNE');
        $etudiant->date_de_naissance = $request->input('date_de_naissance');
        $etudiant->filiere_id = $request->input('filiere_id');
        $etudiant->save();
        return redirect()->route('etudiants.index');
    }

    // Afficher les détails d'un étudiant spécifique
    public function showEtudiant($id)
    {
        $etudiant = User::where('role', 'etudiant')->find($id);
        return view('etudiants.show', ['etudiant' => $etudiant]);
    }

    // Afficher le formulaire de modification d'un étudiant spécifique
    public function editEtudiant($id)
    {
        $etudiant = User::where('role', 'etudiant')->find($id);
        return view('etudiants.edit', ['etudiant' => $etudiant]);
    }

    // Mettre à jour les informations d'un étudiant spécifique dans la base de données
    public function updateEtudiant(Request $request, $id)
    {
        $etudiant = User::where('role', 'etudiant')->find($id);
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->email = $request->input('email');
        if(!empty($request->input('mot_de_passe'))) {
            $etudiant->mot_de_passe = bcrypt($request->input('mot_de_passe'));
        }
        $etudiant->CNE = $request->input('CNE');
        $etudiant->date_de_naissance = $request->input('date_de_naissance');
        $etudiant->filiere_id = $request->input('filiere_id');
        $etudiant->save();
        return redirect()->route('etudiants.show', ['etudiant' => $etudiant->id]);
    }

    // Supprimer un étudiant spécifique de la base de données
    public function destroyEtudiant($id)
    {
        $etudiant = User::where('role', 'etudiant')->find($id);
        $etudiant->delete();
        return redirect()->route('etudiants.index');
    }
    public function indexAdministrateur()
    {
        $administrateurs = User::where('role', 'administrateur')->get();
        return view('administrateurs.index', ['administrateurs' => $administrateurs]);
    }

    // Afficher le formulaire de création d'un nouvel administrateur
    public function createAdministrateur()
    {
        return view('administrateurs.create');
    }

    // Enregistrer un nouvel administrateur dans la base de données
    public function storeAdministrateur(Request $request)
    {
        $administrateur = new User();
        $administrateur->nom = $request->input('nom');
        $administrateur->prenom = $request->input('prenom');
        $administrateur->email = $request->input('email');
        $administrateur->mot_de_passe = bcrypt($request->input('mot_de_passe'));
        $administrateur->role = 'administrateur';
        $administrateur->save();
        return redirect()->route('administrateurs.index');
    }

    // Afficher les détails d'un administrateur spécifique
    public function showAdministrateur($id)
    {
        $administrateur = User::where('role', 'administrateur')->find($id);
        return view('administrateurs.show', ['administrateur' => $administrateur]);
    }

    // Afficher le formulaire de modification d'un administrateur spécifique
    public function edit($id)
    {
        $administrateur = User::where('role', 'administrateur')->find($id);
        return view('administrateurs.edit', ['administrateur' => $administrateur]);
    }

    // Mettre à jour les informations d'un administrateur spécifique dans la base de données
    public function updateAdministrateur(Request $request, $id)
    {
        $administrateur = User::where('role', 'administrateur')->find($id);
        $administrateur->nom = $request->input('nom');
        $administrateur->prenom = $request->input('prenom');
        $administrateur->email = $request->input('email');
        if(!empty($request->input('mot_de_passe'))) {
            $administrateur->mot_de_passe = bcrypt($request->input('mot_de_passe'));
        }
        $administrateur->save();
        return redirect()->route('administrateurs.show', ['administrateur' => $administrateur->id]);
    }

    // Supprimer un administrateur spécifique de la base de données
    public function destroyAdministrateur($id)
    {
        $administrateur = User::where('role', 'administrateur')->find($id);
        $administrateur->delete();
        return redirect()->route('administrateurs.index');
    }
}
