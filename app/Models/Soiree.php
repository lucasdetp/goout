<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soiree extends Model
{
    protected $fillable = [
        'titre', 'date', 'participant', 'description', 'theme_id', 'ville'
    ];

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function participations()
    {
        return $this->hasMany(Participation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
