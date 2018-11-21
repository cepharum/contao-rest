<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlCalendar
 *
 * @ORM\Table(name="tl_calendar")
 * @ORM\Entity(repositoryClass="App\Repository\TlCalendarRepository")
 */
class TlCalendar
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
     * @var int
     *
     * @ORM\Column(name="jumpTo", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $jumpto = '0';

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
     * @ORM\Column(name="allowComments", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $allowcomments = '';

    /**
     * @var string
     *
     * @ORM\Column(name="notify", type="string", length=32, nullable=false)
     */
    private $notify = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sortOrder", type="string", length=32, nullable=false)
     */
    private $sortorder = '';

    /**
     * @var int
     *
     * @ORM\Column(name="perPage", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $perpage = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="moderate", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $moderate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bbcode", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $bbcode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="requireLogin", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $requirelogin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="disableCaptcha", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $disablecaptcha = '';

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

    public function getJumpto(): ?int
    {
        return $this->jumpto;
    }

    public function setJumpto(int $jumpto): self
    {
        $this->jumpto = $jumpto;

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

    public function getAllowcomments(): ?string
    {
        return $this->allowcomments;
    }

    public function setAllowcomments(string $allowcomments): self
    {
        $this->allowcomments = $allowcomments;

        return $this;
    }

    public function getNotify(): ?string
    {
        return $this->notify;
    }

    public function setNotify(string $notify): self
    {
        $this->notify = $notify;

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

    public function getPerpage(): ?int
    {
        return $this->perpage;
    }

    public function setPerpage(int $perpage): self
    {
        $this->perpage = $perpage;

        return $this;
    }

    public function getModerate(): ?string
    {
        return $this->moderate;
    }

    public function setModerate(string $moderate): self
    {
        $this->moderate = $moderate;

        return $this;
    }

    public function getBbcode(): ?string
    {
        return $this->bbcode;
    }

    public function setBbcode(string $bbcode): self
    {
        $this->bbcode = $bbcode;

        return $this;
    }

    public function getRequirelogin(): ?string
    {
        return $this->requirelogin;
    }

    public function setRequirelogin(string $requirelogin): self
    {
        $this->requirelogin = $requirelogin;

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


}
