<?php

namespace QbilPhpSDK\Core\Exceptions;

class BadRequestException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'QbilPhpSDK Bad Request Exception';
}
