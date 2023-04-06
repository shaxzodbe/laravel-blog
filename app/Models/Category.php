<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Pest\Laravel\get;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'created_at'];

//    public function getCreatedAtAttribute($date)
//    {
//        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
//    }
//
//    public function getUpdatedAtAttribute($date)
//    {
//        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
//    }

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d-m-Y'),
            set: fn($value) => Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d-m-Y')
        );
    }
}
