<?php
namespace Disycs\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Disycs\BlogBundle\Entity\Category;
use Disycs\BlogBundle\Entity\Tag;

class LoadCategoriesAndTagsData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        // tags 
        $symfony2Tag = new Tag();
        $symfony2Tag->setName('Symfony2');
        $symfony2Tag->setText('Symfony2');

        $jqueryTag = new Tag();
        $jqueryTag->setName('jquery');
        $jqueryTag->setText('jquery');

        $twigTag = new Tag();
        $twigTag->setName('twig');
        $twigTag->setText('twig');

        $doctrineTag = new Tag();
        $doctrineTag->setName('doctrine');
        $doctrineTag->setText('doctrine');

        $twigTag = new Tag();
        $twigTag->setName('spaguetti');
        $twigTag->setText('spaguetti');


        $this->addReference('symfony2-tag', $symfony2Tag);
        $this->addReference('jquery-tag', $jqueryTag);
        $this->addReference('doctrine-tag', $doctrineTag);
        $this->addReference('twig-tag', $jqueryTag);
        $this->addReference('spaguetti-tag', $jqueryTag);



        $manager->persist($symfony2Tag);
        $manager->persist($jqueryTag);
        $manager->persist($doctrineTag);
        $manager->persist($twigTag);

        // categories 
        $computerScience = new Category();
        $computerScience->setName('Computer Science');
        $computerScience->setText('Computer Science');

        $cooking = new Category();
        $cooking->setName('cooking ');
        $cooking->setText('cooking ');

        $astronomie = new Category();
        $astronomie->setName('Astronomie ');
        $astronomie->setText('Astronomie ');


        $this->addReference('computerscience-category', $computerScience);
        $this->addReference('cooking-category', $cooking);
        $this->addReference('astronomie-category', $astronomie);


        $manager->flush();

    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}