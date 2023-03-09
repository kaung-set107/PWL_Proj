<?php

namespace App\Models;

use App\Models\Project;
use Conner\Likeable\Likeable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory,Likeable;
    protected $fillable=['message','project_id'];

    public function project(){
        return $this->belongsTo(Project::class);
    }
}