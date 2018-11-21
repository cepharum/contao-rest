<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlSearchIndex
 *
 * @ORM\Table(name="tl_search_index", indexes={@ORM\Index(name="pid", columns={"pid"}), @ORM\Index(name="word", columns={"word"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlSearchIndexRepository")
 */
class TlSearchIndex
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
     * @ORM\Column(name="word", type="string", length=64, nullable=false)
     */
    private $word = '';

    /**
     * @var int
     *
     * @ORM\Column(name="relevance", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $relevance = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=5, nullable=false)
     */
    private $language = '';

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

    public function getWord(): ?string
    {
        return $this->word;
    }

    public function setWord(string $word): self
    {
        $this->word = $word;

        return $this;
    }

    public function getRelevance(): ?int
    {
        return $this->relevance;
    }

    public function setRelevance(int $relevance): self
    {
        $this->relevance = $relevance;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }


}
