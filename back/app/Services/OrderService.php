<?php

namespace Services;

use Models\OrderModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Services\EntityService;

class OrderService extends EntityService
{
    public function getOrders(Response $response): Response
    {
        $model = new OrderModel;
        $orders = $model->getAll();

        return $this->jsonResponse($orders, $response)
            ->withStatus(200);
    }

    public function getOrder(Response $response, string $id): Response
    {
        $model = new OrderModel;
        $orders = $model->get($id);

        return $this->jsonResponse($orders, $response)
            ->withStatus(200);
    }

    public function createOrder(Request $request, Response $response): Response
    {
        $model = new OrderModel;
        $order = $request->getParsedBody();
        $model->createOrder($order);

        return $response
            ->withStatus(201);
    }

    public function modifyOrder(Request $request, Response $response, string $id): Response
    {
        $model = new OrderModel;
        $order = $request->getParsedBody();
        $model->modifyOrder($order, $id);

        return $response
            ->withStatus(204);
    }

    public function deleteOrder(Request $request, Response $response, string $id): Response
    {
        $model = new OrderModel;
        $model->delete($id);

        return $response
            ->withStatus(204);
    }
}
