<?php

namespace App\Services\SEO;

use Artesaos\SEOTools\Facades\SEOTools;

class StudentAchievementsSeo
{
    public function apply()
    {
        SEOTools::setTitle('Student Achievements');
        SEOTools::setDescription(
            'Celebrate the academic and extracurricular accomplishments of Scolastica Schools students. We are proud of their success stories.'
        );
        SEOTools::addImages(['https://scolastica-schools.ac.tz/images/student-achievements.jpg']);
        SEOTools::setCanonical(url()->current());

        SEOTools::opengraph()
            ->setTitle('Student Success Stories | Scolastica Schools')
            ->setDescription(
                'See how Scolastica Schools students excel in academics, sports, innovation, and leadership.'
            )
            ->setUrl(url()->current())
            ->setType('article')
            ->addImage('https://scolastica-schools.ac.tz/images/student-achievements.jpg', ['height' => 630, 'width' => 1200]);

        SEOTools::twitter()
            ->setType('summary_large_image')
            ->setTitle('Scolastica Student Achievements')
            ->setDescription('Highlighting the excellence and accomplishments of our students.')
            ->setImage('https://scolastica-schools.ac.tz/images/student-achievements.jpg')
            ->setSite('@ScolasticaSchools');

        SEOTools::jsonLd()
            ->setType('EducationalOrganization')
            ->addValue('name', 'Scolastica Schools')
            ->addValue('url', url()->current())
            ->addValue('description', 'Recognizing student achievements that reflect our commitment to holistic education.')
            ->addValue('logo', [
                '@type' => 'ImageObject',
                'url' => 'https://scolastica-schools.ac.tz/images/scolastica-logo.png',
                'width' => 300,
                'height' => 60,
            ]);
    }
}
