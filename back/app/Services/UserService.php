<?php

namespace Services;

use Models\UserModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Services\EntityService;

class UserService extends EntityService
{
    public function getUsers(Response $response): Response
    {
        $model = new UserModel;
        $users = $model->getAll();

        return $this->jsonResponse($users, $response)
            ->withStatus(200);
    }

    public function getUser(Response $response, string $id): Response
    {
        $model = new UserModel;
        $users = $model->get($id);

        return $this->jsonResponse($users, $response)
            ->withStatus(200);
    }

    public function createUser(Request $request, Response $response): Response
    {
        $model = new UserModel;
        $user = $request->getParsedBody();
        $model->createUser($user);

        return $response
            ->withStatus(201);
    }

    public function modifyUser(Request $request, Response $response, string $id): Response
    {
        $model = new UserModel;
        $user = $request->getParsedBody();
        $model->modifyUser($user, $id);

        return $response
            ->withStatus(204);
    }

    public function deleteUser(Request $request, Response $response, string $id): Response
    {
        $model = new UserModel;
        $model->delete($id);

        return $response
            ->withStatus(204);
    }
}
