<?php

namespace App\Services\SEO;

use Artesaos\SEOTools\Facades\SEOTools;

class MissionVisionSeo
{
    public function apply()
    {
        // Basic Meta Tags
        SEOTools::setTitle('Mission & Vision');
        SEOTools::setDescription(
            'Discover the mission and vision that guide Scolastica Schools. Learn about our dedication to academic excellence, integrity, and holistic education.'
        );
        SEOTools::addImages(['https://scolastica-schools.ac.tz/images/scolastica-mission-vision.jpg']);
        SEOTools::setCanonical(url()->current());

        // OpenGraph
        SEOTools::opengraph()
            ->setTitle('Our Mission & Vision - Scolastica Schools')
            ->setDescription(
                'Explore the foundational mission and visionary goals that drive Scolastica Schools to nurture future leaders and responsible citizens.'
            )
            ->setUrl(url()->current())
            ->setType('article')
            ->addImage('https://scolastica-schools.ac.tz/images/scolastica-mission-vision.jpg', ['height' => 630, 'width' => 1200])
            ->addProperty('site_name', 'Scolastica Schools')
            ->addProperty('locale', 'en_US');

        // Twitter Card
        SEOTools::twitter()
            ->setType('summary_large_image')
            ->setTitle('Mission & Vision - Scolastica Schools')
            ->setDescription('See how the mission and vision of Scolastica Schools shape our path to quality education and excellence.')
            ->setImage('https://scolastica-schools.ac.tz/images/scolastica-mission-vision.jpg')
            ->setSite('@ScolasticaSchools');

        // JSON-LD
        SEOTools::jsonLd()
            ->setType('EducationalOrganization')
            ->addValue('name', 'Scolastica Schools')
            ->addValue('url', url()->current())
            ->addValue('description', 'Scolastica Schools is guided by a strong mission and clear vision focused on educational excellence and character development.')
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
