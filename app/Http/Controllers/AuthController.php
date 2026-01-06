<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class AuthController extends Controller
{
    # Page de connexion
    public function connexion()
    {
        return view('auth.login');
    }

    # Fonction de connexion
    public function login(Request $request)
    {
        try {
            $inputVal = $request->all();

            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (auth()->attempt(array('email' => $inputVal['email'], 'password' => $inputVal['password']))) {
                if (auth()->user()->role == "1") {
                    return redirect()->route('backoffice.espace');
                } elseif (auth()->user()->role == "2") {
                    return redirect()->route('backoffice.espace');
                } else {
                    return redirect()->route('connexion')->with('error', 'Infromation invalide, veiller contacter notre service');
                }
            } else {
                //dd('Infromation invalide, veiller contacter notre service');
                return redirect()->route('connexion')->with('error', 'Infromation invalide, veiller contacter notre service');
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect('error')->with('error', 'Infromation invalide, veiller contacter notre service');
        }
    }

    # Déconnexion
    public function logout()
    {
        Auth::logout();
        return redirect()->route('connexion');
    }

    # Afficher le formulaire de mot de passe oublié
    public function motPasseOublie()
    {
        return view('auth.motDePasseOublie');
    }

    # Envoyer le lien de réinitialisation du mot de passe
    public function sendResetLinkEmail(Request $request)
    {
        // Logique pour envoyer le lien de réinitialisation
    }

    # Afficher le formulaire de réinitialisation du mot de passe
    public function showResetForm(Request $request)
    {
        try {
            // dd($request->all());
            $email = $request->email;

            # vérifier si l'utilisateur existe
            $user = User::where('email', $email)->first();
            if (!$user) {
                return back()->withErrors(['email' => 'Nous ne trouvons pas un utilisateur avec cette adresse e-mail.']);
            }

            return view('auth.updateMotDePasse', compact('email'));
            
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect('error')->with('error', 'Infromation invalide, veiller contacter notre service');
        }
    }

    # Réinitialiser le mot de passe
    public function resetPassword(Request $request)
    {
        try {
            // dd($request->all());
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            $user = User::where('email', $request->email)->first();
            if (!$user) {
                return back()->withErrors(['email' => 'Nous ne trouvons pas un utilisateur avec cette adresse e-mail.']);
            }

            $user->password = bcrypt($request->password);
            $user->save();

            return redirect()->route('connexion')->with('success', 'Mot de passe réinitialisé avec succès.');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect('error')->with('error', 'Infromation invalide, veiller contacter notre service');
        }

    }
}
