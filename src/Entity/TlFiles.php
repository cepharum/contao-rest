<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlFiles
 *
 * @ORM\Table(name="tl_files", uniqueConstraints={@ORM\UniqueConstraint(name="uuid", columns={"uuid"})}, indexes={@ORM\Index(name="pid", columns={"pid"}), @ORM\Index(name="path", columns={"path"}), @ORM\Index(name="extension", columns={"extension"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlFilesRepository")
 */
class TlFiles
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
     * @var binary|null
     *
     * @ORM\Column(name="pid", type="binary", nullable=true)
     */
    private $pid;

    /**
     * @var int
     *
     * @ORM\Column(name="tstamp", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $tstamp = '0';

    /**
     * @var binary|null
     *
     * @ORM\Column(name="uuid", type="binary", nullable=true)
     */
    private $uuid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=16, nullable=false)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=1022, nullable=false)
     */
    private $path = '';

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=16, nullable=false)
     */
    private $extension = '';

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=32, nullable=false)
     */
    private $hash = '';

    /**
     * @var string
     *
     * @ORM\Column(name="found", type="string", length=1, nullable=false, options={"default"="1","fixed"=true})
     */
    private $found = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var int
     *
     * @ORM\Column(name="importantPartX", type="integer", nullable=false)
     */
    private $importantpartx = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="importantPartY", type="integer", nullable=false)
     */
    private $importantparty = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="importantPartWidth", type="integer", nullable=false)
     */
    private $importantpartwidth = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="importantPartHeight", type="integer", nullable=false)
     */
    private $importantpartheight = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta", type="blob", length=65535, nullable=true)
     */
    private $meta;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setPid($pid): self
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

    public function getUuid()
    {
        return $this->uuid;
    }

    public function setUuid($uuid): self
    {
        $this->uuid = $uuid;

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

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    public function getFound(): ?string
    {
        return $this->found;
    }

    public function setFound(string $found): self
    {
        $this->found = $found;

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

    public function getImportantpartx(): ?int
    {
        return $this->importantpartx;
    }

    public function setImportantpartx(int $importantpartx): self
    {
        $this->importantpartx = $importantpartx;

        return $this;
    }

    public function getImportantparty(): ?int
    {
        return $this->importantparty;
    }

    public function setImportantparty(int $importantparty): self
    {
        $this->importantparty = $importantparty;

        return $this;
    }

    public function getImportantpartwidth(): ?int
    {
        return $this->importantpartwidth;
    }

    public function setImportantpartwidth(int $importantpartwidth): self
    {
        $this->importantpartwidth = $importantpartwidth;

        return $this;
    }

    public function getImportantpartheight(): ?int
    {
        return $this->importantpartheight;
    }

    public function setImportantpartheight(int $importantpartheight): self
    {
        $this->importantpartheight = $importantpartheight;

        return $this;
    }

    public function getMeta()
    {
        return $this->meta;
    }

    public function setMeta($meta): self
    {
        $this->meta = $meta;

        return $this;
    }


}
