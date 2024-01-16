<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaceApplication extends Model
{
    use HasFactory;
    protected $table = "face_applications";
    protected $fillable = ['email', 'password'];
}
