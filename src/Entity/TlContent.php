<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlContent
 *
 * @ORM\Table(name="tl_content", indexes={@ORM\Index(name="pid_ptable_invisible_sorting", columns={"pid", "ptable", "invisible", "sorting"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlContentRepository")
 */
class TlContent
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
     * @var string
     *
     * @ORM\Column(name="ptable", type="string", length=64, nullable=false)
     */
    private $ptable = '';

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
     * @ORM\Column(name="type", type="string", length=64, nullable=false)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="headline", type="string", length=255, nullable=false)
     */
    private $headline = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="text", length=16777215, nullable=true)
     */
    private $text;

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
     * @var string|null
     *
     * @ORM\Column(name="html", type="text", length=16777215, nullable=true)
     */
    private $html;

    /**
     * @var string
     *
     * @ORM\Column(name="listtype", type="string", length=32, nullable=false)
     */
    private $listtype = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="listitems", type="blob", length=65535, nullable=true)
     */
    private $listitems;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tableitems", type="blob", length=16777215, nullable=true)
     */
    private $tableitems;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="string", length=255, nullable=false)
     */
    private $summary = '';

    /**
     * @var string
     *
     * @ORM\Column(name="thead", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $thead = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tfoot", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $tfoot = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tleft", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $tleft = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sortable", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $sortable = '';

    /**
     * @var int
     *
     * @ORM\Column(name="sortIndex", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $sortindex = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sortOrder", type="string", length=32, nullable=false)
     */
    private $sortorder = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mooHeadline", type="string", length=255, nullable=false)
     */
    private $mooheadline = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mooStyle", type="string", length=255, nullable=false)
     */
    private $moostyle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mooClasses", type="string", length=255, nullable=false)
     */
    private $mooclasses = '';

    /**
     * @var string
     *
     * @ORM\Column(name="highlight", type="string", length=32, nullable=false)
     */
    private $highlight = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="text", length=65535, nullable=true)
     */
    private $code;

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
     * @ORM\Column(name="overwriteLink", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $overwritelink = '';

    /**
     * @var string
     *
     * @ORM\Column(name="titleText", type="string", length=255, nullable=false)
     */
    private $titletext = '';

    /**
     * @var string
     *
     * @ORM\Column(name="linkTitle", type="string", length=255, nullable=false)
     */
    private $linktitle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="embed", type="string", length=255, nullable=false)
     */
    private $embed = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rel", type="string", length=64, nullable=false)
     */
    private $rel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="useImage", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $useimage = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="multiSRC", type="blob", length=65535, nullable=true)
     */
    private $multisrc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="orderSRC", type="blob", length=65535, nullable=true)
     */
    private $ordersrc;

    /**
     * @var string
     *
     * @ORM\Column(name="useHomeDir", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $usehomedir = '';

    /**
     * @var int
     *
     * @ORM\Column(name="perRow", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $perrow = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="perPage", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $perpage = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="numberOfItems", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $numberofitems = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sortBy", type="string", length=32, nullable=false)
     */
    private $sortby = '';

    /**
     * @var string
     *
     * @ORM\Column(name="metaIgnore", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $metaignore = '';

    /**
     * @var string
     *
     * @ORM\Column(name="galleryTpl", type="string", length=64, nullable=false)
     */
    private $gallerytpl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customTpl", type="string", length=64, nullable=false)
     */
    private $customtpl = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="playerSRC", type="blob", length=65535, nullable=true)
     */
    private $playersrc;

    /**
     * @var string
     *
     * @ORM\Column(name="youtube", type="string", length=16, nullable=false)
     */
    private $youtube = '';

    /**
     * @var string
     *
     * @ORM\Column(name="vimeo", type="string", length=16, nullable=false)
     */
    private $vimeo = '';

    /**
     * @var binary|null
     *
     * @ORM\Column(name="posterSRC", type="binary", nullable=true)
     */
    private $postersrc;

    /**
     * @var string
     *
     * @ORM\Column(name="playerSize", type="string", length=64, nullable=false)
     */
    private $playersize = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="playerOptions", type="text", length=65535, nullable=true)
     */
    private $playeroptions;

    /**
     * @var int
     *
     * @ORM\Column(name="playerStart", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $playerstart = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="playerStop", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $playerstop = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="playerCaption", type="string", length=255, nullable=false)
     */
    private $playercaption = '';

    /**
     * @var string
     *
     * @ORM\Column(name="playerAspect", type="string", length=8, nullable=false)
     */
    private $playeraspect = '';

    /**
     * @var string
     *
     * @ORM\Column(name="playerPreload", type="string", length=8, nullable=false)
     */
    private $playerpreload = '';

    /**
     * @var string
     *
     * @ORM\Column(name="playerColor", type="string", length=64, nullable=false)
     */
    private $playercolor = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="youtubeOptions", type="text", length=65535, nullable=true)
     */
    private $youtubeoptions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vimeoOptions", type="text", length=65535, nullable=true)
     */
    private $vimeooptions;

    /**
     * @var int
     *
     * @ORM\Column(name="sliderDelay", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $sliderdelay = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sliderSpeed", type="integer", nullable=false, options={"default"="300","unsigned"=true})
     */
    private $sliderspeed = '300';

    /**
     * @var int
     *
     * @ORM\Column(name="sliderStartSlide", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $sliderstartslide = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sliderContinuous", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $slidercontinuous = '';

    /**
     * @var int
     *
     * @ORM\Column(name="cteAlias", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $ctealias = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="articleAlias", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $articlealias = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="article", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $article = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="form", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $form = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="module", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $module = '0';

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
     * @ORM\Column(name="invisible", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $invisible = '';

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

    /**
     * @var string
     *
     * @ORM\Column(name="com_order", type="string", length=32, nullable=false)
     */
    private $comOrder = '';

    /**
     * @var int
     *
     * @ORM\Column(name="com_perPage", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $comPerpage = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="com_moderate", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $comModerate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="com_bbcode", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $comBbcode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="com_disableCaptcha", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $comDisablecaptcha = '';

    /**
     * @var string
     *
     * @ORM\Column(name="com_requireLogin", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $comRequirelogin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="com_template", type="string", length=64, nullable=false)
     */
    private $comTemplate = '';

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

    public function getPtable(): ?string
    {
        return $this->ptable;
    }

    public function setPtable(string $ptable): self
    {
        $this->ptable = $ptable;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

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

    public function getHtml(): ?string
    {
        return $this->html;
    }

    public function setHtml(?string $html): self
    {
        $this->html = $html;

        return $this;
    }

    public function getListtype(): ?string
    {
        return $this->listtype;
    }

    public function setListtype(string $listtype): self
    {
        $this->listtype = $listtype;

        return $this;
    }

    public function getListitems()
    {
        return $this->listitems;
    }

    public function setListitems($listitems): self
    {
        $this->listitems = $listitems;

        return $this;
    }

    public function getTableitems()
    {
        return $this->tableitems;
    }

    public function setTableitems($tableitems): self
    {
        $this->tableitems = $tableitems;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getThead(): ?string
    {
        return $this->thead;
    }

    public function setThead(string $thead): self
    {
        $this->thead = $thead;

        return $this;
    }

    public function getTfoot(): ?string
    {
        return $this->tfoot;
    }

    public function setTfoot(string $tfoot): self
    {
        $this->tfoot = $tfoot;

        return $this;
    }

    public function getTleft(): ?string
    {
        return $this->tleft;
    }

    public function setTleft(string $tleft): self
    {
        $this->tleft = $tleft;

        return $this;
    }

    public function getSortable(): ?string
    {
        return $this->sortable;
    }

    public function setSortable(string $sortable): self
    {
        $this->sortable = $sortable;

        return $this;
    }

    public function getSortindex(): ?int
    {
        return $this->sortindex;
    }

    public function setSortindex(int $sortindex): self
    {
        $this->sortindex = $sortindex;

        return $this;
    }

    public function getSortorder(): ?string
    {
        return $this->sortorder;
    }

    public function setSortorder(string $sortorder): self
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    public function getMooheadline(): ?string
    {
        return $this->mooheadline;
    }

    public function setMooheadline(string $mooheadline): self
    {
        $this->mooheadline = $mooheadline;

        return $this;
    }

    public function getMoostyle(): ?string
    {
        return $this->moostyle;
    }

    public function setMoostyle(string $moostyle): self
    {
        $this->moostyle = $moostyle;

        return $this;
    }

    public function getMooclasses(): ?string
    {
        return $this->mooclasses;
    }

    public function setMooclasses(string $mooclasses): self
    {
        $this->mooclasses = $mooclasses;

        return $this;
    }

    public function getHighlight(): ?string
    {
        return $this->highlight;
    }

    public function setHighlight(string $highlight): self
    {
        $this->highlight = $highlight;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

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

    public function getOverwritelink(): ?string
    {
        return $this->overwritelink;
    }

    public function setOverwritelink(string $overwritelink): self
    {
        $this->overwritelink = $overwritelink;

        return $this;
    }

    public function getTitletext(): ?string
    {
        return $this->titletext;
    }

    public function setTitletext(string $titletext): self
    {
        $this->titletext = $titletext;

        return $this;
    }

    public function getLinktitle(): ?string
    {
        return $this->linktitle;
    }

    public function setLinktitle(string $linktitle): self
    {
        $this->linktitle = $linktitle;

        return $this;
    }

    public function getEmbed(): ?string
    {
        return $this->embed;
    }

    public function setEmbed(string $embed): self
    {
        $this->embed = $embed;

        return $this;
    }

    public function getRel(): ?string
    {
        return $this->rel;
    }

    public function setRel(string $rel): self
    {
        $this->rel = $rel;

        return $this;
    }

    public function getUseimage(): ?string
    {
        return $this->useimage;
    }

    public function setUseimage(string $useimage): self
    {
        $this->useimage = $useimage;

        return $this;
    }

    public function getMultisrc()
    {
        return $this->multisrc;
    }

    public function setMultisrc($multisrc): self
    {
        $this->multisrc = $multisrc;

        return $this;
    }

    public function getOrdersrc()
    {
        return $this->ordersrc;
    }

    public function setOrdersrc($ordersrc): self
    {
        $this->ordersrc = $ordersrc;

        return $this;
    }

    public function getUsehomedir(): ?string
    {
        return $this->usehomedir;
    }

    public function setUsehomedir(string $usehomedir): self
    {
        $this->usehomedir = $usehomedir;

        return $this;
    }

    public function getPerrow(): ?int
    {
        return $this->perrow;
    }

    public function setPerrow(int $perrow): self
    {
        $this->perrow = $perrow;

        return $this;
    }

    public function getPerpage(): ?int
    {
        return $this->perpage;
    }

    public function setPerpage(int $perpage): self
    {
        $this->perpage = $perpage;

        return $this;
    }

    public function getNumberofitems(): ?int
    {
        return $this->numberofitems;
    }

    public function setNumberofitems(int $numberofitems): self
    {
        $this->numberofitems = $numberofitems;

        return $this;
    }

    public function getSortby(): ?string
    {
        return $this->sortby;
    }

    public function setSortby(string $sortby): self
    {
        $this->sortby = $sortby;

        return $this;
    }

    public function getMetaignore(): ?string
    {
        return $this->metaignore;
    }

    public function setMetaignore(string $metaignore): self
    {
        $this->metaignore = $metaignore;

        return $this;
    }

    public function getGallerytpl(): ?string
    {
        return $this->gallerytpl;
    }

    public function setGallerytpl(string $gallerytpl): self
    {
        $this->gallerytpl = $gallerytpl;

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

    public function getPlayersrc()
    {
        return $this->playersrc;
    }

    public function setPlayersrc($playersrc): self
    {
        $this->playersrc = $playersrc;

        return $this;
    }

    public function getYoutube(): ?string
    {
        return $this->youtube;
    }

    public function setYoutube(string $youtube): self
    {
        $this->youtube = $youtube;

        return $this;
    }

    public function getVimeo(): ?string
    {
        return $this->vimeo;
    }

    public function setVimeo(string $vimeo): self
    {
        $this->vimeo = $vimeo;

        return $this;
    }

    public function getPostersrc()
    {
        return $this->postersrc;
    }

    public function setPostersrc($postersrc): self
    {
        $this->postersrc = $postersrc;

        return $this;
    }

    public function getPlayersize(): ?string
    {
        return $this->playersize;
    }

    public function setPlayersize(string $playersize): self
    {
        $this->playersize = $playersize;

        return $this;
    }

    public function getPlayeroptions(): ?string
    {
        return $this->playeroptions;
    }

    public function setPlayeroptions(?string $playeroptions): self
    {
        $this->playeroptions = $playeroptions;

        return $this;
    }

    public function getPlayerstart(): ?int
    {
        return $this->playerstart;
    }

    public function setPlayerstart(int $playerstart): self
    {
        $this->playerstart = $playerstart;

        return $this;
    }

    public function getPlayerstop(): ?int
    {
        return $this->playerstop;
    }

    public function setPlayerstop(int $playerstop): self
    {
        $this->playerstop = $playerstop;

        return $this;
    }

    public function getPlayercaption(): ?string
    {
        return $this->playercaption;
    }

    public function setPlayercaption(string $playercaption): self
    {
        $this->playercaption = $playercaption;

        return $this;
    }

    public function getPlayeraspect(): ?string
    {
        return $this->playeraspect;
    }

    public function setPlayeraspect(string $playeraspect): self
    {
        $this->playeraspect = $playeraspect;

        return $this;
    }

    public function getPlayerpreload(): ?string
    {
        return $this->playerpreload;
    }

    public function setPlayerpreload(string $playerpreload): self
    {
        $this->playerpreload = $playerpreload;

        return $this;
    }

    public function getPlayercolor(): ?string
    {
        return $this->playercolor;
    }

    public function setPlayercolor(string $playercolor): self
    {
        $this->playercolor = $playercolor;

        return $this;
    }

    public function getYoutubeoptions(): ?string
    {
        return $this->youtubeoptions;
    }

    public function setYoutubeoptions(?string $youtubeoptions): self
    {
        $this->youtubeoptions = $youtubeoptions;

        return $this;
    }

    public function getVimeooptions(): ?string
    {
        return $this->vimeooptions;
    }

    public function setVimeooptions(?string $vimeooptions): self
    {
        $this->vimeooptions = $vimeooptions;

        return $this;
    }

    public function getSliderdelay(): ?int
    {
        return $this->sliderdelay;
    }

    public function setSliderdelay(int $sliderdelay): self
    {
        $this->sliderdelay = $sliderdelay;

        return $this;
    }

    public function getSliderspeed(): ?int
    {
        return $this->sliderspeed;
    }

    public function setSliderspeed(int $sliderspeed): self
    {
        $this->sliderspeed = $sliderspeed;

        return $this;
    }

    public function getSliderstartslide(): ?int
    {
        return $this->sliderstartslide;
    }

    public function setSliderstartslide(int $sliderstartslide): self
    {
        $this->sliderstartslide = $sliderstartslide;

        return $this;
    }

    public function getSlidercontinuous(): ?string
    {
        return $this->slidercontinuous;
    }

    public function setSlidercontinuous(string $slidercontinuous): self
    {
        $this->slidercontinuous = $slidercontinuous;

        return $this;
    }

    public function getCtealias(): ?int
    {
        return $this->ctealias;
    }

    public function setCtealias(int $ctealias): self
    {
        $this->ctealias = $ctealias;

        return $this;
    }

    public function getArticlealias(): ?int
    {
        return $this->articlealias;
    }

    public function setArticlealias(int $articlealias): self
    {
        $this->articlealias = $articlealias;

        return $this;
    }

    public function getArticle(): ?int
    {
        return $this->article;
    }

    public function setArticle(int $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getForm(): ?int
    {
        return $this->form;
    }

    public function setForm(int $form): self
    {
        $this->form = $form;

        return $this;
    }

    public function getModule(): ?int
    {
        return $this->module;
    }

    public function setModule(int $module): self
    {
        $this->module = $module;

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

    public function getInvisible(): ?string
    {
        return $this->invisible;
    }

    public function setInvisible(string $invisible): self
    {
        $this->invisible = $invisible;

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

    public function getComOrder(): ?string
    {
        return $this->comOrder;
    }

    public function setComOrder(string $comOrder): self
    {
        $this->comOrder = $comOrder;

        return $this;
    }

    public function getComPerpage(): ?int
    {
        return $this->comPerpage;
    }

    public function setComPerpage(int $comPerpage): self
    {
        $this->comPerpage = $comPerpage;

        return $this;
    }

    public function getComModerate(): ?string
    {
        return $this->comModerate;
    }

    public function setComModerate(string $comModerate): self
    {
        $this->comModerate = $comModerate;

        return $this;
    }

    public function getComBbcode(): ?string
    {
        return $this->comBbcode;
    }

    public function setComBbcode(string $comBbcode): self
    {
        $this->comBbcode = $comBbcode;

        return $this;
    }

    public function getComDisablecaptcha(): ?string
    {
        return $this->comDisablecaptcha;
    }

    public function setComDisablecaptcha(string $comDisablecaptcha): self
    {
        $this->comDisablecaptcha = $comDisablecaptcha;

        return $this;
    }

    public function getComRequirelogin(): ?string
    {
        return $this->comRequirelogin;
    }

    public function setComRequirelogin(string $comRequirelogin): self
    {
        $this->comRequirelogin = $comRequirelogin;

        return $this;
    }

    public function getComTemplate(): ?string
    {
        return $this->comTemplate;
    }

    public function setComTemplate(string $comTemplate): self
    {
        $this->comTemplate = $comTemplate;

        return $this;
    }


}
