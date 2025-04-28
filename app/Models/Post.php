<?php

namespace App\Models;

use App\Enums\MediaType;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'date',
    ];

    public function postMedia() :HasMany
    {
        return $this->hasMany(PostMedia::class);
    }

    public function images() :HasMany
    {
        return $this->postMedia()->where('media_type', MediaType::Image);
    }

    public function videos() :HasMany
    {
        return $this->postMedia()->where('media_type', MediaType::Video);
    }

    protected function mainImageUrl(): Attribute
{
    return Attribute::make(
        get: fn () => optional($this->images()->where('is_primary', true)->first())->url,
    );
}
}
