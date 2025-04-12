<?php

namespace App\Services\SEO;

use Artesaos\SEOTools\Facades\SEOTools;

class TuitionFeesSeo
{
    public function apply()
    {
        SEOTools::setTitle('Tuition Fees');
        SEOTools::setDescription(
            'Explore tuition fees at Scolastica Schools. We offer transparent, competitive rates and flexible payment plans to support every family.'
        );
        SEOTools::addImages(['https://scolastica-schools.ac.tz/images/tuition-fees.jpg']);
        SEOTools::setCanonical(url()->current());

        SEOTools::opengraph()
            ->setTitle('Tuition & Fee Structure | Scolastica Schools')
            ->setDescription(
                'Discover our updated tuition fees, including details about payment options and value-added services.'
            )
            ->setUrl(url()->current())
            ->setType('article')
            ->addImage('https://scolastica-schools.ac.tz/images/tuition-fees.jpg', ['height' => 630, 'width' => 1200]);

        SEOTools::twitter()
            ->setType('summary_large_image')
            ->setTitle('Scolastica Schools Tuition Fees')
            ->setDescription('Understand our tuition structure and payment schedules.')
            ->setImage('https://scolastica-schools.ac.tz/images/tuition-fees.jpg')
            ->setSite('@ScolasticaSchools');

        SEOTools::jsonLd()
            ->setType('EducationalOrganization')
            ->addValue('name', 'Scolastica Schools')
            ->addValue('url', url()->current())
            ->addValue('description', 'We provide a clear and fair tuition fee structure to support accessible education.')
            ->addValue('logo', [
                '@type' => 'ImageObject',
                'url' => 'https://scolastica-schools.ac.tz/images/scolastica-logo.png',
                'width' => 300,
                'height' => 60,
            ]);
    }
}
