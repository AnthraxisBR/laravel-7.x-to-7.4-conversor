<?php

namespace AnthraxisBR\PHP7xTo74Conversor\Tests\Parser;

use AnthraxisBR\PHP7xTo74Conversor\Parser\Parser;
use AnthraxisBR\PHP7xTo74Conversor\Tests\TestCase;

class ParserTest extends TestCase
{

    public string $filePath;

    public Parser $parser;

    public function setUp()
    {
        parent::setUp();

    }

    public function testOpenFile()
    {
        $this->parser = new Parser(env('PROJECT_PATH') . '/app/Http/Controllers/Auth/ForgotPasswordController.php');
        $this->assertTrue(is_string($this->parser->getFileContents()));
    }

    public function testExplodeFileContents()
    {

        $this->parser = new Parser(env('PROJECT_PATH') . '/app/Http/Controllers/Auth/ForgotPasswordController.php');
        $this->assertTrue(is_string($this->parser->getFileContents()));

        $this->parser->explodeFileContents();

        $this->assertTrue(is_array($this->parser->getExplodedFileContents()));

    }
}