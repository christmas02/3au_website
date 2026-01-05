<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Projet extends Model
{
    use HasFactory;

    public static function findAll()
    {
        return Projet::where('is_deleted', 0)->get();
    }

    public static function findAllByService($id_service)
    {
        return Projet::where('id_service', $id_service)->get();
    }

    public static function findAllByTypeProjet($id_type_projet)
    {
        return Projet::where('id_type_projet', $id_type_projet)->get();
    }

    public static function deleteProjet($id)
    {
        try {
            $projet = Projet::where('id', $id)->first();
            $projet->is_deleted = 1;
            $projet->save();
            return $projet;
        }catch(\Throwable $th){
            Log::error($th->getMessage());
        }
    }

    public static function saved($data)
    {
        try {
            $projet = new Projet;
            $projet->picture_projet = $data['picture_projet'];
            $projet->titre_projet = $data['titre_projet'];
            $projet->sous_titre_projet = $data['sous_titre_projet'];
            $projet->description = $data['description'];
            $projet->id_type_projet = $data['id_type_projet'];
            $projet->slug_type_projet = $data['slug_type_projet'];
            $projet->id_service = $data['id_service'];
            $projet->client_projet = $data['client_projet'];
            $projet->status = $data['status'];
            $projet->temps = $data['temps'];
            $projet->phrase_acceroche = $data['phrase_acceroche'];
            $projet->slug_service = $data['slug_service'];
            $projet->save();
            return $projet;
        }catch(\Throwable $th){
            Log::error($th->getMessage());
        }
    }

    public static function firstProjet($id)
    {
        return Projet::find($id);
    }

    public static function updateProjet($data)
    {
        try {
            $projet = Projet::where('id', $data['id'])->first();
            $projet->picture_projet = $data['picture_projet'];
            $projet->titre_projet = $data['titre_projet'];
            $projet->sous_titre_projet = $data['sous_titre_projet'];
            $projet->description = $data['description'];
            $projet->id_type_projet = $data['id_type_projet'];
            $projet->slug_type_projet = $data['slug_type_projet'];
            $projet->id_service = $data['id_service'];
            $projet->client_projet = $data['client_projet'];
            $projet->status = $data['status'];
            $projet->temps = $data['temps'];
            $projet->phrase_acceroche = $data['phrase_acceroche'];
            $projet->slug_service = $data['slug_service'];
            $projet->save();
            return $projet;
        }catch(\Throwable $th){
            Log::error($th->getMessage());
        }
    }


}
