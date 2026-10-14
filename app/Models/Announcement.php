<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'image',
        'category',
        'features',
        'features',
        'bottom_image',
        'content_2',
        'start_date',
        'sort_order',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'features' => 'array',
            'start_date' => 'datetime',
            'status' => 'boolean',
        ];
    }
}
