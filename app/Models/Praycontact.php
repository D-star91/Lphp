<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praycontact extends Model
{
    use HasFactory;
    protected $fillable=['Prayname','Prayselect','Praytextarea'];
}
