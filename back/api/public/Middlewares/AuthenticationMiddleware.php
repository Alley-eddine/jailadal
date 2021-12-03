<?php

namespace Middlewares;

use Exception;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Exception\HttpForbiddenException;

class AuthenticationMiddleware
{
    public function __invoke(Request $request, RequestHandler $handler): Response
    {
        $response = $handler->handle($request);

        // TODO: implement logic
        // Test purpose logic

        $cookie = $request->getHeaderLine('Cookie');

        if (empty($cookie)) {
            $e = new HttpForbiddenException($request);
            var_dump($e);
            throw $e;
        }

        return $response;
    }
}
