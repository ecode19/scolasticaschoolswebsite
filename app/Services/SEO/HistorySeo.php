<?php

namespace App\Services\SEO;

use Artesaos\SEOTools\Facades\SEOTools;

class HistorySeo
{
    public function apply()
    {
        // Basic Meta Tags
        SEOTools::setTitle('Our History');
        SEOTools::setDescription(
            'Explore the rich history of Scolastica Schools — from our humble beginnings to becoming a leader in quality education and character development.'
        );
        SEOTools::addImages(['https://scolastica-schools.ac.tz/images/scolastica-history.jpg']);
        SEOTools::setCanonical(url()->current());

        // OpenGraph
        SEOTools::opengraph()
            ->setTitle('The Story of Scolastica Schools')
            ->setDescription(
                'Take a journey through time and discover how Scolastica Schools has grown, evolved, and made a lasting impact on generations of learners.'
            )
            ->setUrl(url()->current())
            ->setType('article')
            ->addImage('https://scolastica-schools.ac.tz/images/scolastica-history.jpg', ['height' => 630, 'width' => 1200])
            ->addProperty('site_name', 'Scolastica Schools')
            ->addProperty('locale', 'en_US');

        // Twitter Card
        SEOTools::twitter()
            ->setType('summary_large_image')
            ->setTitle('Our History - Scolastica Schools')
            ->setDescription('Learn about the foundation and legacy of Scolastica Schools and how we’ve shaped education over the years.')
            ->setImage('https://scolastica-schools.ac.tz/images/scolastica-history.jpg')
            ->setSite('@ScolasticaSchools');

        // JSON-LD
        SEOTools::jsonLd()
            ->setType('EducationalOrganization')
            ->addValue('name', 'Scolastica Schools')
            ->addValue('url', url()->current())
            ->addValue('description', 'Scolastica Schools has a proud history rooted in academic excellence, strong values, and a vision for the future.')
            ->addValue('foundingDate', '1994-1997') // Change this to your actual founding year
            ->addValue('logo', [
                '@type' => 'ImageObject',
                'url' => 'https://scolastica-schools.ac.tz/images/scolastica-logo.png',
                'width' => 300,
                'height' => 60,
            ])
            ->addValue('sameAs', [
                'https://twitter.com/ScolasticaSchools',
                'https://facebook.com/ScolasticaSchools',
                'https://linkedin.com/company/scolastica-schools',
            ]);
    }
}
