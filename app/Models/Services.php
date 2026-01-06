<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    public static function findAll()
    {
        return Services::all();
    }

    public static function saved($data)
    {
        try {
            $service = new Services;
            $service->titre_service = $data['titre_service'];
            $service->description_service = $data['description_service'];
            $service->id_type_service = $data['id_type_service'];
            $service->slug_type_service = $data['slug_type_service'];
            $service->save();
            return $service;
        }catch(\Throwable $th){
            Log::error($th->getMessage());
        }
    }

    public static function updated($data)
    {
        try {
            $service = Services::where('id', $data['id'])->first();
            $service->titre_service = $data['titre_service'];
            $service->description_service = $data['description_service'];
            $service->id_type_service = $data['id_type_service'];
            $service->slug_type_service = $data['slug_type_service'];
            $service->save();
            return $service;
        }catch(\Throwable $th){
            Log::error($th->getMessage());
        }
    }

    public static function deleteService($id)
    {
        try {
            $service = Services::where('id', $id)->first();
            $service->is_deleted = 1;
            $service->save();
            return $service;
        }catch(\Throwable $th){
            Log::error($th->getMessage());
        }
    }
}
