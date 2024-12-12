<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url as SitemapUrl; 
use Illuminate\Support\Facades\URL as LaravelURL; 

class GenerateSitemap extends Command
{
  
    protected $signature = 'sitemap:generate';

  
    protected $description = 'Generate the sitemap for the website';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        
        $baseUrl = LaravelURL::to('/');

       
        SitemapGenerator::create($baseUrl)
            ->hasCrawled(function (SitemapUrl $url) { 
                
                if (strpos($url->url, '/storage') !== false) {
                    return;
                }

                return $url;
            })
            ->writeToFile(public_path('sitemap.xml'));

       
        $this->info('Sitemap generated successfully!');
    }
}