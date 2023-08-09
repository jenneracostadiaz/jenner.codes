<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relation one to many polymorphic
    public function attachable()
    {
        return $this->morphTo();
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function expertise()
    {
        return $this->hasMany(Expertise::class);
    }
}
