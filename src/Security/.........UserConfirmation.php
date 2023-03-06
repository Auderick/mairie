<?php
// ne fonctionne pas
namespace App\Security;

use App\Entity\User as AppUser;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserConfirmation implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof AppUser) {
            return;
        }

    }
    
    public function checkPostAuth(UserInterface $user): void
    {
        if (!$user instanceof AppUser) {
            return;
        }
        if ($user->isIsVerified()) {
    
            throw new CustomUserMessageAccountStatusException("Votre compte n'est pas confirmé,
            merci de le valider avant le : {$user->getTokenRegistrationLifeTime()->format('d/m/Y à H\hi')}");
        }
    }
}