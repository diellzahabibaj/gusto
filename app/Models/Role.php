<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name','sector_id'];

   

    public function sectors()
    {
        return $this->belongsToMany(Sector::class);
    }

    public function talents()
    {
        return $this->belongsToMany(Talent::class);
    }
}
