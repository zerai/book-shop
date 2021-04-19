<?php

declare(strict_types=1);

namespace BookShop\Domain\Book;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;

/**
 * @ORM\Entity()
 */
class Book
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="uuid")
     */
    private UuidInterface $id;

    /** @ORM\Embedded(class="Title", columnPrefix=false) */
    private Title $title;

    /** @ORM\Column(type="uuid") */
    private UuidInterface $authorId;

    public function __construct(UuidInterface $id, Title $title, UuidInterface $authorId)
    {
        $this->id       = $id;
        $this->title    = $title;
        $this->authorId = $authorId;
    }
}
