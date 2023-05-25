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
        $users = new Users();
        $users->setName('Jean');
        $users->setFirstName('Rillettes');
        $users->setEmail('jean@example.com');
        $users->setPassword('password123');
        $users->setCreatedAt(new \DateTimeImmutable());
        $users->setLastLogin(new \DateTimeImmutable());

        // Persistez l'utilisateur dans la base de données
        $manager->persist($users);

        // Exécutez les modifications dans la base de données
        $manager->flush();
    }
    public function getOrder(): int
    {
        return 1;
    }
}
