<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    //

    public function index()
    {
        return view('frontoffice.index');
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
        return view('frontoffice.apropos');
    }

    //Mot du directeur
    public function directeur()
    {
        return view('frontoffice.directeur');
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
