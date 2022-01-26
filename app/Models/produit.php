<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    protected $table = 'produits';
    protected $fillable = [
        'id', 'libelle', 'marque', 'prix', 'qtStock', 'image', 'created_at', 'updated_at'
    ]; 

}
