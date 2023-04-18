<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Pest\Laravel\get;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'created_at', 'updated_at'];

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Carbon::createFromFormat('Y-m-d H:m:s', $value)
                ->format('d-m-Y'),
//            set: fn($value) => Carbon::createFromFormat('Y-m-d H:m:s', $value)
//                ->format('d-m-Y')
        );
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Carbon::createFromFormat('Y-m-d H:m:s', $value)
                ->format('d-m-Y'),
        );
    }
}
