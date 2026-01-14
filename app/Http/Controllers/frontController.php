<?php

namespace App\Http\Controllers;

use App\Models\Acceuil;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        $data = Acceuil::findAll();
        //dd($data);
        return view('frontoffice.index', ['data' => $data]);
    }

    public function suiviDossier()
    {
        return view('frontoffice.dossier');
    }

    // Les carrières et offres
    public function carriere()
    {
        return view('frontoffice.carriere');
    }
    public function offre()
    {
        return view('frontoffice.offres');
    }

    public function contact()
    {
        return view('frontoffice.contact');
    }

    public function serviceUn()
    {
        return view('frontoffice.service');
    }

    //Qui sommes nous
    public function apropos()
    {
        $data = Acceuil::findAll();
        return view('frontoffice.apropos', ['data' => $data]);
    }

    //Mot du directeur
    public function directeur()
    {
        $data = Acceuil::findAll();
        return view('frontoffice.directeur', ['data' => $data]);
    }

    // les services
    public function gestionterritoriale()
    {
        return view('frontoffice.gestion-territoriale');
    }

    public function developpementeconomique()
    {
        return view('frontoffice.developpement-economique');
    }

    public function developpementurbain()
    {
        return view('frontoffice.developpement-urbain');
    }
    public function gestiondeprojet()
    {
        return view('frontoffice.gestion-de-projet');
    }

    //Les projets
    public function national()
    {
        return view('frontoffice.national');
    }
    public function international()
    {
        return view('frontoffice.international');
    }
    public function projetdetail()
    {
        return view('frontoffice.projet-detail');
    }

}
