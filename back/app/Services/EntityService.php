<?php

namespace Services;

use Psr\Http\Message\ResponseInterface as Response;

class EntityService
{
    protected function jsonResponse($data, Response $response): Response
    {
        $payload = json_encode($data);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    }
}