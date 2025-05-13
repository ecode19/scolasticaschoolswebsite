<?php

namespace App\Services\SEO;

use Artesaos\SEOTools\Facades\SEOTools;

class ScholarshipAndAidSeo
{
    public function apply()
    {
        SEOTools::setTitle('Scholarships & Financial Aid');
        SEOTools::setDescription(
            'Scolastica Schools offers scholarships and financial aid to support academic excellence and make education accessible for all.'
        );
        SEOTools::addImages(['https://scolastica-schools.ac.tz/images/scholarship-aid.jpg']);
        SEOTools::setCanonical(url()->current());

        SEOTools::opengraph()
            ->setTitle('Financial Aid & Scholarship Programs | Scolastica Schools')
            ->setDescription(
                'Explore the scholarship opportunities and financial aid options available for deserving students.'
            )
            ->setUrl(url()->current())
            ->setType('article')
            ->addImage('https://scolastica-schools.ac.tz/images/scholarship-aid.jpg', ['height' => 630, 'width' => 1200]);

        SEOTools::twitter()
            ->setType('summary_large_image')
            ->setTitle('Scholarships & Financial Aid - Scolastica Schools')
            ->setDescription('Learn about our need-based and merit-based scholarships for students.')
            ->setImage('https://scolastica-schools.ac.tz/images/scholarship-aid.jpg')
            ->setSite('@ScolasticaSchools');

        SEOTools::jsonLd()
            ->setType('EducationalOrganization')
            ->addValue('name', 'Scolastica Schools')
            ->addValue('url', url()->current())
            ->addValue('description', 'Discover how we support student success through our financial aid and scholarship programs.')
            ->addValue('logo', [
                '@type' => 'ImageObject',
                'url' => 'https://scolastica-schools.ac.tz/images/scolastica-logo.png',
                'width' => 300,
                'height' => 60,
            ]);
    }
}
