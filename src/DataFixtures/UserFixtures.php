<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    /**
     * UserFixtures constructor.
     * @param UserPasswordEncoderInterface $encoder
     */
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
         $user = new User();
         $user->setCivility('Monsieur');
         $user->setName('Dupont');
         $user->setFirstname('Gérard');
         $user->setCompany('Batibat');
         $user->setEmail('dg@batibat.fr');
         $password = $this->encoder->encodePassword($user, 'dEqufr5@4ufu');
         $user->setPassword($password);
         $manager->persist($user);

         $user = new User();
         $user->setCivility('Madame');
         $user->setName('Lejeune');
         $user->setFirstname('Céline');
         $user->setCompany('Agrolagro');
         $user->setEmail('celine@agrolago.com');
         $password = $this->encoder->encodePassword($user, 'He#ag3s3Etr');
         $user->setPassword($password);
         $manager->persist($user);

         $user = new User();
         $user->setCivility('Monsieur');
         $user->setName('Lenoir');
         $user->setFirstname('Simon');
         $user->setCompany('Carbone 99');
         $user->setEmail('carbone99@gmail.com');
         $password = $this->encoder->encodePassword($user, 'g!PhA2retHa8');
         $user->setPassword($password);
         $manager->persist($user);

         $manager->flush();
    }
}
