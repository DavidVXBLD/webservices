<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Customer;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            $customer = new Customer();
            $customer -> setFirstName($faker -> firstName);
            $customer -> setLastName($faker -> lastName);
            $customer -> setEmail($faker -> email);
            $customer -> setPhoneNumber($faker -> phoneNumber);
            $manager -> persist($customer);

        }
        $manager->flush();
    }
}
