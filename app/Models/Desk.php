<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Desk extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public  function lists(): hasMany
    {
        return $this->hasMany(DeskList::class);
    }
}
