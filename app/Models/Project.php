<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'description',
        'url',
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
        return $this->belongsToMany(Skill::class, 'project_skills');
    }
}
