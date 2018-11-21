<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlStyleSheet
 *
 * @ORM\Table(name="tl_style_sheet", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlStyleSheetRepository")
 */
class TlStyleSheet
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
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="embedImages", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $embedimages = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cc", type="string", length=32, nullable=false)
     */
    private $cc = '';

    /**
     * @var string
     *
     * @ORM\Column(name="media", type="string", length=255, nullable=false)
     */
    private $media = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mediaQuery", type="text", length=65535, nullable=true)
     */
    private $mediaquery;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vars", type="text", length=65535, nullable=true)
     */
    private $vars;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmbedimages(): ?int
    {
        return $this->embedimages;
    }

    public function setEmbedimages(int $embedimages): self
    {
        $this->embedimages = $embedimages;

        return $this;
    }

    public function getCc(): ?string
    {
        return $this->cc;
    }

    public function setCc(string $cc): self
    {
        $this->cc = $cc;

        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function setMedia(string $media): self
    {
        $this->media = $media;

        return $this;
    }

    public function getMediaquery(): ?string
    {
        return $this->mediaquery;
    }

    public function setMediaquery(?string $mediaquery): self
    {
        $this->mediaquery = $mediaquery;

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


}
