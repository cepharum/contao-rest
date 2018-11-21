<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlArticle
 *
 * @ORM\Table(name="tl_article", indexes={@ORM\Index(name="alias", columns={"alias"}), @ORM\Index(name="pid_start_stop_published_sorting", columns={"pid", "start", "stop", "published", "sorting"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlArticleRepository")
 */
class TlArticle
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
     * @ORM\Column(name="sorting", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $sorting = '0';

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
     * @var int
     *
     * @ORM\Column(name="author", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $author = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="inColumn", type="string", length=32, nullable=false)
     */
    private $incolumn = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="keywords", type="text", length=65535, nullable=true)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="showTeaser", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $showteaser = '';

    /**
     * @var string
     *
     * @ORM\Column(name="teaserCssID", type="string", length=255, nullable=false)
     */
    private $teasercssid = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="teaser", type="text", length=65535, nullable=true)
     */
    private $teaser;

    /**
     * @var string
     *
     * @ORM\Column(name="printable", type="string", length=255, nullable=false)
     */
    private $printable = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customTpl", type="string", length=64, nullable=false)
     */
    private $customtpl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="protected", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $protected = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="groups", type="blob", length=65535, nullable=true)
     */
    private $groups;

    /**
     * @var string
     *
     * @ORM\Column(name="guests", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $guests = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cssID", type="string", length=255, nullable=false)
     */
    private $cssid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="published", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $published = '';

    /**
     * @var string
     *
     * @ORM\Column(name="start", type="string", length=10, nullable=false)
     */
    private $start = '';

    /**
     * @var string
     *
     * @ORM\Column(name="stop", type="string", length=10, nullable=false)
     */
    private $stop = '';

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

    public function getSorting(): ?int
    {
        return $this->sorting;
    }

    public function setSorting(int $sorting): self
    {
        $this->sorting = $sorting;

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

    public function getAuthor(): ?int
    {
        return $this->author;
    }

    public function setAuthor(int $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getIncolumn(): ?string
    {
        return $this->incolumn;
    }

    public function setIncolumn(string $incolumn): self
    {
        $this->incolumn = $incolumn;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getShowteaser(): ?string
    {
        return $this->showteaser;
    }

    public function setShowteaser(string $showteaser): self
    {
        $this->showteaser = $showteaser;

        return $this;
    }

    public function getTeasercssid(): ?string
    {
        return $this->teasercssid;
    }

    public function setTeasercssid(string $teasercssid): self
    {
        $this->teasercssid = $teasercssid;

        return $this;
    }

    public function getTeaser(): ?string
    {
        return $this->teaser;
    }

    public function setTeaser(?string $teaser): self
    {
        $this->teaser = $teaser;

        return $this;
    }

    public function getPrintable(): ?string
    {
        return $this->printable;
    }

    public function setPrintable(string $printable): self
    {
        $this->printable = $printable;

        return $this;
    }

    public function getCustomtpl(): ?string
    {
        return $this->customtpl;
    }

    public function setCustomtpl(string $customtpl): self
    {
        $this->customtpl = $customtpl;

        return $this;
    }

    public function getProtected(): ?string
    {
        return $this->protected;
    }

    public function setProtected(string $protected): self
    {
        $this->protected = $protected;

        return $this;
    }

    public function getGroups()
    {
        return $this->groups;
    }

    public function setGroups($groups): self
    {
        $this->groups = $groups;

        return $this;
    }

    public function getGuests(): ?string
    {
        return $this->guests;
    }

    public function setGuests(string $guests): self
    {
        $this->guests = $guests;

        return $this;
    }

    public function getCssid(): ?string
    {
        return $this->cssid;
    }

    public function setCssid(string $cssid): self
    {
        $this->cssid = $cssid;

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

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setStart(string $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getStop(): ?string
    {
        return $this->stop;
    }

    public function setStop(string $stop): self
    {
        $this->stop = $stop;

        return $this;
    }


}
