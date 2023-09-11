<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

   protected $fillable = [
        'bookTittle',
        'publisherId',
        'author',
        'price',
        'releaseDate',
    ];

    public function publishert(){
        return $this->belongsTo(Publisher::class, 'publisherId', 'id');
    }
}
