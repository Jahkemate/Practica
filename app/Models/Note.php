<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
//Habilitar el uso de SoftDeletes
    use SoftDeletes;

    protected $fillable = ['title', 'content'];

   public function editUrl()
    {
         return route('notes.edit', ['id' => $this->id]);
    }
}