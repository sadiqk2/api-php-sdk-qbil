<?php

namespace QbilPhpSDK\Core\Exceptions;

class InternalServerException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'QbilPhpSDK Internal Server Exception';
}
