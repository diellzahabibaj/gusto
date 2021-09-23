<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;

    protected $fillable = ['name','sector_id','role_id','canton'];

    public function sectors()
    {
        return $this->belongsToMany(Sector::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
