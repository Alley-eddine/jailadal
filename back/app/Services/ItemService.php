<?php

namespace Services;

use Entities\Item;
use Models\ItemModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Services\EntityService;

class ItemService extends EntityService
{
    public function getItems(Response $response): Response
    {
        $model = new ItemModel;
        $items = $model->getAll();

        return $this->jsonResponse($items, $response)
            ->withStatus(200);
    }

    public function getItem(Response $response, string $id): Response
    {
        $model = new ItemModel;
        $items = $model->get($id);

        return $this->jsonResponse($items, $response)
            ->withStatus(200);
    }

    public function createItem(Request $request, Response $response): Response
    {
        $model = new ItemModel;
        $item = new Item($request->getParsedBody());
        $model->createItem($item);

        return $response
            ->withStatus(201);
    }

    public function modifyItem(Request $request, Response $response, string $id): Response
    {
        $model = new ItemModel;
        $item = new Item($request->getParsedBody());
        $model->modifyItem($item, $id);

        return $response
            ->withStatus(204);
    }

    public function deleteItem(Request $request, Response $response, string $id): Response
    {
        $model = new ItemModel;
        $model->delete($id);

        return $response
            ->withStatus(204);
    }
}
