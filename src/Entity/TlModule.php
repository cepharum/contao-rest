<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlModule
 *
 * @ORM\Table(name="tl_module")
 * @ORM\Entity(repositoryClass="App\Repository\TlModuleRepository")
 */
class TlModule
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="headline", type="string", length=255, nullable=false)
     */
    private $headline = '';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=64, nullable=false)
     */
    private $type = '';

    /**
     * @var int
     *
     * @ORM\Column(name="levelOffset", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $leveloffset = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="showLevel", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $showlevel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="hardLimit", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $hardlimit = '';

    /**
     * @var string
     *
     * @ORM\Column(name="showProtected", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $showprotected = '';

    /**
     * @var string
     *
     * @ORM\Column(name="defineRoot", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $defineroot = '';

    /**
     * @var int
     *
     * @ORM\Column(name="rootPage", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rootpage = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="navigationTpl", type="string", length=64, nullable=false)
     */
    private $navigationtpl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customTpl", type="string", length=64, nullable=false)
     */
    private $customtpl = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pages", type="blob", length=65535, nullable=true)
     */
    private $pages;

    /**
     * @var string|null
     *
     * @ORM\Column(name="orderPages", type="blob", length=65535, nullable=true)
     */
    private $orderpages;

    /**
     * @var string
     *
     * @ORM\Column(name="showHidden", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $showhidden = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customLabel", type="string", length=64, nullable=false)
     */
    private $customlabel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="autologin", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $autologin = '';

    /**
     * @var int
     *
     * @ORM\Column(name="jumpTo", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $jumpto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="redirectBack", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $redirectback = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="editable", type="blob", length=65535, nullable=true)
     */
    private $editable;

    /**
     * @var string
     *
     * @ORM\Column(name="memberTpl", type="string", length=64, nullable=false)
     */
    private $membertpl = '';

    /**
     * @var int
     *
     * @ORM\Column(name="form", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $form = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="queryType", type="string", length=32, nullable=false)
     */
    private $querytype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fuzzy", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $fuzzy = '';

    /**
     * @var int
     *
     * @ORM\Column(name="contextLength", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $contextlength = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="totalLength", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $totallength = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="perPage", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $perpage = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="searchType", type="string", length=32, nullable=false)
     */
    private $searchtype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="searchTpl", type="string", length=64, nullable=false)
     */
    private $searchtpl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="inColumn", type="string", length=32, nullable=false)
     */
    private $incolumn = '';

    /**
     * @var int
     *
     * @ORM\Column(name="skipFirst", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $skipfirst = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="loadFirst", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $loadfirst = '';

    /**
     * @var binary|null
     *
     * @ORM\Column(name="singleSRC", type="binary", nullable=true)
     */
    private $singlesrc;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url = '';

    /**
     * @var string
     *
     * @ORM\Column(name="imgSize", type="string", length=64, nullable=false)
     */
    private $imgsize = '';

    /**
     * @var string
     *
     * @ORM\Column(name="useCaption", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $usecaption = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fullsize", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $fullsize = '';

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
     * @var string|null
     *
     * @ORM\Column(name="html", type="text", length=65535, nullable=true)
     */
    private $html;

    /**
     * @var int
     *
     * @ORM\Column(name="rss_cache", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rssCache = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="rss_feed", type="text", length=65535, nullable=true)
     */
    private $rssFeed;

    /**
     * @var string
     *
     * @ORM\Column(name="rss_template", type="string", length=64, nullable=false)
     */
    private $rssTemplate = '';

    /**
     * @var int
     *
     * @ORM\Column(name="numberOfItems", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $numberofitems = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="disableCaptcha", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $disablecaptcha = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reg_groups", type="blob", length=65535, nullable=true)
     */
    private $regGroups;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_allowLogin", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $regAllowlogin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="reg_skipName", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $regSkipname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="reg_close", type="string", length=32, nullable=false)
     */
    private $regClose = '';

    /**
     * @var string
     *
     * @ORM\Column(name="reg_assignDir", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $regAssigndir = '';

    /**
     * @var binary|null
     *
     * @ORM\Column(name="reg_homeDir", type="binary", nullable=true)
     */
    private $regHomedir;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_activate", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $regActivate = '';

    /**
     * @var int
     *
     * @ORM\Column(name="reg_jumpTo", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $regJumpto = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reg_text", type="text", length=65535, nullable=true)
     */
    private $regText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reg_password", type="text", length=65535, nullable=true)
     */
    private $regPassword;

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
     * @var string|null
     *
     * @ORM\Column(name="faq_categories", type="blob", length=65535, nullable=true)
     */
    private $faqCategories;

    /**
     * @var int
     *
     * @ORM\Column(name="faq_readerModule", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $faqReadermodule = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="list_table", type="string", length=64, nullable=false)
     */
    private $listTable = '';

    /**
     * @var string
     *
     * @ORM\Column(name="list_fields", type="string", length=255, nullable=false)
     */
    private $listFields = '';

    /**
     * @var string
     *
     * @ORM\Column(name="list_where", type="string", length=255, nullable=false)
     */
    private $listWhere = '';

    /**
     * @var string
     *
     * @ORM\Column(name="list_search", type="string", length=255, nullable=false)
     */
    private $listSearch = '';

    /**
     * @var string
     *
     * @ORM\Column(name="list_sort", type="string", length=255, nullable=false)
     */
    private $listSort = '';

    /**
     * @var string
     *
     * @ORM\Column(name="list_info", type="string", length=255, nullable=false)
     */
    private $listInfo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="list_info_where", type="string", length=255, nullable=false)
     */
    private $listInfoWhere = '';

    /**
     * @var string
     *
     * @ORM\Column(name="list_layout", type="string", length=64, nullable=false)
     */
    private $listLayout = '';

    /**
     * @var string
     *
     * @ORM\Column(name="list_info_layout", type="string", length=64, nullable=false)
     */
    private $listInfoLayout = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="news_archives", type="blob", length=65535, nullable=true)
     */
    private $newsArchives;

    /**
     * @var string
     *
     * @ORM\Column(name="news_featured", type="string", length=16, nullable=false)
     */
    private $newsFeatured = '';

    /**
     * @var string
     *
     * @ORM\Column(name="news_jumpToCurrent", type="string", length=16, nullable=false)
     */
    private $newsJumptocurrent = '';

    /**
     * @var int
     *
     * @ORM\Column(name="news_readerModule", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $newsReadermodule = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="news_metaFields", type="string", length=255, nullable=false)
     */
    private $newsMetafields = '';

    /**
     * @var string
     *
     * @ORM\Column(name="news_template", type="string", length=64, nullable=false)
     */
    private $newsTemplate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="news_format", type="string", length=32, nullable=false)
     */
    private $newsFormat = '';

    /**
     * @var int
     *
     * @ORM\Column(name="news_startDay", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $newsStartday = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="news_order", type="string", length=32, nullable=false)
     */
    private $newsOrder = '';

    /**
     * @var string
     *
     * @ORM\Column(name="news_showQuantity", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $newsShowquantity = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="newsletters", type="blob", length=65535, nullable=true)
     */
    private $newsletters;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nl_channels", type="blob", length=65535, nullable=true)
     */
    private $nlChannels;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nl_text", type="text", length=65535, nullable=true)
     */
    private $nlText;

    /**
     * @var string
     *
     * @ORM\Column(name="nl_hideChannels", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $nlHidechannels = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nl_subscribe", type="text", length=65535, nullable=true)
     */
    private $nlSubscribe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nl_unsubscribe", type="text", length=65535, nullable=true)
     */
    private $nlUnsubscribe;

    /**
     * @var string
     *
     * @ORM\Column(name="nl_template", type="string", length=64, nullable=false)
     */
    private $nlTemplate = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cal_calendar", type="blob", length=65535, nullable=true)
     */
    private $calCalendar;

    /**
     * @var string
     *
     * @ORM\Column(name="cal_noSpan", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $calNospan = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cal_hideRunning", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $calHiderunning = '';

    /**
     * @var int
     *
     * @ORM\Column(name="cal_startDay", type="smallint", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $calStartday = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="cal_format", type="string", length=32, nullable=false)
     */
    private $calFormat = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cal_ignoreDynamic", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $calIgnoredynamic = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cal_order", type="string", length=32, nullable=false)
     */
    private $calOrder = '';

    /**
     * @var int
     *
     * @ORM\Column(name="cal_readerModule", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $calReadermodule = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cal_limit", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $calLimit = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cal_template", type="string", length=64, nullable=false)
     */
    private $calTemplate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cal_ctemplate", type="string", length=64, nullable=false)
     */
    private $calCtemplate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cal_showQuantity", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $calShowquantity = '';

    /**
     * @var string
     *
     * @ORM\Column(name="com_order", type="string", length=32, nullable=false)
     */
    private $comOrder = '';

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
     * @ORM\Column(name="com_requireLogin", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $comRequirelogin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="com_disableCaptcha", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $comDisablecaptcha = '';

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

    public function getHeadline(): ?string
    {
        return $this->headline;
    }

    public function setHeadline(string $headline): self
    {
        $this->headline = $headline;

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

    public function getLeveloffset(): ?int
    {
        return $this->leveloffset;
    }

    public function setLeveloffset(int $leveloffset): self
    {
        $this->leveloffset = $leveloffset;

        return $this;
    }

    public function getShowlevel(): ?int
    {
        return $this->showlevel;
    }

    public function setShowlevel(int $showlevel): self
    {
        $this->showlevel = $showlevel;

        return $this;
    }

    public function getHardlimit(): ?string
    {
        return $this->hardlimit;
    }

    public function setHardlimit(string $hardlimit): self
    {
        $this->hardlimit = $hardlimit;

        return $this;
    }

    public function getShowprotected(): ?string
    {
        return $this->showprotected;
    }

    public function setShowprotected(string $showprotected): self
    {
        $this->showprotected = $showprotected;

        return $this;
    }

    public function getDefineroot(): ?string
    {
        return $this->defineroot;
    }

    public function setDefineroot(string $defineroot): self
    {
        $this->defineroot = $defineroot;

        return $this;
    }

    public function getRootpage(): ?int
    {
        return $this->rootpage;
    }

    public function setRootpage(int $rootpage): self
    {
        $this->rootpage = $rootpage;

        return $this;
    }

    public function getNavigationtpl(): ?string
    {
        return $this->navigationtpl;
    }

    public function setNavigationtpl(string $navigationtpl): self
    {
        $this->navigationtpl = $navigationtpl;

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

    public function getPages()
    {
        return $this->pages;
    }

    public function setPages($pages): self
    {
        $this->pages = $pages;

        return $this;
    }

    public function getOrderpages()
    {
        return $this->orderpages;
    }

    public function setOrderpages($orderpages): self
    {
        $this->orderpages = $orderpages;

        return $this;
    }

    public function getShowhidden(): ?string
    {
        return $this->showhidden;
    }

    public function setShowhidden(string $showhidden): self
    {
        $this->showhidden = $showhidden;

        return $this;
    }

    public function getCustomlabel(): ?string
    {
        return $this->customlabel;
    }

    public function setCustomlabel(string $customlabel): self
    {
        $this->customlabel = $customlabel;

        return $this;
    }

    public function getAutologin(): ?string
    {
        return $this->autologin;
    }

    public function setAutologin(string $autologin): self
    {
        $this->autologin = $autologin;

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

    public function getRedirectback(): ?string
    {
        return $this->redirectback;
    }

    public function setRedirectback(string $redirectback): self
    {
        $this->redirectback = $redirectback;

        return $this;
    }

    public function getEditable()
    {
        return $this->editable;
    }

    public function setEditable($editable): self
    {
        $this->editable = $editable;

        return $this;
    }

    public function getMembertpl(): ?string
    {
        return $this->membertpl;
    }

    public function setMembertpl(string $membertpl): self
    {
        $this->membertpl = $membertpl;

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

    public function getQuerytype(): ?string
    {
        return $this->querytype;
    }

    public function setQuerytype(string $querytype): self
    {
        $this->querytype = $querytype;

        return $this;
    }

    public function getFuzzy(): ?string
    {
        return $this->fuzzy;
    }

    public function setFuzzy(string $fuzzy): self
    {
        $this->fuzzy = $fuzzy;

        return $this;
    }

    public function getContextlength(): ?int
    {
        return $this->contextlength;
    }

    public function setContextlength(int $contextlength): self
    {
        $this->contextlength = $contextlength;

        return $this;
    }

    public function getTotallength(): ?int
    {
        return $this->totallength;
    }

    public function setTotallength(int $totallength): self
    {
        $this->totallength = $totallength;

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

    public function getSearchtype(): ?string
    {
        return $this->searchtype;
    }

    public function setSearchtype(string $searchtype): self
    {
        $this->searchtype = $searchtype;

        return $this;
    }

    public function getSearchtpl(): ?string
    {
        return $this->searchtpl;
    }

    public function setSearchtpl(string $searchtpl): self
    {
        $this->searchtpl = $searchtpl;

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

    public function getSkipfirst(): ?int
    {
        return $this->skipfirst;
    }

    public function setSkipfirst(int $skipfirst): self
    {
        $this->skipfirst = $skipfirst;

        return $this;
    }

    public function getLoadfirst(): ?string
    {
        return $this->loadfirst;
    }

    public function setLoadfirst(string $loadfirst): self
    {
        $this->loadfirst = $loadfirst;

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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getImgsize(): ?string
    {
        return $this->imgsize;
    }

    public function setImgsize(string $imgsize): self
    {
        $this->imgsize = $imgsize;

        return $this;
    }

    public function getUsecaption(): ?string
    {
        return $this->usecaption;
    }

    public function setUsecaption(string $usecaption): self
    {
        $this->usecaption = $usecaption;

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

    public function getHtml(): ?string
    {
        return $this->html;
    }

    public function setHtml(?string $html): self
    {
        $this->html = $html;

        return $this;
    }

    public function getRssCache(): ?int
    {
        return $this->rssCache;
    }

    public function setRssCache(int $rssCache): self
    {
        $this->rssCache = $rssCache;

        return $this;
    }

    public function getRssFeed(): ?string
    {
        return $this->rssFeed;
    }

    public function setRssFeed(?string $rssFeed): self
    {
        $this->rssFeed = $rssFeed;

        return $this;
    }

    public function getRssTemplate(): ?string
    {
        return $this->rssTemplate;
    }

    public function setRssTemplate(string $rssTemplate): self
    {
        $this->rssTemplate = $rssTemplate;

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

    public function getDisablecaptcha(): ?string
    {
        return $this->disablecaptcha;
    }

    public function setDisablecaptcha(string $disablecaptcha): self
    {
        $this->disablecaptcha = $disablecaptcha;

        return $this;
    }

    public function getRegGroups()
    {
        return $this->regGroups;
    }

    public function setRegGroups($regGroups): self
    {
        $this->regGroups = $regGroups;

        return $this;
    }

    public function getRegAllowlogin(): ?string
    {
        return $this->regAllowlogin;
    }

    public function setRegAllowlogin(string $regAllowlogin): self
    {
        $this->regAllowlogin = $regAllowlogin;

        return $this;
    }

    public function getRegSkipname(): ?string
    {
        return $this->regSkipname;
    }

    public function setRegSkipname(string $regSkipname): self
    {
        $this->regSkipname = $regSkipname;

        return $this;
    }

    public function getRegClose(): ?string
    {
        return $this->regClose;
    }

    public function setRegClose(string $regClose): self
    {
        $this->regClose = $regClose;

        return $this;
    }

    public function getRegAssigndir(): ?string
    {
        return $this->regAssigndir;
    }

    public function setRegAssigndir(string $regAssigndir): self
    {
        $this->regAssigndir = $regAssigndir;

        return $this;
    }

    public function getRegHomedir()
    {
        return $this->regHomedir;
    }

    public function setRegHomedir($regHomedir): self
    {
        $this->regHomedir = $regHomedir;

        return $this;
    }

    public function getRegActivate(): ?string
    {
        return $this->regActivate;
    }

    public function setRegActivate(string $regActivate): self
    {
        $this->regActivate = $regActivate;

        return $this;
    }

    public function getRegJumpto(): ?int
    {
        return $this->regJumpto;
    }

    public function setRegJumpto(int $regJumpto): self
    {
        $this->regJumpto = $regJumpto;

        return $this;
    }

    public function getRegText(): ?string
    {
        return $this->regText;
    }

    public function setRegText(?string $regText): self
    {
        $this->regText = $regText;

        return $this;
    }

    public function getRegPassword(): ?string
    {
        return $this->regPassword;
    }

    public function setRegPassword(?string $regPassword): self
    {
        $this->regPassword = $regPassword;

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

    public function getFaqCategories()
    {
        return $this->faqCategories;
    }

    public function setFaqCategories($faqCategories): self
    {
        $this->faqCategories = $faqCategories;

        return $this;
    }

    public function getFaqReadermodule(): ?int
    {
        return $this->faqReadermodule;
    }

    public function setFaqReadermodule(int $faqReadermodule): self
    {
        $this->faqReadermodule = $faqReadermodule;

        return $this;
    }

    public function getListTable(): ?string
    {
        return $this->listTable;
    }

    public function setListTable(string $listTable): self
    {
        $this->listTable = $listTable;

        return $this;
    }

    public function getListFields(): ?string
    {
        return $this->listFields;
    }

    public function setListFields(string $listFields): self
    {
        $this->listFields = $listFields;

        return $this;
    }

    public function getListWhere(): ?string
    {
        return $this->listWhere;
    }

    public function setListWhere(string $listWhere): self
    {
        $this->listWhere = $listWhere;

        return $this;
    }

    public function getListSearch(): ?string
    {
        return $this->listSearch;
    }

    public function setListSearch(string $listSearch): self
    {
        $this->listSearch = $listSearch;

        return $this;
    }

    public function getListSort(): ?string
    {
        return $this->listSort;
    }

    public function setListSort(string $listSort): self
    {
        $this->listSort = $listSort;

        return $this;
    }

    public function getListInfo(): ?string
    {
        return $this->listInfo;
    }

    public function setListInfo(string $listInfo): self
    {
        $this->listInfo = $listInfo;

        return $this;
    }

    public function getListInfoWhere(): ?string
    {
        return $this->listInfoWhere;
    }

    public function setListInfoWhere(string $listInfoWhere): self
    {
        $this->listInfoWhere = $listInfoWhere;

        return $this;
    }

    public function getListLayout(): ?string
    {
        return $this->listLayout;
    }

    public function setListLayout(string $listLayout): self
    {
        $this->listLayout = $listLayout;

        return $this;
    }

    public function getListInfoLayout(): ?string
    {
        return $this->listInfoLayout;
    }

    public function setListInfoLayout(string $listInfoLayout): self
    {
        $this->listInfoLayout = $listInfoLayout;

        return $this;
    }

    public function getNewsArchives()
    {
        return $this->newsArchives;
    }

    public function setNewsArchives($newsArchives): self
    {
        $this->newsArchives = $newsArchives;

        return $this;
    }

    public function getNewsFeatured(): ?string
    {
        return $this->newsFeatured;
    }

    public function setNewsFeatured(string $newsFeatured): self
    {
        $this->newsFeatured = $newsFeatured;

        return $this;
    }

    public function getNewsJumptocurrent(): ?string
    {
        return $this->newsJumptocurrent;
    }

    public function setNewsJumptocurrent(string $newsJumptocurrent): self
    {
        $this->newsJumptocurrent = $newsJumptocurrent;

        return $this;
    }

    public function getNewsReadermodule(): ?int
    {
        return $this->newsReadermodule;
    }

    public function setNewsReadermodule(int $newsReadermodule): self
    {
        $this->newsReadermodule = $newsReadermodule;

        return $this;
    }

    public function getNewsMetafields(): ?string
    {
        return $this->newsMetafields;
    }

    public function setNewsMetafields(string $newsMetafields): self
    {
        $this->newsMetafields = $newsMetafields;

        return $this;
    }

    public function getNewsTemplate(): ?string
    {
        return $this->newsTemplate;
    }

    public function setNewsTemplate(string $newsTemplate): self
    {
        $this->newsTemplate = $newsTemplate;

        return $this;
    }

    public function getNewsFormat(): ?string
    {
        return $this->newsFormat;
    }

    public function setNewsFormat(string $newsFormat): self
    {
        $this->newsFormat = $newsFormat;

        return $this;
    }

    public function getNewsStartday(): ?int
    {
        return $this->newsStartday;
    }

    public function setNewsStartday(int $newsStartday): self
    {
        $this->newsStartday = $newsStartday;

        return $this;
    }

    public function getNewsOrder(): ?string
    {
        return $this->newsOrder;
    }

    public function setNewsOrder(string $newsOrder): self
    {
        $this->newsOrder = $newsOrder;

        return $this;
    }

    public function getNewsShowquantity(): ?string
    {
        return $this->newsShowquantity;
    }

    public function setNewsShowquantity(string $newsShowquantity): self
    {
        $this->newsShowquantity = $newsShowquantity;

        return $this;
    }

    public function getNewsletters()
    {
        return $this->newsletters;
    }

    public function setNewsletters($newsletters): self
    {
        $this->newsletters = $newsletters;

        return $this;
    }

    public function getNlChannels()
    {
        return $this->nlChannels;
    }

    public function setNlChannels($nlChannels): self
    {
        $this->nlChannels = $nlChannels;

        return $this;
    }

    public function getNlText(): ?string
    {
        return $this->nlText;
    }

    public function setNlText(?string $nlText): self
    {
        $this->nlText = $nlText;

        return $this;
    }

    public function getNlHidechannels(): ?string
    {
        return $this->nlHidechannels;
    }

    public function setNlHidechannels(string $nlHidechannels): self
    {
        $this->nlHidechannels = $nlHidechannels;

        return $this;
    }

    public function getNlSubscribe(): ?string
    {
        return $this->nlSubscribe;
    }

    public function setNlSubscribe(?string $nlSubscribe): self
    {
        $this->nlSubscribe = $nlSubscribe;

        return $this;
    }

    public function getNlUnsubscribe(): ?string
    {
        return $this->nlUnsubscribe;
    }

    public function setNlUnsubscribe(?string $nlUnsubscribe): self
    {
        $this->nlUnsubscribe = $nlUnsubscribe;

        return $this;
    }

    public function getNlTemplate(): ?string
    {
        return $this->nlTemplate;
    }

    public function setNlTemplate(string $nlTemplate): self
    {
        $this->nlTemplate = $nlTemplate;

        return $this;
    }

    public function getCalCalendar()
    {
        return $this->calCalendar;
    }

    public function setCalCalendar($calCalendar): self
    {
        $this->calCalendar = $calCalendar;

        return $this;
    }

    public function getCalNospan(): ?string
    {
        return $this->calNospan;
    }

    public function setCalNospan(string $calNospan): self
    {
        $this->calNospan = $calNospan;

        return $this;
    }

    public function getCalHiderunning(): ?string
    {
        return $this->calHiderunning;
    }

    public function setCalHiderunning(string $calHiderunning): self
    {
        $this->calHiderunning = $calHiderunning;

        return $this;
    }

    public function getCalStartday(): ?int
    {
        return $this->calStartday;
    }

    public function setCalStartday(int $calStartday): self
    {
        $this->calStartday = $calStartday;

        return $this;
    }

    public function getCalFormat(): ?string
    {
        return $this->calFormat;
    }

    public function setCalFormat(string $calFormat): self
    {
        $this->calFormat = $calFormat;

        return $this;
    }

    public function getCalIgnoredynamic(): ?string
    {
        return $this->calIgnoredynamic;
    }

    public function setCalIgnoredynamic(string $calIgnoredynamic): self
    {
        $this->calIgnoredynamic = $calIgnoredynamic;

        return $this;
    }

    public function getCalOrder(): ?string
    {
        return $this->calOrder;
    }

    public function setCalOrder(string $calOrder): self
    {
        $this->calOrder = $calOrder;

        return $this;
    }

    public function getCalReadermodule(): ?int
    {
        return $this->calReadermodule;
    }

    public function setCalReadermodule(int $calReadermodule): self
    {
        $this->calReadermodule = $calReadermodule;

        return $this;
    }

    public function getCalLimit(): ?int
    {
        return $this->calLimit;
    }

    public function setCalLimit(int $calLimit): self
    {
        $this->calLimit = $calLimit;

        return $this;
    }

    public function getCalTemplate(): ?string
    {
        return $this->calTemplate;
    }

    public function setCalTemplate(string $calTemplate): self
    {
        $this->calTemplate = $calTemplate;

        return $this;
    }

    public function getCalCtemplate(): ?string
    {
        return $this->calCtemplate;
    }

    public function setCalCtemplate(string $calCtemplate): self
    {
        $this->calCtemplate = $calCtemplate;

        return $this;
    }

    public function getCalShowquantity(): ?string
    {
        return $this->calShowquantity;
    }

    public function setCalShowquantity(string $calShowquantity): self
    {
        $this->calShowquantity = $calShowquantity;

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

    public function getComRequirelogin(): ?string
    {
        return $this->comRequirelogin;
    }

    public function setComRequirelogin(string $comRequirelogin): self
    {
        $this->comRequirelogin = $comRequirelogin;

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
