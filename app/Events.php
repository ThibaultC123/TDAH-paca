<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'image', 'nom', 'lieu', 'desc', 'date_debut','date_fin',
   ];
   protected $table = 'events';
}
