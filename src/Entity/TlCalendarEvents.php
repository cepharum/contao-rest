<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlCalendarEvents
 *
 * @ORM\Table(name="tl_calendar_events", indexes={@ORM\Index(name="alias", columns={"alias"}), @ORM\Index(name="pid_start_stop_published", columns={"pid", "start", "stop", "published"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlCalendarEventsRepository")
 */
class TlCalendarEvents
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
     * @ORM\Column(name="addTime", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $addtime = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="startTime", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $starttime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="endTime", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $endtime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="startDate", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $startdate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="endDate", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $enddate;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=false)
     */
    private $location = '';

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address = '';

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
     * @ORM\Column(name="floating", type="string", length=32, nullable=false)
     */
    private $floating = '';

    /**
     * @var string
     *
     * @ORM\Column(name="recurring", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $recurring = '';

    /**
     * @var string
     *
     * @ORM\Column(name="repeatEach", type="string", length=64, nullable=false)
     */
    private $repeateach = '';

    /**
     * @var int
     *
     * @ORM\Column(name="repeatEnd", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $repeatend = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="recurrences", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $recurrences = '0';

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
     * @ORM\Column(name="source", type="string", length=32, nullable=false)
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

    public function getAddtime(): ?string
    {
        return $this->addtime;
    }

    public function setAddtime(string $addtime): self
    {
        $this->addtime = $addtime;

        return $this;
    }

    public function getStarttime(): ?int
    {
        return $this->starttime;
    }

    public function setStarttime(?int $starttime): self
    {
        $this->starttime = $starttime;

        return $this;
    }

    public function getEndtime(): ?int
    {
        return $this->endtime;
    }

    public function setEndtime(?int $endtime): self
    {
        $this->endtime = $endtime;

        return $this;
    }

    public function getStartdate(): ?int
    {
        return $this->startdate;
    }

    public function setStartdate(?int $startdate): self
    {
        $this->startdate = $startdate;

        return $this;
    }

    public function getEnddate(): ?int
    {
        return $this->enddate;
    }

    public function setEnddate(?int $enddate): self
    {
        $this->enddate = $enddate;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

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

    public function getRecurring(): ?string
    {
        return $this->recurring;
    }

    public function setRecurring(string $recurring): self
    {
        $this->recurring = $recurring;

        return $this;
    }

    public function getRepeateach(): ?string
    {
        return $this->repeateach;
    }

    public function setRepeateach(string $repeateach): self
    {
        $this->repeateach = $repeateach;

        return $this;
    }

    public function getRepeatend(): ?int
    {
        return $this->repeatend;
    }

    public function setRepeatend(int $repeatend): self
    {
        $this->repeatend = $repeatend;

        return $this;
    }

    public function getRecurrences(): ?int
    {
        return $this->recurrences;
    }

    public function setRecurrences(int $recurrences): self
    {
        $this->recurrences = $recurrences;

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
