<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Award extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'slug',
        'name',
        'description',
        'short_description',
        'sponsor_details',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function isPublished(): bool
    {
        return $this->published_at != null;
    }

    public function nominations()
    {
        return $this->hasMany(Nomination::class);
    }
}
