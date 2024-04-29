<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'guard_id',
        'location_id',
        'date',
        'start_time',
        'end_time',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function securityGuard()
    {
        return $this->belongsTo(Guard::class, 'guard_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
}
