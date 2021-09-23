<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function talents()
    {
        return $this->belongsToMany(Talent::class);
    }

    public function roles()
  {
    return $this->belongsToMany(Role::class);
  }

}
