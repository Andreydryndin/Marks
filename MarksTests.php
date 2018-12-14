<?php
use PHPUnit\Framework\TestCase;
require 'index.php';

class MarksTests extends TestCase {

    protected function setUp()
    {
        //init test
    }

    protected function tearDown()
    {
        //down test
    }

    public function testSuccess()
    {
        $result = revertPunctuationMarks("hi! how are you?");
        $this->assertEquals("hi? how are you!", $result);
    }

    public function testError()
    {
        $result = revertPunctuationMarks("hi> how are you<");
        $this->assertEquals("hi< how are you<", $result);
    }
}