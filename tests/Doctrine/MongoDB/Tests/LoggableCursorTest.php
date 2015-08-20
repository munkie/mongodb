<?php

namespace Doctrine\MongoDB\Tests;

class LoggableCursorTest extends BaseTest
{
    /**
     * @dataProvider provideLoggedMethods
     */
    public function testLoggedMethod($method, $argument = null)
    {
        $cursor = $this->conn->selectCollection('foo', 'bar')->find();
        $cursor->$method($argument);
    }

    public function provideLoggedMethods()
    {
        return array(
            array('sort', array()),
            array('skip'),
            array('limit'),
            array('hint', array()),
            array('snapshot'),
        );
    }
}
