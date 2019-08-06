<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User as User;

class UserFixture extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $paswordEncoder;

    /**
     * UserFixture constructor.
     * @param UserPasswordEncoderInterface $encoderPassword
     */
    public function __construct(UserPasswordEncoderInterface $encoderPassword)
    {
        $this->paswordEncoder = $encoderPassword;
    }

    public function load(ObjectManager $manager)
    {
         $user = new User();
         $user->setUsername('mha');
         $user->setPassword($this->paswordEncoder->encodePassword($user,'mha'));
         $user->setEmail('moham.hassen@gmail.com');
         $manager->persist($user);

        $manager->flush();
    }
}
