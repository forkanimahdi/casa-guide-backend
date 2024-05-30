<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "token",
        "gender",
        "role"
    ];

    public function favorites()
    {
        return $this->belongsToMany(Building::class, "favorites");
    }

    public function rates()
    {
        return $this->belongsToMany(Building::class, "rates");
    }

    public function comments()
    {
        return $this->belongsToMany(Building::class, "comments");
    }

    public function visits()
    {
        return $this->belongsToMany(Building::class, 'achievements');
    }
}
