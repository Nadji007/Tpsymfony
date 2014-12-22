<?php
namespace TD\ConferenceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TD\ConferenceBundle\Entity\Image;

class ImageData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $image1 = new Image();
        $image1->setUrl('http://www.nad-web.fr/img/symfony/symfony_madrid.png');
        $image1->setAlt('Symfony Madrid');
        $manager->persist($image1);
        
        $image2 = new Image();
        $image2->setUrl('http://www.nad-web.fr/img/symfony/symfony_london.png');
        $image2->setAlt('Symfony London');
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setUrl('http://www.nad-web.fr/img/symfony/laravel_amsterdam2014.jpg');
        $image3->setAlt('Amsterdam');
        $manager->persist($image3);   
            
        $image4 = new Image();
        $image4 ->setUrl('http://www.nad-web.fr/img/symfony/rasmusLerdorf.jpg');
        $image4 ->setAlt('PHP Tour');
        $manager->persist($image4 );              
        
        
        $manager->flush();
        
        $this->addReference('image1', $image1);
        $this->addReference('image2', $image2);
        $this->addReference('image3', $image3);
        $this->addReference('image4', $image4);

    }
    
    public function getOrder()
    {
        return 1;
    }
}