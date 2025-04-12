<?php

namespace App\Services\SEO;

use Artesaos\SEOTools\Facades\SEOTools;

class SchoolEventsSeo
{
    public function apply()
    {
        SEOTools::setTitle('School Events');
        SEOTools::setDescription(
            'Stay updated with the latest school events at Scolastica Schools. From academic fairs to sports days, discover what’s happening on campus.'
        );
        SEOTools::addImages(['https://scolastica-schools.ac.tz/images/school-events.jpg']);
        SEOTools::setCanonical(url()->current());

        SEOTools::opengraph()
            ->setTitle('Upcoming Events | Scolastica Schools')
            ->setDescription(
                'Explore exciting school events, activities, and celebrations hosted by Scolastica Schools.'
            )
            ->setUrl(url()->current())
            ->setType('event')
            ->addImage('https://scolastica-schools.ac.tz/images/school-events.jpg', ['height' => 630, 'width' => 1200]);

        SEOTools::twitter()
            ->setType('summary_large_image')
            ->setTitle('Scolastica Schools Events')
            ->setDescription('Find out what’s happening at Scolastica Schools this term.')
            ->setImage('https://scolastica-schools.ac.tz/images/school-events.jpg')
            ->setSite('@ScolasticaSchools');

        SEOTools::jsonLd()
            ->setType('Event')
            ->addValue('name', 'Scolastica Schools Events')
            ->addValue('url', url()->current())
            ->addValue('description', 'Join us in our school events that nurture growth, talent, and community.')
            ->addValue('location', [
                '@type' => 'Place',
                'name' => 'Scolastica Schools Campus',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressLocality' => 'City Name',
                    'addressCountry' => 'Country Name',
                ],
            ])
            ->addValue('organizer', [
                '@type' => 'Organization',
                'name' => 'Scolastica Schools',
                'url' => 'https://scolastica-schools.ac.tz',
            ]);
    }
}
