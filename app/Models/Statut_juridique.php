<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statut_juridique extends Model
{
    use HasFactory;

    protected $fillable = ['nom'];

    public function users(){
        return $this->hasMany(User::class);
    }

}
