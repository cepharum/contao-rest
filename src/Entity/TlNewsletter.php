<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlNewsletter
 *
 * @ORM\Table(name="tl_newsletter", indexes={@ORM\Index(name="pid", columns={"pid"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlNewsletterRepository")
 */
class TlNewsletter
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
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    private $subject = '';

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=128, nullable=false)
     */
    private $alias = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=16777215, nullable=true)
     */
    private $content;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="text", length=16777215, nullable=true)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="addFile", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $addfile = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="files", type="blob", length=65535, nullable=true)
     */
    private $files;

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=64, nullable=false)
     */
    private $template = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sendText", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $sendtext = '';

    /**
     * @var string
     *
     * @ORM\Column(name="externalImages", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $externalimages = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sender", type="string", length=255, nullable=false)
     */
    private $sender = '';

    /**
     * @var string
     *
     * @ORM\Column(name="senderName", type="string", length=128, nullable=false)
     */
    private $sendername = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sent", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $sent = '';

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=false)
     */
    private $date = '';

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

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

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

    public function getAddfile(): ?string
    {
        return $this->addfile;
    }

    public function setAddfile(string $addfile): self
    {
        $this->addfile = $addfile;

        return $this;
    }

    public function getFiles()
    {
        return $this->files;
    }

    public function setFiles($files): self
    {
        $this->files = $files;

        return $this;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(string $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getSendtext(): ?string
    {
        return $this->sendtext;
    }

    public function setSendtext(string $sendtext): self
    {
        $this->sendtext = $sendtext;

        return $this;
    }

    public function getExternalimages(): ?string
    {
        return $this->externalimages;
    }

    public function setExternalimages(string $externalimages): self
    {
        $this->externalimages = $externalimages;

        return $this;
    }

    public function getSender(): ?string
    {
        return $this->sender;
    }

    public function setSender(string $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getSendername(): ?string
    {
        return $this->sendername;
    }

    public function setSendername(string $sendername): self
    {
        $this->sendername = $sendername;

        return $this;
    }

    public function getSent(): ?string
    {
        return $this->sent;
    }

    public function setSent(string $sent): self
    {
        $this->sent = $sent;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }


}
