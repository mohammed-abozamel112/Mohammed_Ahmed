<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /** @use HasFactory<\Database\Factories\SkillFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'description',
        'level',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    public function images()
    {
        return $this->belongsToMany(Image::class, 'skill_images');
    }
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_skills');
    }
}
