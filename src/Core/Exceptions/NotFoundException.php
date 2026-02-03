<?php

namespace QbilPhpSDK\Core\Exceptions;

class NotFoundException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'QbilPhpSDK Not Found Exception';
}
