<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    static function nota_por_id($id){
        return Note::where('id', $id)
            ->firstOrFail();
    }
}
