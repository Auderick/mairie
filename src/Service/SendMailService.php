<?php

namespace App\Service;

use App\Entity\User;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class SendMailService
{
    public function __construct(private readonly MailerInterface $mailer)
    {
    }

    /**
     * @throws TransportExceptionInterface
     */
    public function send(string $to, string $subject, string $templateTwig, array $context): void
    {
        // On crée le mail

        $email = (new TemplatedEmail())
                ->from(new Address('noreply@webtransform.fr', 'Mazerolles'))
                ->to($to)
                ->subject($subject)
                ->htmlTemplate("emails/$templateTwig")
                ->context($context);

        // On envoie le mail
        try {
            $this->mailer->send($email);
        } catch (TransportExceptionInterface $transportException) {
            throw $transportException;
        }
    }
}
