<?php

namespace App\Models;

use App\Helpers\DateHelper;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'project_id', 'created_at', 'updated_at'];

    protected $touches = ['project'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn($value) => DateHelper::convertToDB($value)
        );
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn($value) => DateHelper::convertToDB($value)
        );
    }

}
