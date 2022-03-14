<?php declare(strict_types=1);

namespace Amadeus\Exceptions;

use Amadeus\Response;

class AuthenticationException extends ResponseException
{
    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
    }
}