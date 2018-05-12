<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Platform;

class PlatformFixtures extends Fixture
{
  public function load(ObjectManager $manager)
  {
    $platform1 = new Platform();
    $platform1->setName('PS4');

    $platform2 = new Platform();
    $platform2->setName('Xbox One');

    $platform3 = new Platform();
    $platform3->setName('Switch');

    $platform4 = new Platform();
    $platform4->setName('3DS');

    $platform5 = new Platform();
    $platform5->setName('PC');

    $platform6 = new Platform();
    $platform6->setName('SNES');

    $platform7 = new Platform();
    $platform7->setName('NES');

    $platform8 = new Platform();
    $platform8->setName('Master System');

    $platform9 = new Platform();
    $platform9->setName('Megadrive');

    $platform10 = new Platform();
    $platform10->setName('Blu-ray');

    $manager->persist($platform1);
    $manager->persist($platform2);
    $manager->persist($platform3);
    $manager->persist($platform4);
    $manager->persist($platform5);
    $manager->persist($platform6);
    $manager->persist($platform7);
    $manager->persist($platform8);
    $manager->persist($platform9);
    $manager->persist($platform10);
    $manager->flush();

    $this->addReference('PS4', $platform1);
    $this->addReference('Xbox One', $platform2);
    $this->addReference('Switch', $platform3);
    $this->addReference('3DS', $platform4);
    $this->addReference('PC', $platform5);
    $this->addReference('SNES', $platform6);
    $this->addReference('NES', $platform7);
    $this->addReference('Master System', $platform8);
    $this->addReference('Megadrive', $platform9);
    $this->addReference('Blu-ray', $platform10);
  }
}