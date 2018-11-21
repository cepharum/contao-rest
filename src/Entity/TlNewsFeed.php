<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlNewsFeed
 *
 * @ORM\Table(name="tl_news_feed", indexes={@ORM\Index(name="alias", columns={"alias"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlNewsFeedRepository")
 */
class TlNewsFeed
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
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=128, nullable=false)
     */
    private $alias = '';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=32, nullable=false)
     */
    private $language = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="archives", type="blob", length=65535, nullable=true)
     */
    private $archives;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=32, nullable=false)
     */
    private $format = '';

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=32, nullable=false)
     */
    private $source = '';

    /**
     * @var int
     *
     * @ORM\Column(name="maxItems", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $maxitems = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="feedBase", type="string", length=255, nullable=false)
     */
    private $feedbase = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(string $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getArchives()
    {
        return $this->archives;
    }

    public function setArchives($archives): self
    {
        $this->archives = $archives;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(string $format): self
    {
        $this->format = $format;

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

    public function getMaxitems(): ?int
    {
        return $this->maxitems;
    }

    public function setMaxitems(int $maxitems): self
    {
        $this->maxitems = $maxitems;

        return $this;
    }

    public function getFeedbase(): ?string
    {
        return $this->feedbase;
    }

    public function setFeedbase(string $feedbase): self
    {
        $this->feedbase = $feedbase;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }


}
