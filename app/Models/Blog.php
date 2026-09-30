<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'image',
        'categories',
        'topics',
        'related_sansthan_location',
        'related_sansthan_link',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'is_homepage',
        'is_aboutpage',
        'is_locationpage',
        'published_date',
        'status'
    ];

    // JSON डेटा को PHP Array में बदलने के लिए Casting
    protected $casts = [
        'categories' => 'array',
        'topics' => 'array',
        'published_date' => 'date',
    ];
}
