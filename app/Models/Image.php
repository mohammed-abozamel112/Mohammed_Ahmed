<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /** @use HasFactory<\Database\Factories\ImageFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'alt',
        'description',
        'url',
        'image'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function education()
    {
        return $this->belongTo(Education::class);
    }
    public function experiences()
    {
        return $this->belongsToMany(Experience::class, 'experience_images');
    }
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_images');
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'skill_images');
    }
}
