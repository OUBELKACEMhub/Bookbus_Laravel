<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $fillable = ['nom'];

    /**
     * Relation : Une ville possède plusieurs gares.
     * D'après ton diagramme : Ville (1) ----> Gare (0..*)
     */
    public function gares()
    {
        return $this->hasMany(Gare::class);
    }
}