<?php
namespace Disycs\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Disycs\BlogBundle\Entity\Post;

class LoadPostData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
       
       $post1 = new Post();
       $post1->setCategory($this->getReference('computerscience-category'));
       $post1->setTitle('Symfony2 Training');
       $post1->setContent(file_get_contents('http://loripsum.net/api'));
       $post1->addTag($this->getReference('symfony2-tag'));
       $post1->addTag($this->getReference('twig-tag'));
       $post1->addTag($this->getReference('doctrine-tag'));

       $post2 = new Post();
       $post2->setCategory($this->getReference('computerscience-category'));
       $post2->setTitle('jquery Training');
       $post2->setContent(file_get_contents('http://loripsum.net/api'));
       $post2->addTag($this->getReference('jquery-tag'));

       $post3 = new Post();
       $post3->setCategory($this->getReference('computerscience-category'));
       $post3->setTitle('jquery Training');
       $post3->setContent(file_get_contents('http://loripsum.net/api'));
       $post3->addTag($this->getReference('jquery-tag'));
    
       $post4 = new Post();
       $post4->setCategory($this->getReference('cooking-category'));
       $post4->setTitle('ma9rouna Training');
       $post4->setContent(file_get_contents('http://loripsum.net/api'));
       $post4->addTag($this->getReference('spaguetti-tag'));

       $manager->persist($post1);
       $manager->persist($post2);
       $manager->persist($post3);
       $manager->persist($post4);
       $manager->flush();

    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}