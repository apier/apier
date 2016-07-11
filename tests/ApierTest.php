<?php


class ApierTest extends \PHPUnit\Framework\TestCase
{
    public function testVersion()
    {
        $e = new \Apier\Apier;
        $this->assertEquals('1.0', $e->version());
    }
}
