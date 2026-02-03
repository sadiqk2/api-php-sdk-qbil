<?php

declare(strict_types=1);

namespace QbilPhpSDK\Core\Contracts;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use QbilPhpSDK\Core\Conversion\Contracts\Converter;
use QbilPhpSDK\Core\Conversion\Contracts\ConverterSource;

/**
 * @internal
 *
 * @template TInner
 *
 * @extends \IteratorAggregate<int, TInner>
 */
interface BaseStream extends \IteratorAggregate
{
    public function __construct(
        Converter|ConverterSource|string $convert,
        RequestInterface $request,
        ResponseInterface $response,
        mixed $parsedBody,
    );

    /**
     * Manually force the stream to close early.
     * Iterating through will automatically close as well.
     */
    public function close(): void;
}
