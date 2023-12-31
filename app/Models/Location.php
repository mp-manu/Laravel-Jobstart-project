<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public $table = 'location';

    public function job()
    {
        return $this->belongsTo(Job::class, 'location_id');
    }
}
