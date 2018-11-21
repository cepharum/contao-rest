<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlCommentsNotify
 *
 * @ORM\Table(name="tl_comments_notify", indexes={@ORM\Index(name="tokenremove", columns={"tokenRemove"}), @ORM\Index(name="source_parent_tokenconfirm", columns={"source", "parent", "tokenConfirm"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlCommentsNotifyRepository")
 */
class TlCommentsNotify
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
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url = '';

    /**
     * @var string
     *
     * @ORM\Column(name="addedOn", type="string", length=10, nullable=false)
     */
    private $addedon = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=64, nullable=false)
     */
    private $ip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tokenConfirm", type="string", length=32, nullable=false)
     */
    private $tokenconfirm = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tokenRemove", type="string", length=32, nullable=false)
     */
    private $tokenremove = '';

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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

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

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getTokenconfirm(): ?string
    {
        return $this->tokenconfirm;
    }

    public function setTokenconfirm(string $tokenconfirm): self
    {
        $this->tokenconfirm = $tokenconfirm;

        return $this;
    }

    public function getTokenremove(): ?string
    {
        return $this->tokenremove;
    }

    public function setTokenremove(string $tokenremove): self
    {
        $this->tokenremove = $tokenremove;

        return $this;
    }


}
