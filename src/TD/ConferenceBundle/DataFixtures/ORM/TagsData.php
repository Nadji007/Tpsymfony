<?php
namespace TD\ConferenceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TD\ConferenceBundle\Entity\Tags;

class TagsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tags1 = new Tags();
        $tags1->setName('Sécurité');
        $manager->persist($tags1);
       
        $tags2 = new Tags();
        $tags2->setName('Cache');
        $manager->persist($tags2);
       
        $tags3 = new Tags();
        $tags3->setName('Design Pattern');
        $manager->persist($tags3);
       
        $tags4 = new Tags();
        $tags4->setName('Test');
        $manager->persist($tags4);
        $manager->flush();
       
        $this->addReference('tags1', $tags1);
        $this->addReference('tags2', $tags2);
        $this->addReference('tags3', $tags3);
        $this->addReference('tags4', $tags4);
    }
    
    public function getOrder()
    {
        return 2;
    }
}