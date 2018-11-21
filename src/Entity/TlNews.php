<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlNews
 *
 * @ORM\Table(name="tl_news", indexes={@ORM\Index(name="alias", columns={"alias"}), @ORM\Index(name="pid_start_stop_published", columns={"pid", "start", "stop", "published"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlNewsRepository")
 */
class TlNews
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
     * @ORM\Column(name="headline", type="string", length=255, nullable=false)
     */
    private $headline = '';

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
     * @var int
     *
     * @ORM\Column(name="date", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $date = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $time = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="subheadline", type="string", length=255, nullable=false)
     */
    private $subheadline = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="teaser", type="text", length=65535, nullable=true)
     */
    private $teaser;

    /**
     * @var string
     *
     * @ORM\Column(name="addImage", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $addimage = '';

    /**
     * @var string
     *
     * @ORM\Column(name="overwriteMeta", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $overwritemeta = '';

    /**
     * @var binary|null
     *
     * @ORM\Column(name="singleSRC", type="binary", nullable=true)
     */
    private $singlesrc;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255, nullable=false)
     */
    private $alt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="imageTitle", type="string", length=255, nullable=false)
     */
    private $imagetitle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=64, nullable=false)
     */
    private $size = '';

    /**
     * @var string
     *
     * @ORM\Column(name="imagemargin", type="string", length=128, nullable=false)
     */
    private $imagemargin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="imageUrl", type="string", length=255, nullable=false)
     */
    private $imageurl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fullsize", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $fullsize = '';

    /**
     * @var string
     *
     * @ORM\Column(name="caption", type="string", length=255, nullable=false)
     */
    private $caption = '';

    /**
     * @var string
     *
     * @ORM\Column(name="floating", type="string", length=12, nullable=false)
     */
    private $floating = '';

    /**
     * @var string
     *
     * @ORM\Column(name="addEnclosure", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $addenclosure = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="enclosure", type="blob", length=65535, nullable=true)
     */
    private $enclosure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="orderEnclosure", type="blob", length=65535, nullable=true)
     */
    private $orderenclosure;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=12, nullable=false)
     */
    private $source = '';

    /**
     * @var int
     *
     * @ORM\Column(name="jumpTo", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $jumpto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="articleId", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $articleid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url = '';

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $target = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cssClass", type="string", length=255, nullable=false)
     */
    private $cssclass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="noComments", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $nocomments = '';

    /**
     * @var string
     *
     * @ORM\Column(name="featured", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $featured = '';

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

    public function getTstamp(): ?int
    {
        return $this->tstamp;
    }

    public function setTstamp(int $tstamp): self
    {
        $this->tstamp = $tstamp;

        return $this;
    }

    public function getHeadline(): ?string
    {
        return $this->headline;
    }

    public function setHeadline(string $headline): self
    {
        $this->headline = $headline;

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

    public function getDate(): ?int
    {
        return $this->date;
    }

    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTime(): ?int
    {
        return $this->time;
    }

    public function setTime(int $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getSubheadline(): ?string
    {
        return $this->subheadline;
    }

    public function setSubheadline(string $subheadline): self
    {
        $this->subheadline = $subheadline;

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

    public function getAddimage(): ?string
    {
        return $this->addimage;
    }

    public function setAddimage(string $addimage): self
    {
        $this->addimage = $addimage;

        return $this;
    }

    public function getOverwritemeta(): ?string
    {
        return $this->overwritemeta;
    }

    public function setOverwritemeta(string $overwritemeta): self
    {
        $this->overwritemeta = $overwritemeta;

        return $this;
    }

    public function getSinglesrc()
    {
        return $this->singlesrc;
    }

    public function setSinglesrc($singlesrc): self
    {
        $this->singlesrc = $singlesrc;

        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt(string $alt): self
    {
        $this->alt = $alt;

        return $this;
    }

    public function getImagetitle(): ?string
    {
        return $this->imagetitle;
    }

    public function setImagetitle(string $imagetitle): self
    {
        $this->imagetitle = $imagetitle;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getImagemargin(): ?string
    {
        return $this->imagemargin;
    }

    public function setImagemargin(string $imagemargin): self
    {
        $this->imagemargin = $imagemargin;

        return $this;
    }

    public function getImageurl(): ?string
    {
        return $this->imageurl;
    }

    public function setImageurl(string $imageurl): self
    {
        $this->imageurl = $imageurl;

        return $this;
    }

    public function getFullsize(): ?string
    {
        return $this->fullsize;
    }

    public function setFullsize(string $fullsize): self
    {
        $this->fullsize = $fullsize;

        return $this;
    }

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    public function setCaption(string $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function getFloating(): ?string
    {
        return $this->floating;
    }

    public function setFloating(string $floating): self
    {
        $this->floating = $floating;

        return $this;
    }

    public function getAddenclosure(): ?string
    {
        return $this->addenclosure;
    }

    public function setAddenclosure(string $addenclosure): self
    {
        $this->addenclosure = $addenclosure;

        return $this;
    }

    public function getEnclosure()
    {
        return $this->enclosure;
    }

    public function setEnclosure($enclosure): self
    {
        $this->enclosure = $enclosure;

        return $this;
    }

    public function getOrderenclosure()
    {
        return $this->orderenclosure;
    }

    public function setOrderenclosure($orderenclosure): self
    {
        $this->orderenclosure = $orderenclosure;

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

    public function getJumpto(): ?int
    {
        return $this->jumpto;
    }

    public function setJumpto(int $jumpto): self
    {
        $this->jumpto = $jumpto;

        return $this;
    }

    public function getArticleid(): ?int
    {
        return $this->articleid;
    }

    public function setArticleid(int $articleid): self
    {
        $this->articleid = $articleid;

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

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(string $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function getCssclass(): ?string
    {
        return $this->cssclass;
    }

    public function setCssclass(string $cssclass): self
    {
        $this->cssclass = $cssclass;

        return $this;
    }

    public function getNocomments(): ?string
    {
        return $this->nocomments;
    }

    public function setNocomments(string $nocomments): self
    {
        $this->nocomments = $nocomments;

        return $this;
    }

    public function getFeatured(): ?string
    {
        return $this->featured;
    }

    public function setFeatured(string $featured): self
    {
        $this->featured = $featured;

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
