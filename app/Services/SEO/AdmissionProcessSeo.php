<?php

namespace App\Services\SEO;

use Artesaos\SEOTools\Facades\SEOTools;

class AdmissionProcessSeo
{
    public function apply()
    {
        // Basic Meta Tags
        SEOTools::setTitle('Admission Process');
        SEOTools::setDescription(
            'Learn about the step-by-step admission process at Scolastica Schools. Get all the information you need to join our vibrant academic community.'
        );
        SEOTools::addImages(['https://scolastica-schools.ac.tz/images/admission-process.jpg']);
        SEOTools::setCanonical(url()->current());

        // OpenGraph
        SEOTools::opengraph()
            ->setTitle('How to Apply - Admission Process | Scolastica Schools')
            ->setDescription(
                'Discover the simple and transparent admission process at Scolastica Schools. Start your child’s educational journey with us today.'
            )
            ->setUrl(url()->current())
            ->setType('article')
            ->addImage('https://scolastica-schools.ac.tz/images/admission-process.jpg', ['height' => 630, 'width' => 1200])
            ->addProperty('site_name', 'Scolastica Schools')
            ->addProperty('locale', 'en_US');

        // Twitter Card
        SEOTools::twitter()
            ->setType('summary_large_image')
            ->setTitle('Admission Process - Scolastica Schools')
            ->setDescription('Understand how to apply to Scolastica Schools, from application to enrollment.')
            ->setImage('https://scolastica-schools.ac.tz/images/admission-process.jpg')
            ->setSite('@ScolasticaSchools');

        // JSON-LD
        SEOTools::jsonLd()
            ->setType('EducationalInstitution')
            ->addValue('name', 'Scolastica Schools')
            ->addValue('url', url()->current())
            ->addValue('description', 'Scolastica Schools offers a smooth, transparent admission process designed to welcome students and families into our community.')
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
