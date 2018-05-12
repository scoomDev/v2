<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
      'Oldies',
      'Collector',
      'Test',
      'News',
      'Let\'s play',
      'Manga',
      'Console'
    );

    $category1 = new Category();
    $category1->setName('Oldies');

    $category2 = new Category();
    $category2->setName('Collector');

    $category3 = new Category();
    $category3->setName('Test');

    $category4 = new Category();
    $category4->setName('News');

    $category5 = new Category();
    $category5->setName('Let\'s play');

    $category6 = new Category();
    $category6->setName('Manga');

    $category7 = new Category();
    $category7->setName('Console');

    $manager->persist($category1);
    $manager->persist($category2);
    $manager->persist($category3);
    $manager->persist($category4);
    $manager->persist($category5);
    $manager->persist($category6);
    $manager->persist($category7);
    $manager->flush();

    $this->addReference('Oldies', $category1);
    $this->addReference('Collector', $category2);
    $this->addReference('Test', $category3);
    $this->addReference('News', $category4);
    $this->addReference('Let\'s play', $category5);
    $this->addReference('Manga', $category6);
    $this->addReference('Console', $category7);
  }
}