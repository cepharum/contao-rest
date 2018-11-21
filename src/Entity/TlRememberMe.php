<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlRememberMe
 *
 * @ORM\Table(name="tl_remember_me")
 * @ORM\Entity(repositoryClass="App\Repository\TlRememberMeRepository")
 */
class TlRememberMe
{
    /**
     * @var string
     *
     * @ORM\Column(name="series", type="string", length=88, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $series;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=88, nullable=false, options={"fixed"=true})
     */
    private $value;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lastUsed", type="datetime", nullable=true)
     */
    private $lastused;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=100, nullable=false)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=200, nullable=false)
     */
    private $username;

    public function getSeries(): ?string
    {
        return $this->series;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getLastused(): ?\DateTimeInterface
    {
        return $this->lastused;
    }

    public function setLastused(?\DateTimeInterface $lastused): self
    {
        $this->lastused = $lastused;

        return $this;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(string $class): self
    {
        $this->class = $class;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }


}
