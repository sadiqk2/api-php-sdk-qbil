<?php

namespace QbilPhpSDK\Core\Exceptions;

class PermissionDeniedException extends APIStatusException
{
    /** @var string */
    protected const DESC = 'QbilPhpSDK Permission Denied Exception';
}
