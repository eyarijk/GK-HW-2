<?php

namespace Evrey\Images\Format;


interface ImageInterface
{
    /**
     * @param string $bytes
     * @return ImageInterface
     */
    public function setImage(string $bytes): ImageInterface;

    /**
     * @param string $text
     * @return ImageInterface
     */
    public function setWatterMark(string $text): ImageInterface;

    /**
     * @param int $width
     * @param int $height
     * @return ImageInterface
     */
    public function thumb(int $width,int $height): ImageInterface;

    /**
     * @return string
     */
    public function getBytes(): string;

    /**
     * @return string
     */
    public function getFormat(): string;

    /**
     * @param string $text
     * @param int $x
     * @param int $y
     * @return ImageInterface
     */
    public function addText(string $text,int $x,int $y): ImageInterface;

    /**
     * @param int $deg
     * @return ImageInterface
     */
    public function rotate(int $deg): ImageInterface;
}