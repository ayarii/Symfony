<?php

namespace App\Service;

use App\Entity\Book;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class AuthorMailerService
{
    public function __construct(
        private MailerInterface $mailer,
        private string $fromEmail,
        private string $fromName = 'Book System',   // valeur par défaut
        private string $subject = 'Nouveau livre publié !' // valeur par défaut
    ) {}

    /**
     * Envoie un mail à l’auteur lors de l’ajout d’un livre.
     */
    public function notifyAuthor(Book $book): void
    {
        $author = $book->getAuthor();
        $toEmail = $author->getEmail();

        if (!$toEmail) {
            // Aucun email, on ne fait rien
            return;
        }
        $email = (new Email())
            ->from(sprintf('%s <%s>', $this->fromName, $this->fromEmail))
            ->to($toEmail)
            ->subject($this->subject)
            ->html(sprintf(
                '<h2>Félicitations %s !</h2>
         <p>Votre nouveau livre "<strong>%s</strong>" a été ajouté à la bibliothèque.</p>
         <p>Date de publication : %s</p>',
                $author->getName(),
                $book->getTitle(),
                $book->getPublicationDate()->format('d/m/Y') // <--- ajouté
            ));

        $this->mailer->send($email);
    }
}
