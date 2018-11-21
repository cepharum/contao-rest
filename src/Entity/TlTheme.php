<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlTheme
 *
 * @ORM\Table(name="tl_theme")
 * @ORM\Entity(repositoryClass="App\Repository\TlThemeRepository")
 */
class TlTheme
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
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=128, nullable=false)
     */
    private $author = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="folders", type="blob", length=65535, nullable=true)
     */
    private $folders;

    /**
     * @var binary|null
     *
     * @ORM\Column(name="screenshot", type="binary", nullable=true)
     */
    private $screenshot;

    /**
     * @var string
     *
     * @ORM\Column(name="templates", type="string", length=255, nullable=false)
     */
    private $templates = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="vars", type="text", length=65535, nullable=true)
     */
    private $vars;

    /**
     * @var string
     *
     * @ORM\Column(name="defaultImageDensities", type="string", length=255, nullable=false)
     */
    private $defaultimagedensities = '';

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getFolders()
    {
        return $this->folders;
    }

    public function setFolders($folders): self
    {
        $this->folders = $folders;

        return $this;
    }

    public function getScreenshot()
    {
        return $this->screenshot;
    }

    public function setScreenshot($screenshot): self
    {
        $this->screenshot = $screenshot;

        return $this;
    }

    public function getTemplates(): ?string
    {
        return $this->templates;
    }

    public function setTemplates(string $templates): self
    {
        $this->templates = $templates;

        return $this;
    }

    public function getVars(): ?string
    {
        return $this->vars;
    }

    public function setVars(?string $vars): self
    {
        $this->vars = $vars;

        return $this;
    }

    public function getDefaultimagedensities(): ?string
    {
        return $this->defaultimagedensities;
    }

    public function setDefaultimagedensities(string $defaultimagedensities): self
    {
        $this->defaultimagedensities = $defaultimagedensities;

        return $this;
    }


}
