<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Publications;
use App\Entity\Users;

class PublicationsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $users = $manager->getRepository(Users::class)->findOneBy([]);

        if ($users) {
            $publications = new Publications();
            $publications->setUserId($users->getId());
            $publications->setContent('Trop cool ce site');
            $publications->setCreatedAt(new \DateTimeImmutable());

            // Persistez la publication dans la base de données
            $manager->persist($publications);

            // Exécutez les modifications dans la base de données
            $manager->flush();
        }
    }
}
