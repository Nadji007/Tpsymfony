<?php
namespace TD\ConferenceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TD\ConferenceBundle\Entity\Posts;

class PostsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $posts1 = new Posts();
        $posts1->setTitre('Symfony Live Madrid 2014');
        $posts1->setExtrait('SensioLabs Madrid is proud to announce the third edition of the exceptionally successful SymfonyLive Madrid');
        $posts1->setContenu('The two day conference will take place on Thursday 25th - Friday 26th September 2014, in the heart of Madrid, and will bring together the sharpest minds in open source enterprise software development. Day one is a workshop day consisting of hands-on training courses from industry leading Symfony experts. Day two is the main conference day when we\'re pulling out all the stops. Talks on Symfony, Drupal, BDD and wider PHP topics will make this an event to remember');
        $posts1->setImage($this->getReference('image1'));
		$posts1->setTags($this->getReference('tags2'));
        $manager->persist($posts1);
        
        $posts2 = new Posts();
        $posts2->setTitre('Symfony Live London 2014');
        $posts2->setExtrait('SensioLabs London is proud to announce the third edition of the exceptionally successful SymfonyLive Madrid');
        $posts2->setContenu('The two day conference will take place on Thursday 25th - Friday 26th September 2014, in the heart of Madrid, and will bring together the sharpest minds in open source enterprise software development. Day one is a workshop day consisting of hands-on training courses from industry leading Symfony experts. Day two is the main conference day when we\'re pulling out all the stops. Talks on Symfony, Drupal, BDD and wider PHP topics will make this an event to remember');
        $posts2->setImage($this->getReference('image2'));
		$posts2->setTags($this->getReference('tags1'));
        $manager->persist($posts2);
        
        $posts3 = new Posts();
        $posts3->setTitre('Symfony Live Amsterdam 2014');
        $posts3->setExtrait('SensioLabs London is proud to announce the third edition of the exceptionally successful SymfonyLive Madrid');
        $posts3->setContenu('The two day conference will take place on Thursday 25th - Friday 26th September 2014, in the heart of Madrid, and will bring together the sharpest minds in open source enterprise software development. Day one is a workshop day consisting of hands-on training courses from industry leading Symfony experts. Day two is the main conference day when we\'re pulling out all the stops. Talks on Symfony, Drupal, BDD and wider PHP topics will make this an event to remember');
        $posts3->setImage($this->getReference('image3'));
		$posts3->setTags($this->getReference('tags4'));
        $manager->persist($posts3);
     
        $posts4 = new Posts();
        $posts4->setTitre('PHP Lyon');
        $posts4->setExtrait('SensioLabs London is proud to announce the third edition of the exceptionally successful SymfonyLive Madrid');
        $posts4->setContenu('The two day conference will take place on Thursday 25th - Friday 26th September 2014, in the heart of Madrid, and will bring together the sharpest minds in open source enterprise software development. Day one is a workshop day consisting of hands-on training courses from industry leading Symfony experts. Day two is the main conference day when we\'re pulling out all the stops. Talks on Symfony, Drupal, BDD and wider PHP topics will make this an event to remember');
        $posts4->setImage($this->getReference('image4'));
		 $posts4->setTags($this->getReference('tags3'));
        $manager->persist($posts4);

        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 3;
    }
}