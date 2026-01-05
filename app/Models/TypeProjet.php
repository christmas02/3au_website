<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class TypeProjet extends Model
{
    use HasFactory;

    public static function saved($data)
    {
        try {
            $typeProjet = new TypeProjet;
            $typeProjet->libelle_type_projet = $data['libelle_type_projet'];
            $typeProjet->slug_type_projet = $data['slug_type_projet'];
            $typeProjet->save();
            return $typeProjet;
        }catch(\Throwable $th){
            Log::error($th->getMessage());
        }
    }

    public static function findAll()
    {
        return TypeProjet::all();
    }

    public static function find($id)
    {
        return TypeProjet::where('id', $id)->first();
    }

    public static function updated($data)
    {
        try {
            $typeProjet = TypeProjet::where('id', $data['id'])->first();
            $typeProjet->libelle_type_projet = $data['libelle_type_projet'];
            $typeProjet->slug_type_projet = $data['slug_type_projet'];
            $typeProjet->save();
            return $typeProjet;
        }catch (\Throwable $th){
            Log::error($th->getMessage());
        }
    }


}
