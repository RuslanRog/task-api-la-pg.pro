<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiV1 extends Model
{
    use HasFactory;

    protected $table = 'urls';

    public $timestamps = false;

    protected $fillable = [
        'long_url',
        'long_url_hash',
        'short_url'
    ];
}
