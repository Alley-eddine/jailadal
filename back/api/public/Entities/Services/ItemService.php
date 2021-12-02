<?php

namespace Services;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ItemService
{
    public function getAllItems(Request $request, Response $response): Response
    {
        $response->getBody()->write('<span>GET All Items</span>');
        return $response;
    }
}
