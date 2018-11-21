<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlForm
 *
 * @ORM\Table(name="tl_form", indexes={@ORM\Index(name="alias", columns={"alias"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlFormRepository")
 */
class TlForm
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
     * @var int
     *
     * @ORM\Column(name="jumpTo", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $jumpto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sendViaEmail", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $sendviaemail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="recipient", type="string", length=1022, nullable=false)
     */
    private $recipient = '';

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    private $subject = '';

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=12, nullable=false)
     */
    private $format = '';

    /**
     * @var string
     *
     * @ORM\Column(name="skipEmpty", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $skipempty = '';

    /**
     * @var string
     *
     * @ORM\Column(name="storeValues", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $storevalues = '';

    /**
     * @var string
     *
     * @ORM\Column(name="targetTable", type="string", length=64, nullable=false)
     */
    private $targettable = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customTpl", type="string", length=64, nullable=false)
     */
    private $customtpl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=12, nullable=false)
     */
    private $method = '';

    /**
     * @var string
     *
     * @ORM\Column(name="novalidate", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $novalidate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="attributes", type="string", length=255, nullable=false)
     */
    private $attributes = '';

    /**
     * @var string
     *
     * @ORM\Column(name="formID", type="string", length=64, nullable=false)
     */
    private $formid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="allowTags", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $allowtags = '';

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

    public function getJumpto(): ?int
    {
        return $this->jumpto;
    }

    public function setJumpto(int $jumpto): self
    {
        $this->jumpto = $jumpto;

        return $this;
    }

    public function getSendviaemail(): ?string
    {
        return $this->sendviaemail;
    }

    public function setSendviaemail(string $sendviaemail): self
    {
        $this->sendviaemail = $sendviaemail;

        return $this;
    }

    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    public function setRecipient(string $recipient): self
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

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

    public function getSkipempty(): ?string
    {
        return $this->skipempty;
    }

    public function setSkipempty(string $skipempty): self
    {
        $this->skipempty = $skipempty;

        return $this;
    }

    public function getStorevalues(): ?string
    {
        return $this->storevalues;
    }

    public function setStorevalues(string $storevalues): self
    {
        $this->storevalues = $storevalues;

        return $this;
    }

    public function getTargettable(): ?string
    {
        return $this->targettable;
    }

    public function setTargettable(string $targettable): self
    {
        $this->targettable = $targettable;

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

    public function getMethod(): ?string
    {
        return $this->method;
    }

    public function setMethod(string $method): self
    {
        $this->method = $method;

        return $this;
    }

    public function getNovalidate(): ?string
    {
        return $this->novalidate;
    }

    public function setNovalidate(string $novalidate): self
    {
        $this->novalidate = $novalidate;

        return $this;
    }

    public function getAttributes(): ?string
    {
        return $this->attributes;
    }

    public function setAttributes(string $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function getFormid(): ?string
    {
        return $this->formid;
    }

    public function setFormid(string $formid): self
    {
        $this->formid = $formid;

        return $this;
    }

    public function getAllowtags(): ?string
    {
        return $this->allowtags;
    }

    public function setAllowtags(string $allowtags): self
    {
        $this->allowtags = $allowtags;

        return $this;
    }


}
