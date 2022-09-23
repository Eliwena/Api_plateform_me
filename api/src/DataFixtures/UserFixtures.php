<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //test 
        $pwd = '$2y$13$OTN6wtB8uCG1zodVYZurveCoviazEzR8PQLQoT4Z2cd8f6sOKSEQq';
        
        $user = (new User())
            ->setEmail('user@user.fr')
            ->setPassword($pwd)
            ->setRoles(['ROLE_USER'])
            ;
        $manager->persist($user);
        $manager->flush();

        $admin = (new User())
            ->setEmail('admin@admin.fr')
            ->setPassword($pwd)
            ->setRoles(['ROLE_ADMIN'])
            ;
        $manager->persist($admin);
        $manager->flush();
    }
}
