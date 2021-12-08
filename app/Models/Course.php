<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Course extends Model
{
    use HasFactory;
    protected $fillable=["name","desc","maxgrade","user_id"];

    ## defined as a property
    function user(){
        return $this->belongsTo(User::class);
    }
}
