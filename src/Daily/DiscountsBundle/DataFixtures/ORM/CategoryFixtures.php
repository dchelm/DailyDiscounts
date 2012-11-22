<?php

//src/Daily/DiscountsBundle/DataFixtures/ORM/CategoryFixtures

namespace Daily\DiscountsBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Daily\DiscountsBundle\Entity\Category;

class CategoryFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setName('Computacion');
        $category1->setDescription('');
        $manager->persist($category1);
        $this->addReference('c1', $category1);
        
        $category2 = new Category();
        $category2->setName('Linea Blanca');
        $category2->setDescription('');
        $manager->persist($category2);
        $this->addReference('c2', $category2);
        
        $category3 = new Category();
        $category3->setName('Electronica');
        $category3->setDescription('');
        $manager->persist($category3);
        $this->addReference('c3', $category3);
        
        $category4 = new Category();
        $category4->setName('Decohogar');
        $category4->setDescription('');
        $manager->persist($category4);
        $this->addReference('c4', $category4);
        
        $category5 = new Category();
        $category5->setName('Muebles');
        $category5->setDescription('');
        $manager->persist($category5);
        $this->addReference('c5', $category5);
        
        $category6 = new Category();
        $category6->setName('Dormitorio');
        $category6->setDescription('');
        $manager->persist($category6);
        $this->addReference('c6', $category6);
        
        $category7 = new Category();
        $category7->setName('Deporte');
        $category7->setDescription('');
        $manager->persist($category7);
        $this->addReference('c7', $category7);
        
        $category8 = new Category();
        $category8->setName('Infantil');
        $category8->setDescription('');
        $manager->persist($category8);
        $this->addReference('c8', $category8);
        
        $category9 = new Category();
        $category9->setName('Belleza');
        $category9->setDescription('');
        $manager->persist($category9);
        $this->addReference('c9', $category9);
        
        $manager->flush();
    }
        
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
?>
