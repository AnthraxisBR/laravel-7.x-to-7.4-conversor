<?php

namespace AnthraxisBR\PHP7xTo74Conversor\Tests\Parser;

use AnthraxisBR\PHP7xTo74Conversor\Parser\ParseClass;
use AnthraxisBR\PHP7xTo74Conversor\Parser\Parser;
use AnthraxisBR\PHP7xTo74Conversor\Tests\TestCase;

class ClassParserTest extends TestCase
{

    public string $filePath;

    public Parser $parser;

    public function setUp()
    {
        parent::setUp();

    }

    public function testFindClassInitIndex()
    {
        $this->parser = new ParseClass(env('PROJECT_PATH') . '/app/Http/Controllers/Auth/ForgotPasswordController.php');
        $this->assertTrue(is_string($this->parser->getFileContents()));

        $this->parser->explodeFileContents();

        $this->parser->findClassInitIndex();
        $this->parser->findFirstFunctionIndex();

        var_dump($this->parser->getFirstFunctionClassIndex());
        var_dump($this->parser->getClassInitIndex());
    }


    public function testGetAttributes()
    {

        $this->parser = new ParseClass(env('PROJECT_PATH') . '/app/Models/Comment.php');
        $this->assertTrue(is_string($this->parser->getFileContents()));

        $this->parser->explodeFileContents();

        $this->assertTrue(is_array($this->parser->getExplodedFileContents()));

        $this->parser->findClassInitIndex();
        $this->parser->findFirstFunctionIndex();

        $this->parser->getAttributes();
    }

}