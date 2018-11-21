<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlComments
 *
 * @ORM\Table(name="tl_comments", indexes={@ORM\Index(name="published", columns={"published"}), @ORM\Index(name="source_parent_published", columns={"source", "parent", "published"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlCommentsRepository")
 */
class TlComments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="tstamp", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $tstamp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=32, nullable=false)
     */
    private $source = '';

    /**
     * @var int
     *
     * @ORM\Column(name="parent", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $parent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=64, nullable=false)
     */
    private $date = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=128, nullable=false)
     */
    private $website = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="addReply", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $addreply = '';

    /**
     * @var int
     *
     * @ORM\Column(name="author", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $author = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reply", type="text", length=65535, nullable=true)
     */
    private $reply;

    /**
     * @var string
     *
     * @ORM\Column(name="published", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $published = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=64, nullable=false)
     */
    private $ip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="notified", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $notified = '';

    /**
     * @var string
     *
     * @ORM\Column(name="notifiedReply", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $notifiedreply = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTstamp(): ?int
    {
        return $this->tstamp;
    }

    public function setTstamp(int $tstamp): self
    {
        $this->tstamp = $tstamp;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getParent(): ?int
    {
        return $this->parent;
    }

    public function setParent(int $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getAddreply(): ?string
    {
        return $this->addreply;
    }

    public function setAddreply(string $addreply): self
    {
        $this->addreply = $addreply;

        return $this;
    }

    public function getAuthor(): ?int
    {
        return $this->author;
    }

    public function setAuthor(int $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getReply(): ?string
    {
        return $this->reply;
    }

    public function setReply(?string $reply): self
    {
        $this->reply = $reply;

        return $this;
    }

    public function getPublished(): ?string
    {
        return $this->published;
    }

    public function setPublished(string $published): self
    {
        $this->published = $published;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getNotified(): ?string
    {
        return $this->notified;
    }

    public function setNotified(string $notified): self
    {
        $this->notified = $notified;

        return $this;
    }

    public function getNotifiedreply(): ?string
    {
        return $this->notifiedreply;
    }

    public function setNotifiedreply(string $notifiedreply): self
    {
        $this->notifiedreply = $notifiedreply;

        return $this;
    }


}
