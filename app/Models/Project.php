<?php

namespace App\Models;

use App\Models\Comment;
use Conner\Likeable\Likeable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable=['title','image','dev_name','github','description'];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function language(){
        return $this->belongsToMany(Language::class,'project__languages');
    }
}