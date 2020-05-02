<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = ['phone_number','email', 'opening_from', 'opening_to', 'short_description', 'address','copyright', 'logo_url', 'facebook_url', 'twitter_url'];
}
