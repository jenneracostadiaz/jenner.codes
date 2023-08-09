<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relation One to Many
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Relation One to One
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }

    public function skills()
    {
        return $this->belongsTo(Skill::class, 'skillable');
    }
}
