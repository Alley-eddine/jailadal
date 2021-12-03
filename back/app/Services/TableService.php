<?php

namespace Services;

use Models\TableModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Services\EntityService;

class TableService extends EntityService
{
    public function getTables(Response $response): Response
    {
        $model = new TableModel;
        $tables = $model->getAll();

        return $this->jsonResponse($tables, $response)
            ->withStatus(200);
    }

    public function getTable(Response $response, string $id): Response
    {
        $model = new TableModel;
        $tables = $model->get($id);

        return $this->jsonResponse($tables, $response)
            ->withStatus(200);
    }

    public function createTable(Request $request, Response $response): Response
    {
        $model = new TableModel;
        $table = $request->getParsedBody();
        $model->createTable($table);

        return $response
            ->withStatus(201);
    }

    public function modifyTable(Request $request, Response $response, string $id): Response
    {
        $model = new TableModel;
        $table = $request->getParsedBody();
        $model->modifyTable($table, $id);

        return $response
            ->withStatus(204);
    }

    public function deleteTable(Request $request, Response $response, string $id): Response
    {
        $model = new TableModel;
        $model->delete($id);

        return $response
            ->withStatus(204);
    }
}
