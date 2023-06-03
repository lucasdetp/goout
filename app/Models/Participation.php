<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'soiree_id',
        'etoile',
        'commentaire',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function soiree()
    {
        return $this->belongsTo(Soiree::class);
    }
}