<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nom', 'email', 'adresse'];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }
}
