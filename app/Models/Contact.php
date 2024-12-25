<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

}
