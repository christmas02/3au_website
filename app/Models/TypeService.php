<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class TypeService extends Model
{
    use HasFactory;

    public static function saved($data)
    {
        try {
            $typeService = new TypeService;
            $typeService->libelle_type_service = $data['libelle_type_service'];
            $typeService->slug_type_service = $data['slug_type_service'];
            $typeService->save();
            return $typeService;
        }catch(\Throwable $th){
            Log::error($th->getMessage());
        }
    }

    public static function find($id)
    {
        return TypeService::where('id', $id)->first();
    }

    public static function updated($data)
    {
        try {
            $typeService = TypeService::where('id', $data['id'])->first();
            $typeService->libelle_type_service = $data['libelle_type_service'];
            $typeService->slug_type_service = $data['slug_type_service'];
            $typeService->save();
            return $typeService;
        }catch(\Throwable $th){
            Log::error($th->getMessage());
        }
    }

    public static function findAll()
    {
        return TypeService::all();
    }
}
