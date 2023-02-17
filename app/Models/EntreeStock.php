<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntreeStock extends Model
{
   
    public $timestamps = false;
    // use HasFactory;
    protected $table = 'entree_stocks';
    protected $fillable = ['id', 'date_entree', 'quantite'];
    
}
