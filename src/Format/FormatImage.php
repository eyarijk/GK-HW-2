<?php

namespace Evrey\Images\Format;


use Evrey\Images\LogAction;

abstract class FormatImage implements ImageInterface
{
    protected const FORMAT = null;
    /**
     * @var string
     */
    protected $image;

    /**
     * @inheritdoc
     */
    public function getFormat(): string
    {
        return static::FORMAT;
    }

    /**
     * @inheritdoc
     */
    public function setImage(string $bytes): ImageInterface
    {
        $actionText = 'Set image for format: "'.$this->getFormat().'" class: '.static::class;
        LogAction::addAction($actionText);
        $this->image = $bytes;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getBytes(): string
    {
        $actionText = 'Get Bytes. for format: "'.$this->getFormat().'" class: '.static::class;
        LogAction::addAction($actionText);
        return $this->image;
    }

    /**
     * @inheritdoc
     */
    public function addText(string $text, int $x, int $y): ImageInterface
    {
        $actionText = "Add text. Position x: $x, y: $y. Text: \"$text\" for format: \"".$this->getFormat().'" class: '.static::class;
        LogAction::addAction($actionText);
        $this->image .= "\n Add text. Position x: $x, y: $y. Text: \"$text\"";
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setWatterMark(string $text): ImageInterface
    {
        $actionText = "Add WatterMark. Text: \"$text\" for format: \"".$this->getFormat().'" class: '.static::class;
        LogAction::addAction($actionText);
        $this->image .= "\n Add WatterMark. Text: \"$text\"";
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function thumb(int $width, int $height): ImageInterface
    {
        $actionText = "Thumb image. Width: $width,height: $height for format: \"".$this->getFormat().'" class: '.static::class;
        LogAction::addAction($actionText);
        $this->image .= "\n Thumb image. Width: $width,height: $height";
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function rotate(int $deg): ImageInterface
    {
        $actionText = "Rotate image (Deg $deg) for format: \"".$this->getFormat().'" class: '.static::class;
        LogAction::addAction($actionText);
        $this->image .= "\n Rotate image (Deg $deg)";
        return $this;
    }
}