<?php

namespace Velostazione\BeSMS\Exceptions;

class MessageNotEnqueued extends \RuntimeException
{
    public function __construct(string $apiResponse = '')
    {
        parent::__construct("The message was not enqueued: \r\n$apiResponse", 502);
    }
}
