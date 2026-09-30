<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;

    public $translatable = [
        'name',
        'description',
        'status',
        'meta_description',
        'seo_title',
        'seo_description',
    ];

    protected $fillable = [
        'parent_category_id',
        'name',
        'description',
        'meta_description',
        'seo_title',
        'seo_description',
        'slug',
        'status',
        'image_path_icon',
        'sorting_order',
        'show_on_main',
        'show_on_menu',
    ];
}
