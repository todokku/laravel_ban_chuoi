<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = ['address','copyright', 'logo_url', 'short_description', 'facebook_url', 'twitter_url'];
}
