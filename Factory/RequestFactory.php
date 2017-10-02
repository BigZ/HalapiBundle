<?php

namespace Bigz\HalapiBundle\Factory;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bridge\PsrHttpMessage\Factory\DiactorosFactory;

/**
 * Class RequestFactory
 * @author Romain Richard
 */
class RequestFactory
{
    /**
     * @param RequestStack $requestStack
     * @return \Psr\Http\Message\ServerRequestInterface
     */
    public function getRequest(RequestStack $requestStack)
    {
        $psr7Factory = new DiactorosFactory();

        return $psr7Factory->createRequest($requestStack->getMasterRequest());
    }
}
