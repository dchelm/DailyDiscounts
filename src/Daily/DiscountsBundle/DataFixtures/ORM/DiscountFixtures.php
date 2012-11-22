<?php
//src/Daily/DiscountsBundle/DataFixtures/ORM/DiscountFixtures

namespace Daily\DiscountsBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Daily\DiscountsBundle\Entity\Discount;

class DiscountFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $url = 'http://www.udd.cl/wp-content/uploads/2010/03/J.Lin2_-204x139.jpg';
        
        $discount1 = new Discount();
        $discount1->setName('Descuento 1');
        $discount1->setBrand('Marca 1');
        $discount1->setCaption('caption 1 caption 1 caption 1 caption 1 caption 1 caption 1');
        $discount1->setDescription('description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 ');
        $discount1->setPrice(220000);
        $discount1->setOrignialPrice(300000);
        $discount1->setPicture($url);
        $discount1->setEndingDate(new \DateTime());
        $discount1->addCategorie($this->referenceRepository->getReference('c1'));
        $manager->persist($discount1);
        
        $discount2 = new Discount();
        $discount2->setName('Descuento 2');
        $discount2->setBrand('Marca 2');
        $discount2->setCaption('caption 2 caption 2 caption 2 caption 2 caption 2 caption 2');
        $discount2->setDescription('description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 ');
        $discount2->setPrice(220000);
        $discount2->setOrignialPrice(300000);
        $discount2->setPicture($url);
        $discount2->setEndingDate(new \DateTime());
        $discount2->addCategorie($this->referenceRepository->getReference('c2'));
        $manager->persist($discount2);
        
        $discount3 = new Discount();
        $discount3->setName('Descuento 3');
        $discount3->setBrand('Marca 3');
        $discount3->setCaption('caption 3 caption 3 caption 3 caption 3 caption 3 caption 3');
        $discount3->setDescription('description 3 description 3 description 3 description 3 description 3 description 3 description 3 description 3 description 3 ');
        $discount3->setPrice(220000);
        $discount3->setOrignialPrice(300000);
        $discount3->setPicture($url);
        $discount3->setEndingDate(new \DateTime());
        $discount3->addCategorie($this->referenceRepository->getReference('c3'));
        $manager->persist($discount3);
        
        $discount4 = new Discount();
        $discount4->setName('Descuento 4');
        $discount4->setBrand('Marca 4');
        $discount4->setCaption('caption 4 caption 4 caption 4 caption 4 caption 4 caption 4');
        $discount4->setDescription('description 4 description 4 description 4 description 4 description 4 description 4 description 4 description 4 description 4 ');
        $discount4->setPrice(220000);
        $discount4->setOrignialPrice(300000);
        $discount4->setPicture($url);
        $discount4->setEndingDate(new \DateTime());
        $discount4->addCategorie($this->referenceRepository->getReference('c4'));
        $manager->persist($discount4);
        
        $discount5 = new Discount();
        $discount5->setName('Descuento 5');
        $discount5->setBrand('Marca 5');
        $discount5->setCaption('caption 5 caption 5 caption 5 caption 5 caption 5 caption 5');
        $discount5->setDescription('description 5 description 5 description 5 description 5 description 5 description 5 description 5 description 5 description 5 ');
        $discount5->setPrice(220000);
        $discount5->setOrignialPrice(300000);
        $discount5->setPicture($url);
        $discount5->setEndingDate(new \DateTime());
        $discount5->addCategorie($this->referenceRepository->getReference('c5'));
        $manager->persist($discount5);
        
        $discount6 = new Discount();
        $discount6->setName('Descuento 6');
        $discount6->setBrand('Marca 6');
        $discount6->setCaption('caption 6 caption 6 caption 6 caption 6 caption 6 caption 6');
        $discount6->setDescription('description 6 description 6 description 6 description 6 description 6 description 6 description 6 description 6 description 6 ');
        $discount6->setPrice(220000);
        $discount6->setOrignialPrice(300000);
        $discount6->setPicture($url);
        $discount6->setEndingDate(new \DateTime());
        $discount6->addCategorie($this->referenceRepository->getReference('c6'));
        $manager->persist($discount6);
        
        $discount7 = new Discount();
        $discount7->setName('Descuento 7');
        $discount7->setBrand('Marca 7');
        $discount7->setCaption('caption 7 caption 7 caption 7 caption 7 caption 7 caption 7');
        $discount7->setDescription('description 7 description 7 description 7 description 7 description 7 description 7 description 7 description 7 description 7 ');
        $discount7->setPrice(220000);
        $discount7->setOrignialPrice(300000);
        $discount7->setPicture($url);
        $discount7->setEndingDate(new \DateTime());
        $discount7->addCategorie($this->referenceRepository->getReference('c7'));
        $manager->persist($discount7);
        
        $discount8 = new Discount();
        $discount8->setName('Descuento 8');
        $discount8->setBrand('Marca 8');
        $discount8->setCaption('caption 8 caption 8 caption 8 caption 8 caption 8 caption 8');
        $discount8->setDescription('description 8 description 8 description 8 description 8 description 8 description 8 description 8 description 8 description 8 ');
        $discount8->setPrice(220000);
        $discount8->setOrignialPrice(300000);
        $discount8->setPicture($url);
        $discount8->setEndingDate(new \DateTime());
        $discount8->addCategorie($this->referenceRepository->getReference('c8'));
        $manager->persist($discount8);
        
        $discount9 = new Discount();
        $discount9->setName('Descuento 9');
        $discount9->setBrand('Marca 9');
        $discount9->setCaption('caption 9 caption 9 caption 9 caption 9 caption 9 caption 9');
        $discount9->setDescription('description 9 description 9 description 9 description 9 description 9 description 9 description 9 description 9 description 9 ');
        $discount9->setPrice(220000);
        $discount9->setOrignialPrice(300000);
        $discount9->setPicture($url);
        $discount9->setEndingDate(new \DateTime());
        $discount9->addCategorie($this->getReference('c9'));
        $manager->persist($discount9);
        $manager->flush();
        
        $discount10 = new Discount();
        $discount10->setName('Descuento 10');
        $discount10->setBrand('Marca 10');
        $discount10->setCaption('caption 10 caption 10 caption 10 caption 10 caption 10 caption 10');
        $discount10->setDescription('description 10 description 10 description 10 description 10 description 10 description 10 description 10 description 10 description 10 ');
        $discount10->setPrice(220000);
        $discount10->setOrignialPrice(300000);
        $discount10->setPicture($url);
        $discount10->setEndingDate(new \DateTime());
        $discount10->addCategorie($this->getReference('c1'));
        $discount10->addCategorie($this->getReference('c2'));
        $manager->persist($discount10);
        
        $manager->flush();
    }
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}

?>
