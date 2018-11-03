<?php

require_once __DIR__ . '/vendor/autoload.php';

$imageBuilderPng = \Evrey\Images\ImageBuilder::factory()
    ->setFormat(new \Evrey\Images\Format\PngFormatImage())
    ->openFile(__DIR__.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'image.png');

$imageBuilderPng->getManager()
    ->addText('Hello world',20,20)
    ->setWatterMark('Images')
    ->thumb(50,60)
    ->rotate(90);

$imageBuilderPng->saveFile(__DIR__.DIRECTORY_SEPARATOR.'images','file');


$imageBuilderBmp = \Evrey\Images\ImageBuilder::factory()
    ->setFormat(new \Evrey\Images\Format\BmpFormatImage())
    ->openFile(__DIR__.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'image.bmp');

$imageBuilderBmp->getManager()
    ->setWatterMark('PHP')
    ->addText('JS',20,10)
    ->addText('HTML',20,20)
    ->addText('SQL',20,30)
    ->addText('Redis',20,40)
    ->addText('Memcached',20,50)
    ->addText('Golang',20,60)
    ->thumb(100,70)
    ->rotate(180);

$imageBuilderBmp->saveFile(__DIR__.DIRECTORY_SEPARATOR.'images','Technologies');


$imageBuilderJpg = \Evrey\Images\ImageBuilder::factory()
    ->setFormat(new \Evrey\Images\Format\JpgFormatImage());

$imageBuilderJpg->getManager()
    ->rotate(180)
    ->thumb(240,240)
    ->addText('Mr Erey',120,120);

$imageBuilderJpg->saveFile(__DIR__.DIRECTORY_SEPARATOR.'images','avatar');

echo \Evrey\Images\LogAction::getLog("\n");