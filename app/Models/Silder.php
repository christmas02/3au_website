<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Silder extends Model
{
    use HasFactory;

    public static function findAll()
    {
        return Silder::all();
    }

    public static function saved($data)
    {
        try {
            $silder = new Silder;
            $silder->titre_silder = $data['titre_silder'];
            $silder->description_silder = $data['description_silder'];
            $silder->image_silder_path = $data['image_silder_path'];
            $silder->save();
            return $silder;
        }catch(\Throwable $th){
            Log::error($th->getMessage());
        }
    }
}
