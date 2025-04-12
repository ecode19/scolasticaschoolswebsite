<?php

namespace App\Services\SEO;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Str;
use App\Models\NewsEvent\NewsEvent;

class AboutEventSeo
{
    public function apply(NewsEvent $event)
    {
        $title = $event->title;
        $description = Str::limit(strip_tags($event->description), 160);
        $image = $event->featured_image ?? 'https://example.com/images/default-event.jpg';
        $eventDate = $event->event_date ?? now()->toDateString();

        // Meta Tags
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::setCanonical(url()->current());
        SEOTools::addImages([$image]);

        // OpenGraph
        SEOTools::opengraph()
            ->setTitle($title)
            ->setDescription($description)
            ->setUrl(url()->current())
            ->setType('article')
            ->addImage($image)
            ->addProperty('site_name', 'Scolastica Schools');

        // Twitter Card
        SEOTools::twitter()
            ->setType('summary_large_image')
            ->setTitle($title)
            ->setDescription($description)
            ->setImage($image)
            ->setSite('@ScolasticaSchool');

        // JSON-LD
        SEOTools::jsonLd()
            ->setType('Event')
            ->addValue('name', $event->title)
            ->addValue('url', url()->current())
            ->addValue('description', $description)
            ->addValue('startDate', $eventDate)
            ->addValue('image', $image)
            ->addValue('location', [
                '@type' => 'Place',
                'name' => 'Scolastica Schools Campus',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressLocality' => 'City Name',
                    'addressCountry' => 'Country Name',
                ],
            ]);
    }
}
