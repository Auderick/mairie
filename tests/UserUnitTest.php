<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();

        $user->setEmail('true@test.com')
            ->setPrenom('prenom')
            ->setNom('nom')
            ->setPassword('password')
            ->setAPropos('a propos')
            //->setTelephone('0123456789')
            //->setRoles(['ROLE_TEST'])
        ;

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getPrenom() === 'prenom');
        $this->assertTrue($user->getNom() === 'nom');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getAPropos() === 'a propos');
        //$this->assertTrue($user->getTelephone() === '0123456789');
        //$this->assertTrue($user->getRoles() === 'ROLE_TEST', 'ROLE_USER');
             
    }
    
    public function testIsFalse()
    {
        $user = new User();

        $user->setEmail('true@test.com')
            ->setPrenom('prenom')
            ->setNom('nom')
            ->setPassword('password')
            ->setAPropos('a propos')
            //->setTelephone('0123456789')
            ;
             
        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getPrenom() === 'false');
        $this->assertFalse($user->getNom() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getAPropos() === 'false');
        //$this->assertFalse($user->getTelephone() === '9876543210');
    }

    public function testIsEmpty() 
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPrenom());
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getAPropos());
        //$this->assertEmpty($user->getId());
        //$this->assertEmpty($user->getTelephone());
    }

}
