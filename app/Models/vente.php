<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vente extends Model
{
    
    protected $table = 'ventes';
    protected $fillable = [
        'id','idcli','idpro','qtevente','datevente','prixvente','created_at','updated_at'
    ];
}
