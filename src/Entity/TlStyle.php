<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TlStyle
 *
 * @ORM\Table(name="tl_style", indexes={@ORM\Index(name="pid", columns={"pid"})})
 * @ORM\Entity(repositoryClass="App\Repository\TlStyleRepository")
 */
class TlStyle
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
     * @ORM\Column(name="selector", type="string", length=1022, nullable=false)
     */
    private $selector = '';

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=32, nullable=false)
     */
    private $category = '';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment = '';

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $size = '';

    /**
     * @var string
     *
     * @ORM\Column(name="width", type="string", length=64, nullable=false)
     */
    private $width = '';

    /**
     * @var string
     *
     * @ORM\Column(name="height", type="string", length=64, nullable=false)
     */
    private $height = '';

    /**
     * @var string
     *
     * @ORM\Column(name="minwidth", type="string", length=64, nullable=false)
     */
    private $minwidth = '';

    /**
     * @var string
     *
     * @ORM\Column(name="minheight", type="string", length=64, nullable=false)
     */
    private $minheight = '';

    /**
     * @var string
     *
     * @ORM\Column(name="maxwidth", type="string", length=64, nullable=false)
     */
    private $maxwidth = '';

    /**
     * @var string
     *
     * @ORM\Column(name="maxheight", type="string", length=64, nullable=false)
     */
    private $maxheight = '';

    /**
     * @var string
     *
     * @ORM\Column(name="positioning", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $positioning = '';

    /**
     * @var string
     *
     * @ORM\Column(name="trbl", type="string", length=128, nullable=false)
     */
    private $trbl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=32, nullable=false)
     */
    private $position = '';

    /**
     * @var string
     *
     * @ORM\Column(name="floating", type="string", length=32, nullable=false)
     */
    private $floating = '';

    /**
     * @var string
     *
     * @ORM\Column(name="clear", type="string", length=32, nullable=false)
     */
    private $clear = '';

    /**
     * @var string
     *
     * @ORM\Column(name="overflow", type="string", length=32, nullable=false)
     */
    private $overflow = '';

    /**
     * @var string
     *
     * @ORM\Column(name="display", type="string", length=32, nullable=false)
     */
    private $display = '';

    /**
     * @var string
     *
     * @ORM\Column(name="alignment", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $alignment = '';

    /**
     * @var string
     *
     * @ORM\Column(name="margin", type="string", length=128, nullable=false)
     */
    private $margin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="padding", type="string", length=128, nullable=false)
     */
    private $padding = '';

    /**
     * @var string
     *
     * @ORM\Column(name="align", type="string", length=32, nullable=false)
     */
    private $align = '';

    /**
     * @var string
     *
     * @ORM\Column(name="verticalalign", type="string", length=32, nullable=false)
     */
    private $verticalalign = '';

    /**
     * @var string
     *
     * @ORM\Column(name="textalign", type="string", length=32, nullable=false)
     */
    private $textalign = '';

    /**
     * @var string
     *
     * @ORM\Column(name="whitespace", type="string", length=8, nullable=false)
     */
    private $whitespace = '';

    /**
     * @var string
     *
     * @ORM\Column(name="background", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $background = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bgcolor", type="string", length=64, nullable=false)
     */
    private $bgcolor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bgimage", type="string", length=255, nullable=false)
     */
    private $bgimage = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bgposition", type="string", length=32, nullable=false)
     */
    private $bgposition = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bgrepeat", type="string", length=32, nullable=false)
     */
    private $bgrepeat = '';

    /**
     * @var string
     *
     * @ORM\Column(name="shadowsize", type="string", length=128, nullable=false)
     */
    private $shadowsize = '';

    /**
     * @var string
     *
     * @ORM\Column(name="shadowcolor", type="string", length=64, nullable=false)
     */
    private $shadowcolor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="gradientAngle", type="string", length=32, nullable=false)
     */
    private $gradientangle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="gradientColors", type="string", length=128, nullable=false)
     */
    private $gradientcolors = '';

    /**
     * @var string
     *
     * @ORM\Column(name="border", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $border = '';

    /**
     * @var string
     *
     * @ORM\Column(name="borderwidth", type="string", length=128, nullable=false)
     */
    private $borderwidth = '';

    /**
     * @var string
     *
     * @ORM\Column(name="borderstyle", type="string", length=32, nullable=false)
     */
    private $borderstyle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bordercolor", type="string", length=64, nullable=false)
     */
    private $bordercolor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="borderradius", type="string", length=128, nullable=false)
     */
    private $borderradius = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bordercollapse", type="string", length=32, nullable=false)
     */
    private $bordercollapse = '';

    /**
     * @var string
     *
     * @ORM\Column(name="borderspacing", type="string", length=64, nullable=false)
     */
    private $borderspacing = '';

    /**
     * @var string
     *
     * @ORM\Column(name="font", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $font = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fontfamily", type="string", length=255, nullable=false)
     */
    private $fontfamily = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fontsize", type="string", length=64, nullable=false)
     */
    private $fontsize = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fontcolor", type="string", length=64, nullable=false)
     */
    private $fontcolor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lineheight", type="string", length=64, nullable=false)
     */
    private $lineheight = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fontstyle", type="string", length=255, nullable=false)
     */
    private $fontstyle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="texttransform", type="string", length=32, nullable=false)
     */
    private $texttransform = '';

    /**
     * @var string
     *
     * @ORM\Column(name="textindent", type="string", length=64, nullable=false)
     */
    private $textindent = '';

    /**
     * @var string
     *
     * @ORM\Column(name="letterspacing", type="string", length=64, nullable=false)
     */
    private $letterspacing = '';

    /**
     * @var string
     *
     * @ORM\Column(name="wordspacing", type="string", length=64, nullable=false)
     */
    private $wordspacing = '';

    /**
     * @var string
     *
     * @ORM\Column(name="list", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $list = '';

    /**
     * @var string
     *
     * @ORM\Column(name="liststyletype", type="string", length=32, nullable=false)
     */
    private $liststyletype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="liststyleimage", type="string", length=255, nullable=false)
     */
    private $liststyleimage = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="own", type="text", length=65535, nullable=true)
     */
    private $own;

    /**
     * @var string
     *
     * @ORM\Column(name="invisible", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $invisible = '';

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

    public function getSelector(): ?string
    {
        return $this->selector;
    }

    public function setSelector(string $selector): self
    {
        $this->selector = $selector;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

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

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setWidth(string $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(string $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getMinwidth(): ?string
    {
        return $this->minwidth;
    }

    public function setMinwidth(string $minwidth): self
    {
        $this->minwidth = $minwidth;

        return $this;
    }

    public function getMinheight(): ?string
    {
        return $this->minheight;
    }

    public function setMinheight(string $minheight): self
    {
        $this->minheight = $minheight;

        return $this;
    }

    public function getMaxwidth(): ?string
    {
        return $this->maxwidth;
    }

    public function setMaxwidth(string $maxwidth): self
    {
        $this->maxwidth = $maxwidth;

        return $this;
    }

    public function getMaxheight(): ?string
    {
        return $this->maxheight;
    }

    public function setMaxheight(string $maxheight): self
    {
        $this->maxheight = $maxheight;

        return $this;
    }

    public function getPositioning(): ?string
    {
        return $this->positioning;
    }

    public function setPositioning(string $positioning): self
    {
        $this->positioning = $positioning;

        return $this;
    }

    public function getTrbl(): ?string
    {
        return $this->trbl;
    }

    public function setTrbl(string $trbl): self
    {
        $this->trbl = $trbl;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): self
    {
        $this->position = $position;

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

    public function getClear(): ?string
    {
        return $this->clear;
    }

    public function setClear(string $clear): self
    {
        $this->clear = $clear;

        return $this;
    }

    public function getOverflow(): ?string
    {
        return $this->overflow;
    }

    public function setOverflow(string $overflow): self
    {
        $this->overflow = $overflow;

        return $this;
    }

    public function getDisplay(): ?string
    {
        return $this->display;
    }

    public function setDisplay(string $display): self
    {
        $this->display = $display;

        return $this;
    }

    public function getAlignment(): ?string
    {
        return $this->alignment;
    }

    public function setAlignment(string $alignment): self
    {
        $this->alignment = $alignment;

        return $this;
    }

    public function getMargin(): ?string
    {
        return $this->margin;
    }

    public function setMargin(string $margin): self
    {
        $this->margin = $margin;

        return $this;
    }

    public function getPadding(): ?string
    {
        return $this->padding;
    }

    public function setPadding(string $padding): self
    {
        $this->padding = $padding;

        return $this;
    }

    public function getAlign(): ?string
    {
        return $this->align;
    }

    public function setAlign(string $align): self
    {
        $this->align = $align;

        return $this;
    }

    public function getVerticalalign(): ?string
    {
        return $this->verticalalign;
    }

    public function setVerticalalign(string $verticalalign): self
    {
        $this->verticalalign = $verticalalign;

        return $this;
    }

    public function getTextalign(): ?string
    {
        return $this->textalign;
    }

    public function setTextalign(string $textalign): self
    {
        $this->textalign = $textalign;

        return $this;
    }

    public function getWhitespace(): ?string
    {
        return $this->whitespace;
    }

    public function setWhitespace(string $whitespace): self
    {
        $this->whitespace = $whitespace;

        return $this;
    }

    public function getBackground(): ?string
    {
        return $this->background;
    }

    public function setBackground(string $background): self
    {
        $this->background = $background;

        return $this;
    }

    public function getBgcolor(): ?string
    {
        return $this->bgcolor;
    }

    public function setBgcolor(string $bgcolor): self
    {
        $this->bgcolor = $bgcolor;

        return $this;
    }

    public function getBgimage(): ?string
    {
        return $this->bgimage;
    }

    public function setBgimage(string $bgimage): self
    {
        $this->bgimage = $bgimage;

        return $this;
    }

    public function getBgposition(): ?string
    {
        return $this->bgposition;
    }

    public function setBgposition(string $bgposition): self
    {
        $this->bgposition = $bgposition;

        return $this;
    }

    public function getBgrepeat(): ?string
    {
        return $this->bgrepeat;
    }

    public function setBgrepeat(string $bgrepeat): self
    {
        $this->bgrepeat = $bgrepeat;

        return $this;
    }

    public function getShadowsize(): ?string
    {
        return $this->shadowsize;
    }

    public function setShadowsize(string $shadowsize): self
    {
        $this->shadowsize = $shadowsize;

        return $this;
    }

    public function getShadowcolor(): ?string
    {
        return $this->shadowcolor;
    }

    public function setShadowcolor(string $shadowcolor): self
    {
        $this->shadowcolor = $shadowcolor;

        return $this;
    }

    public function getGradientangle(): ?string
    {
        return $this->gradientangle;
    }

    public function setGradientangle(string $gradientangle): self
    {
        $this->gradientangle = $gradientangle;

        return $this;
    }

    public function getGradientcolors(): ?string
    {
        return $this->gradientcolors;
    }

    public function setGradientcolors(string $gradientcolors): self
    {
        $this->gradientcolors = $gradientcolors;

        return $this;
    }

    public function getBorder(): ?string
    {
        return $this->border;
    }

    public function setBorder(string $border): self
    {
        $this->border = $border;

        return $this;
    }

    public function getBorderwidth(): ?string
    {
        return $this->borderwidth;
    }

    public function setBorderwidth(string $borderwidth): self
    {
        $this->borderwidth = $borderwidth;

        return $this;
    }

    public function getBorderstyle(): ?string
    {
        return $this->borderstyle;
    }

    public function setBorderstyle(string $borderstyle): self
    {
        $this->borderstyle = $borderstyle;

        return $this;
    }

    public function getBordercolor(): ?string
    {
        return $this->bordercolor;
    }

    public function setBordercolor(string $bordercolor): self
    {
        $this->bordercolor = $bordercolor;

        return $this;
    }

    public function getBorderradius(): ?string
    {
        return $this->borderradius;
    }

    public function setBorderradius(string $borderradius): self
    {
        $this->borderradius = $borderradius;

        return $this;
    }

    public function getBordercollapse(): ?string
    {
        return $this->bordercollapse;
    }

    public function setBordercollapse(string $bordercollapse): self
    {
        $this->bordercollapse = $bordercollapse;

        return $this;
    }

    public function getBorderspacing(): ?string
    {
        return $this->borderspacing;
    }

    public function setBorderspacing(string $borderspacing): self
    {
        $this->borderspacing = $borderspacing;

        return $this;
    }

    public function getFont(): ?string
    {
        return $this->font;
    }

    public function setFont(string $font): self
    {
        $this->font = $font;

        return $this;
    }

    public function getFontfamily(): ?string
    {
        return $this->fontfamily;
    }

    public function setFontfamily(string $fontfamily): self
    {
        $this->fontfamily = $fontfamily;

        return $this;
    }

    public function getFontsize(): ?string
    {
        return $this->fontsize;
    }

    public function setFontsize(string $fontsize): self
    {
        $this->fontsize = $fontsize;

        return $this;
    }

    public function getFontcolor(): ?string
    {
        return $this->fontcolor;
    }

    public function setFontcolor(string $fontcolor): self
    {
        $this->fontcolor = $fontcolor;

        return $this;
    }

    public function getLineheight(): ?string
    {
        return $this->lineheight;
    }

    public function setLineheight(string $lineheight): self
    {
        $this->lineheight = $lineheight;

        return $this;
    }

    public function getFontstyle(): ?string
    {
        return $this->fontstyle;
    }

    public function setFontstyle(string $fontstyle): self
    {
        $this->fontstyle = $fontstyle;

        return $this;
    }

    public function getTexttransform(): ?string
    {
        return $this->texttransform;
    }

    public function setTexttransform(string $texttransform): self
    {
        $this->texttransform = $texttransform;

        return $this;
    }

    public function getTextindent(): ?string
    {
        return $this->textindent;
    }

    public function setTextindent(string $textindent): self
    {
        $this->textindent = $textindent;

        return $this;
    }

    public function getLetterspacing(): ?string
    {
        return $this->letterspacing;
    }

    public function setLetterspacing(string $letterspacing): self
    {
        $this->letterspacing = $letterspacing;

        return $this;
    }

    public function getWordspacing(): ?string
    {
        return $this->wordspacing;
    }

    public function setWordspacing(string $wordspacing): self
    {
        $this->wordspacing = $wordspacing;

        return $this;
    }

    public function getList(): ?string
    {
        return $this->list;
    }

    public function setList(string $list): self
    {
        $this->list = $list;

        return $this;
    }

    public function getListstyletype(): ?string
    {
        return $this->liststyletype;
    }

    public function setListstyletype(string $liststyletype): self
    {
        $this->liststyletype = $liststyletype;

        return $this;
    }

    public function getListstyleimage(): ?string
    {
        return $this->liststyleimage;
    }

    public function setListstyleimage(string $liststyleimage): self
    {
        $this->liststyleimage = $liststyleimage;

        return $this;
    }

    public function getOwn(): ?string
    {
        return $this->own;
    }

    public function setOwn(?string $own): self
    {
        $this->own = $own;

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


}
