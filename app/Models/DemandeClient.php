<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeClient extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function gie()
    {
        return $this->belongsTo(Gie::class);
    }
}
