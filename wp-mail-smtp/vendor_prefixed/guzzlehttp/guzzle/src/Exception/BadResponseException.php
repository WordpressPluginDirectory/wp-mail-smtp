<?php

namespace WPMailSMTP\Vendor\GuzzleHttp\Exception;

use WPMailSMTP\Vendor\Psr\Http\Message\RequestInterface;
use WPMailSMTP\Vendor\Psr\Http\Message\ResponseInterface;
/**
 * Exception when an HTTP error occurs (4xx or 5xx error)
 */
class BadResponseException extends \WPMailSMTP\Vendor\GuzzleHttp\Exception\RequestException
{
    public function __construct(string $message, \WPMailSMTP\Vendor\Psr\Http\Message\RequestInterface $request, \WPMailSMTP\Vendor\Psr\Http\Message\ResponseInterface $response, ?\Throwable $previous = null, array $handlerContext = [])
    {
        parent::__construct($message, $request, $response, $previous, $handlerContext);
    }
    /**
     * Current exception and the ones that extend it will always have a response.
     */
    public function hasResponse() : bool
    {
        return \true;
    }
    /**
     * This function narrows the return type from the parent class and does not allow it to be nullable.
     */
    public function getResponse() : \WPMailSMTP\Vendor\Psr\Http\Message\ResponseInterface
    {
        /** @var ResponseInterface */
        return parent::getResponse();
    }
}
