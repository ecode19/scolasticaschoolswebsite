<?php

namespace App\Services\SEO;

use Artesaos\SEOTools\Facades\SEOTools;

class AdmissionRequirementsSeo
{
    public function apply()
    {
        SEOTools::setTitle('Admission Requirements');
        SEOTools::setDescription(
            'Review the admission requirements to enroll at Scolastica Schools. Prepare the necessary documents and qualifications for a successful application.'
        );
        SEOTools::addImages(['https://scolastica-schools.ac.tz/images/admission-requirements.jpg']);
        SEOTools::setCanonical(url()->current());

        SEOTools::opengraph()
            ->setTitle('Enrollment Requirements | Scolastica Schools')
            ->setDescription(
                'Find out the essential admission requirements and eligibility criteria for joining Scolastica Schools.'
            )
            ->setUrl(url()->current())
            ->setType('article')
            ->addImage('https://scolastica-schools.ac.tz/images/admission-requirements.jpg', ['height' => 630, 'width' => 1200])
            ->addProperty('site_name', 'Scolastica Schools');

        SEOTools::twitter()
            ->setType('summary_large_image')
            ->setTitle('Admission Requirements - Scolastica Schools')
            ->setDescription('Everything you need to know before applying to Scolastica Schools.')
            ->setImage('https://scolastica-schools.ac.tz/images/admission-requirements.jpg')
            ->setSite('@ScolasticaSchools');

        SEOTools::jsonLd()
            ->setType('EducationalOrganization')
            ->addValue('name', 'Scolastica Schools')
            ->addValue('url', url()->current())
            ->addValue('description', 'Learn what documents and qualifications are required to apply to Scolastica Schools.')
            ->addValue('logo', [
                '@type' => 'ImageObject',
                'url' => 'https://scolastica-schools.ac.tz/images/scolastica-logo.png',
                'width' => 300,
                'height' => 60,
            ]);
    }
}
