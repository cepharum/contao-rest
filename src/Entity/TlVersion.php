<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlVersion
 *
 * @ORM\Table(name="tl_version", indexes={@ORM\Index(name="pid", columns={"pid"}), @ORM\Index(name="fromtable", columns={"fromTable"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlVersionRepository")
 */
class TlVersion
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
     * @var int
     *
     * @ORM\Column(name="version", type="smallint", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $version = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="fromTable", type="string", length=255, nullable=false)
     */
    private $fromtable = '';

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=64, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="editUrl", type="text", length=65535, nullable=true)
     */
    private $editurl;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $active = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="blob", length=16777215, nullable=true)
     */
    private $data;

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

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(int $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getFromtable(): ?string
    {
        return $this->fromtable;
    }

    public function setFromtable(string $fromtable): self
    {
        $this->fromtable = $fromtable;

        return $this;
    }

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function setUserid(int $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getEditurl(): ?string
    {
        return $this->editurl;
    }

    public function setEditurl(?string $editurl): self
    {
        $this->editurl = $editurl;

        return $this;
    }

    public function getActive(): ?string
    {
        return $this->active;
    }

    public function setActive(string $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data): self
    {
        $this->data = $data;

        return $this;
    }


}
