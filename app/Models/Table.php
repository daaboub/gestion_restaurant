<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = ["name", "status", "slug"];

    public static function rules($id)
    {
        return [
            "name" => "required|unique:tables,name,".$id,
            "status" => "boolean"
        ];
    }
}
