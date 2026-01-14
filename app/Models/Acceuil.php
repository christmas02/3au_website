<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Acceuil extends Model
{
    use HasFactory;

    public static function saved($data){
        try{
            $accueil = new Acceuil;
            $accueil->titre_section_one  =  $data['titre_section_one'];
            $accueil->sous_titre_section_one  =  $data['sous_titre_section_one'];
            $accueil->description_section_one =  $data['description_section_one'];
            $accueil->contenue_section_one =  $data['description_section_one'];
            $accueil->titre_section_two  =  $data['titre_section_two'];
            $accueil->sous_titre_section_two =  $data['sous_titre_section_two'];
            $accueil->description_section_two  =  $data['description_section_two'];
            $accueil->contenue_section_two =  $data['description_section_one'];
            $accueil->signature_image_path  =  $data['signature_image_path'];
            $accueil->nom_signataire =  $data['nom_signataire'];
            $accueil->save();
            return $accueil;
        }catch(\Throwable $th){
            Log::error($th->getMessage());
        }
    }

    public static function findAll()
    {
        return Acceuil::find('1');
    }

    public static function updated($data)
    {
        try {

        }catch (\Throwable $th){
            Log::error($th->getMessage());
        }
    }
}
