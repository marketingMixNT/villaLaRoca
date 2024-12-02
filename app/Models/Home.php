<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Home extends Model
{

    use HasTranslations;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meta_title',
        'meta_desc',
        'title',
        'logo',
        'logo_dark',
        'phone',
        'phone_second',
        'mail',
        'mail_second',
        'city',
        'address',
        'booking_link',
        'booking_script',
        'map',
        'map_link',
        'slider_title',
        'slider_subtitle',
        'slider_images',
        'slider_movie',
        'rooms_heading',
        'rooms_text',
        'testimonials_heading',
        'testimonials_text',
        'google_reviews',
        'google_reviews_average',
        'google_reviews_link',
        'tripadvisor_reviews',
        'tripadvisor_reviews_average',
        'tripadvisor_reviews_link',
        'neighborhood_heading',
        'neighborhood_text',
        'neighborhood_images',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'meta_title' => 'array',
        'meta_desc' => 'array',
        'title' => 'array',
        'booking_link' => 'array',
        'slider_title' => 'array',
        'slider_subtitle' => 'array',
        'slider_images' => 'array',
        'rooms_heading' => 'array',
        'rooms_text' => 'array',
        'testimonials_heading' => 'array',
        'testimonials_text' => 'array',
        'neighborhood_heading' => 'array',
        'neighborhood_text' => 'array',
        'neighborhood_images' => 'array',
        
    ];

    public function socials(): HasMany
    {
        return $this->hasMany(Social::class);
    }

    public function homeFirstSectionBlocks(): HasMany
    {
        return $this->hasMany(HomeFirstSectionBlock::class);
    }

    public function homeSecondSectionBlocks(): HasMany
    {
        return $this->hasMany(HomeSecondSectionBlock::class);
    }

    public $translatable = [
        'meta_title',
        'meta_desc',
        'title',
        'booking_link',
        'slider_title',
        'slider_subtitle',
        'rooms_heading',
        'rooms_text',
        'testimonials_heading',
        'testimonials_text',
        'neighborhood_heading',
        'neighborhood_text',
       
    
    ];

}
