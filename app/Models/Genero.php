<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $table = 'generos';
    public $timestamps = false;
    protected $guarded = array('id');

    public function Books()
    {
        return $this->belongsTo('App\Models\Book', 'book_id', 'id');
    }
}
