<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlNewsletterRecipients
 *
 * @ORM\Table(name="tl_newsletter_recipients", uniqueConstraints={@ORM\UniqueConstraint(name="pid_email", columns={"pid", "email"})}, indexes={@ORM\Index(name="email", columns={"email"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlNewsletterRecipientsRepository")
 */
class TlNewsletterRecipients
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
     * @var int
     *
     * @ORM\Column(name="tstamp", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $tstamp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $active = '';

    /**
     * @var string
     *
     * @ORM\Column(name="addedOn", type="string", length=10, nullable=false)
     */
    private $addedon = '';

    /**
     * @var string
     *
     * @ORM\Column(name="confirmed", type="string", length=10, nullable=false)
     */
    private $confirmed = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=64, nullable=false)
     */
    private $ip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=32, nullable=false)
     */
    private $token = '';

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

    public function getTstamp(): ?int
    {
        return $this->tstamp;
    }

    public function setTstamp(int $tstamp): self
    {
        $this->tstamp = $tstamp;

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

    public function getActive(): ?string
    {
        return $this->active;
    }

    public function setActive(string $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getAddedon(): ?string
    {
        return $this->addedon;
    }

    public function setAddedon(string $addedon): self
    {
        $this->addedon = $addedon;

        return $this;
    }

    public function getConfirmed(): ?string
    {
        return $this->confirmed;
    }

    public function setConfirmed(string $confirmed): self
    {
        $this->confirmed = $confirmed;

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

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }


}
