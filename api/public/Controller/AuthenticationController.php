<?php

namespace Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class AuthenticationController
{
    public static function authenticate(Request $request, Response $response): Response
    {
        // TODO: implement logic

        // Test purpose logic
        $data = $request->getParsedBody();

        $login = $data['login'];
        $password = $data['password'];

        $response->getBody()->write(
            "<span>Login:<br>$login</span><br><br>"
                . "<span>Password:<br>$password</span><br><br>"
        );

        return $response;
    }
}
