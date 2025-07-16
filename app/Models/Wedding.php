<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'groom_name',
        'bride_name',
        'wedding_date',
        'wedding_time',
        'venue_name',
        'venue_address',
        'google_map_link',
        'invitation_message',
        'rsvp_deadline',
        'slug',
        'theme',
        'cover_photo',
        'is_published',
    ];
}
