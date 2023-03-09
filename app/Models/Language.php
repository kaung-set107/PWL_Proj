<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $fillable=['name','project_id'];

    public function project(){
        return $this->belongsToMany(Project::class,'project__languages');
    }
}