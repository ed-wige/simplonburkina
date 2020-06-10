<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $fillable=['nom','prenom','dateDeNaissance','sexe','formation','etablissement',
    'telephone','promotion','entrepriseActuelle','fonction','nationalite'];
}
