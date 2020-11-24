<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class useremail extends Model
{
    use HasFactory;
    protected $fillable=['userName','userEmail'];
}
