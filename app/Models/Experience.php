<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    /** @use HasFactory<\Database\Factories\ExperienceFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'description',
        'company',
        'start_date',
        'end_date',
        'location',
        'achievements'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    public function images()
    {
        return $this->belongsToMany(Image::class, 'experience_images');
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'experience_skills');
    }

}
