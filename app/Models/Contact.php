<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'phone', 'email', 'longitude', 'latitude', 'facebook_link', 'instagram_link', 'linkedin_link', 'whatsapp_link', 'twitter_link', 'created_by'];
}
