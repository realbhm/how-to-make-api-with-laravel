<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    // pour eviter l'erreur mass assignement (assignement de masse)
    // on definie les colones que l'on souhaite remplir
    protected $fillable = ['title', 'content'];
}
