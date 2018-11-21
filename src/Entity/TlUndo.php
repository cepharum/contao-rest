<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlUndo
 *
 * @ORM\Table(name="tl_undo")
 * @ORM\Entity(repositoryClass="App\Repository\TlUndoRepository")
 */
class TlUndo
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
     * @ORM\Column(name="fromTable", type="string", length=255, nullable=false)
     */
    private $fromtable = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="query", type="text", length=65535, nullable=true)
     */
    private $query;

    /**
     * @var int
     *
     * @ORM\Column(name="affectedRows", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $affectedrows = '0';

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

    public function getFromtable(): ?string
    {
        return $this->fromtable;
    }

    public function setFromtable(string $fromtable): self
    {
        $this->fromtable = $fromtable;

        return $this;
    }

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function setQuery(?string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function getAffectedrows(): ?int
    {
        return $this->affectedrows;
    }

    public function setAffectedrows(int $affectedrows): self
    {
        $this->affectedrows = $affectedrows;

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
