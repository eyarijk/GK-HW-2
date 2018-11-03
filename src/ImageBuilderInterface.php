<?php

namespace Evrey\Images;


use Evrey\Images\Format\ImageInterface;

interface ImageBuilderInterface
{
    /**
     * @param ImageInterface $format
     * @return ImageBuilderInterface
     */
    public function setFormat(ImageInterface $format): ImageBuilderInterface;

    /**
     * @param string $path
     * @return ImageBuilderInterface
     */
    public function openFile(string $path): ImageBuilderInterface;

    /**
     * @param string $dir
     * @param string $name
     * @return ImageBuilderInterface
     */
    public function saveFile(string $dir,string $name): ImageBuilderInterface;

    /**
     * @return ImageInterface
     */
    public function getManager(): ImageInterface;

}