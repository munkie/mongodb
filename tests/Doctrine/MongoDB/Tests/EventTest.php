<?php

namespace Doctrine\MongoDB\Tests;

use Doctrine\MongoDB\Connection;
use Doctrine\MongoDB\Events;
use Doctrine\Common\EventManager;
use PHPUnit_Framework_TestCase;

class EventTest extends PHPUnit_Framework_TestCase
{
    public function testEventArgsNamespaceTest() 
    {
        $listener = new ListenerStub();
        $manager  = new EventManager();

        $manager->addEventListener(Events::preConnect, $listener);

        $connection = new Connection(null, array(), null, $manager);
        $connection->initialize();
    }
}

class ListenerStub {
    function preConnect() {}
}