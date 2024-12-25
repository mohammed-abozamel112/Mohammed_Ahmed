<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    /** @use HasFactory<\Database\Factories\EducationFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'field',
        'description',
        'location',
        'start_date',
        'end_date',
        'grade',
        'since',
        'status',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    
}
