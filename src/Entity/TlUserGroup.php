<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlUserGroup
 *
 * @ORM\Table(name="tl_user_group")
 * @ORM\Entity(repositoryClass="App\Repository\TlUserGroupRepository")
 */
class TlUserGroup
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="modules", type="blob", length=65535, nullable=true)
     */
    private $modules;

    /**
     * @var string|null
     *
     * @ORM\Column(name="themes", type="blob", length=65535, nullable=true)
     */
    private $themes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pagemounts", type="blob", length=65535, nullable=true)
     */
    private $pagemounts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alpty", type="blob", length=65535, nullable=true)
     */
    private $alpty;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filemounts", type="blob", length=65535, nullable=true)
     */
    private $filemounts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fop", type="blob", length=65535, nullable=true)
     */
    private $fop;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imageSizes", type="blob", length=65535, nullable=true)
     */
    private $imagesizes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forms", type="blob", length=65535, nullable=true)
     */
    private $forms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="formp", type="blob", length=65535, nullable=true)
     */
    private $formp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amg", type="blob", length=65535, nullable=true)
     */
    private $amg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alexf", type="blob", length=65535, nullable=true)
     */
    private $alexf;

    /**
     * @var string
     *
     * @ORM\Column(name="disable", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $disable = '';

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
     * @var string|null
     *
     * @ORM\Column(name="faqs", type="blob", length=65535, nullable=true)
     */
    private $faqs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="faqp", type="blob", length=65535, nullable=true)
     */
    private $faqp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="news", type="blob", length=65535, nullable=true)
     */
    private $news;

    /**
     * @var string|null
     *
     * @ORM\Column(name="newp", type="blob", length=65535, nullable=true)
     */
    private $newp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="newsfeeds", type="blob", length=65535, nullable=true)
     */
    private $newsfeeds;

    /**
     * @var string|null
     *
     * @ORM\Column(name="newsfeedp", type="blob", length=65535, nullable=true)
     */
    private $newsfeedp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="newsletters", type="blob", length=65535, nullable=true)
     */
    private $newsletters;

    /**
     * @var string|null
     *
     * @ORM\Column(name="newsletterp", type="blob", length=65535, nullable=true)
     */
    private $newsletterp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="calendars", type="blob", length=65535, nullable=true)
     */
    private $calendars;

    /**
     * @var string|null
     *
     * @ORM\Column(name="calendarp", type="blob", length=65535, nullable=true)
     */
    private $calendarp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="calendarfeeds", type="blob", length=65535, nullable=true)
     */
    private $calendarfeeds;

    /**
     * @var string|null
     *
     * @ORM\Column(name="calendarfeedp", type="blob", length=65535, nullable=true)
     */
    private $calendarfeedp;

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

    public function getModules()
    {
        return $this->modules;
    }

    public function setModules($modules): self
    {
        $this->modules = $modules;

        return $this;
    }

    public function getThemes()
    {
        return $this->themes;
    }

    public function setThemes($themes): self
    {
        $this->themes = $themes;

        return $this;
    }

    public function getPagemounts()
    {
        return $this->pagemounts;
    }

    public function setPagemounts($pagemounts): self
    {
        $this->pagemounts = $pagemounts;

        return $this;
    }

    public function getAlpty()
    {
        return $this->alpty;
    }

    public function setAlpty($alpty): self
    {
        $this->alpty = $alpty;

        return $this;
    }

    public function getFilemounts()
    {
        return $this->filemounts;
    }

    public function setFilemounts($filemounts): self
    {
        $this->filemounts = $filemounts;

        return $this;
    }

    public function getFop()
    {
        return $this->fop;
    }

    public function setFop($fop): self
    {
        $this->fop = $fop;

        return $this;
    }

    public function getImagesizes()
    {
        return $this->imagesizes;
    }

    public function setImagesizes($imagesizes): self
    {
        $this->imagesizes = $imagesizes;

        return $this;
    }

    public function getForms()
    {
        return $this->forms;
    }

    public function setForms($forms): self
    {
        $this->forms = $forms;

        return $this;
    }

    public function getFormp()
    {
        return $this->formp;
    }

    public function setFormp($formp): self
    {
        $this->formp = $formp;

        return $this;
    }

    public function getAmg()
    {
        return $this->amg;
    }

    public function setAmg($amg): self
    {
        $this->amg = $amg;

        return $this;
    }

    public function getAlexf()
    {
        return $this->alexf;
    }

    public function setAlexf($alexf): self
    {
        $this->alexf = $alexf;

        return $this;
    }

    public function getDisable(): ?string
    {
        return $this->disable;
    }

    public function setDisable(string $disable): self
    {
        $this->disable = $disable;

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

    public function getFaqs()
    {
        return $this->faqs;
    }

    public function setFaqs($faqs): self
    {
        $this->faqs = $faqs;

        return $this;
    }

    public function getFaqp()
    {
        return $this->faqp;
    }

    public function setFaqp($faqp): self
    {
        $this->faqp = $faqp;

        return $this;
    }

    public function getNews()
    {
        return $this->news;
    }

    public function setNews($news): self
    {
        $this->news = $news;

        return $this;
    }

    public function getNewp()
    {
        return $this->newp;
    }

    public function setNewp($newp): self
    {
        $this->newp = $newp;

        return $this;
    }

    public function getNewsfeeds()
    {
        return $this->newsfeeds;
    }

    public function setNewsfeeds($newsfeeds): self
    {
        $this->newsfeeds = $newsfeeds;

        return $this;
    }

    public function getNewsfeedp()
    {
        return $this->newsfeedp;
    }

    public function setNewsfeedp($newsfeedp): self
    {
        $this->newsfeedp = $newsfeedp;

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

    public function getNewsletterp()
    {
        return $this->newsletterp;
    }

    public function setNewsletterp($newsletterp): self
    {
        $this->newsletterp = $newsletterp;

        return $this;
    }

    public function getCalendars()
    {
        return $this->calendars;
    }

    public function setCalendars($calendars): self
    {
        $this->calendars = $calendars;

        return $this;
    }

    public function getCalendarp()
    {
        return $this->calendarp;
    }

    public function setCalendarp($calendarp): self
    {
        $this->calendarp = $calendarp;

        return $this;
    }

    public function getCalendarfeeds()
    {
        return $this->calendarfeeds;
    }

    public function setCalendarfeeds($calendarfeeds): self
    {
        $this->calendarfeeds = $calendarfeeds;

        return $this;
    }

    public function getCalendarfeedp()
    {
        return $this->calendarfeedp;
    }

    public function setCalendarfeedp($calendarfeedp): self
    {
        $this->calendarfeedp = $calendarfeedp;

        return $this;
    }


}
