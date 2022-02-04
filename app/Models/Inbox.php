<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Inbox extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function user() : HasMany
    {
        return $this->hasMany(User::class);
    }

    public function message() : HasMany
    {
        return $this->hasMany(Message::class);
    }
}
