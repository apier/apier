<?php


class ApierTest extends PHPUnit_Framework_TestCase
{
    public function testVersion()
    {
        $e = new \Apier\Apier;
        $this->assertEquals('1.0', $e->version());
    }
}
