<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Users;

class UsersFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        // Création du premier utilisateur
        $user1 = new Users();
        $user1->setName('Jean');
        $user1->setFirstName('Rillettes');
        $user1->setEmail('jean@example.com');
        $user1->setPassword('password123');
        $user1->setCreatedAt(new \DateTimeImmutable());
        $user1->setLastLogin(new \DateTimeImmutable());

// Création du deuxième utilisateur
        $user2 = new Users();
        $user2->setName('JeanRaymond');
        $user2->setFirstName('Pâté');
        $user2->setEmail('pate@example.com');
        $user2->setPassword('password123');
        $user2->setCreatedAt(new \DateTimeImmutable());
        $user2->setLastLogin(new \DateTimeImmutable());

        // Persistez l'utilisateur dans la base de données
        $manager->persist($user1);
        $manager->persist($user2);

        // Exécutez les modifications dans la base de données
        $manager->flush();
    }
    public function getOrder(): int
    {
        return 1;
    }
}
