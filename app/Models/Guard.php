<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guard extends Model
{
    protected $fillable = [
        'name',
        'email',
        'color_indicator',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function locations()
    {
        return $this->belongsTo(Location::class);
    }
}
