<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relation one to many
    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }

    public function expertises()
    {
        return $this->hasMany(Expertise::class);
    }
}
