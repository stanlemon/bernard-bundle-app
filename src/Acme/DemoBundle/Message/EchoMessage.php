<?php
namespace Acme\DemoBundle\Message;

use Bernard\Message\DefaultMessage;

class EchoMessage
{
    public function echoMessage(DefaultMessage $message)
    {
        echo $message->message . PHP_EOL;
    }
}