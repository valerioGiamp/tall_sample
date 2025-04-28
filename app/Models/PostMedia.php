<?php

namespace App\Models;

use App\Enums\MediaType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'post_id',
        'media_type',
        'url',
        'thumbnail_url',
        'is_primary',
    ];

    protected function casts(): array
    {
        return [
            'media_type' => MediaType::class,
        ];
    }
}
