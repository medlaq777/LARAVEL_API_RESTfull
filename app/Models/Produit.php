<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    // Define the table if it's not the plural of the model name
    protected $table = 'produits';

    // Define the fillable attributes
    protected $fillable = [
        'nom',
        'description',
        'image',
        'prix',
        'quantite',
    ];
}