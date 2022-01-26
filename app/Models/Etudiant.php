<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Etudiant extends Model
{
    use SoftDeletes;
    //si le champe ['deleted_at'] remplir sa vous dir  la ligne et supprimer  
    protected $dates = ['deleted_at'];
    protected $table = 'etudiants';
    protected $fillable = ['id', 'nom', 'prenom', 'naissance', 'image', 'created_at', 'update_at'];
}
