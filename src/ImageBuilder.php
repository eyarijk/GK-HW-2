<?php

namespace Evrey\Images;


use Evrey\Images\Format\ImageInterface;

class ImageBuilder implements ImageBuilderInterface
{
    /**
     * @var ImageInterface
     */
    private $formatComponent;

    /**
     * @var string
     */
    private $image;

    /**
     * @return ImageBuilderInterface
     */
    public static function factory(): ImageBuilderInterface
    {
        return new self;
    }

    /**
     * @inheritdoc
     */
    public function setFormat(ImageInterface $formatComponent): ImageBuilderInterface
    {
        $actionText = 'Open file class: '.self::class;
        LogAction::addAction($actionText);

        $this->formatComponent = $formatComponent;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function openFile(string $path): ImageBuilderInterface
    {
        $actionText = "Open file: $path . class: ".self::class;
        LogAction::addAction($actionText);

        $this->image = $this->getFile($path);

        $this->getManager()->setImage($this->image);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function saveFile(string $dir,string $name): ImageBuilderInterface
    {
        $actionText = "Save file Dir: $dir,Name: $name . class: ".self::class;
        LogAction::addAction($actionText);

        $this->image = $this->getManager()->getBytes();

        $format = $this->getManager()->getFormat();
        $path = $dir.DIRECTORY_SEPARATOR.$name.'.'.$format;

        file_put_contents($path,$this->image);
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getManager(): ImageInterface
    {
        return $this->formatComponent;
    }

    /**
     * @param string $path
     * @return string
     */
    private function getFile(string $path): string
    {
        if (file_exists($path)) {
            return file_get_contents($path);
        }

        return '';
    }

}