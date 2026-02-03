<?php

namespace QbilPhpSDK\Core\Exceptions;

class RateLimitException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'QbilPhpSDK Rate Limit Exception';
}
