<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendant extends Model
{
    use HasFactory;

    protected $table = 'attendees';

    protected $appends = [
        'certificate_url'
    ];

    public function getCertificateUrlAttribute()
    {
        return config('app.url') . $this->certificate;
    }
}
