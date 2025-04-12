<?php

namespace App\Services\SEO;

use Artesaos\SEOTools\Facades\SEOTools;

class AdministrationSeo
{
    public function apply()
    {
        // Basic Meta Tags
        SEOTools::setTitle('Administration');
        SEOTools::setDescription('Meet the leadership and administrative team of Scolastica Schools. Learn about our governance, policies, and commitment to educational excellence.');
        SEOTools::addImages(['https://scolastica-schools.ac.tz/images/scolastica-administration.jpg']);
        SEOTools::setCanonical(url()->current());

        // OpenGraph
        SEOTools::opengraph()
            ->setTitle('Administration | Scolastica Schools')
            ->setDescription('Discover the administrative structure of Scolastica Schools, including key leadership roles and responsibilities.')
            ->setUrl(url()->current())
            ->setType('article')
            ->addImage('https://scolastica-schools.ac.tz/images/scolastica-administration.jpg', ['height' => 630, 'width' => 1200])
            ->addProperty('site_name', 'Scolastica Schools')
            ->addProperty('locale', 'en_US');

        // Twitter Card
        SEOTools::twitter()
            ->setType('summary_large_image')
            ->setTitle('Administration - Scolastica Schools')
            ->setDescription('Learn more about the administration of Scolastica Schools and how we ensure academic excellence and smooth operations.')
            ->setImage('https://scolastica-schools.ac.tz/images/scolastica-administration.jpg')
            ->setSite('@ScolasticaSchools');

        // JSON-LD
        SEOTools::jsonLd()
            ->setType('WebPage')
            ->addValue('name', 'Scolastica Schools Administration')
            ->addValue('alternateName', 'School Leadership and Governance')
            ->addValue('url', url()->current())
            ->addValue('description', 'The official administration page of Scolastica Schools. Explore our leadership team, policies, and strategic direction.')
            ->addValue('publisher', [
                '@type' => 'EducationalOrganization',
                'name' => 'Scolastica Schools',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => 'https://scolastica-schools.ac.tz/images/scolastica-logo.png',
                    'width' => 300,
                    'height' => 60,
                ],
            ]);
    }
}
