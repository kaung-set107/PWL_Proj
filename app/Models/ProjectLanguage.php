<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectLanguage extends Model
{
    use HasFactory;
    protected $fillable=['project_id','language_id'];
}