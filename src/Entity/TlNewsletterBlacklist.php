<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlNewsletterBlacklist
 *
 * @ORM\Table(name="tl_newsletter_blacklist", uniqueConstraints={@ORM\UniqueConstraint(name="pid_hash", columns={"pid", "hash"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlNewsletterBlacklistRepository")
 */
class TlNewsletterBlacklist
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
     * @ORM\Column(name="pid", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $pid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="hash", type="string", length=32, nullable=true)
     */
    private $hash;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPid(): ?int
    {
        return $this->pid;
    }

    public function setPid(int $pid): self
    {
        $this->pid = $pid;

        return $this;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(?string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }


}
