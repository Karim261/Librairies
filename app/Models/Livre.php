<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    public $timestamps = false;
    // use HasFactory;
    protected $table = 'livres';
    protected $fillable = [
        'nom', 
        'auteur', 
        'date_publication', 
        'stock'];

    public function entree_stocks(){
        return $this->hasMany(EntreeStock::class);
    }
}
