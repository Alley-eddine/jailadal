<?php

namespace Services;

use Models\CartModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Services\EntityService;

class CartService extends EntityService
{
    public function getCarts(Response $response): Response
    {
        $model = new CartModel;
        $carts = $model->getAll();

        return $this->jsonResponse($carts, $response)
            ->withStatus(200);
    }

    public function getCart(Response $response, string $id): Response
    {
        $model = new CartModel;
        $carts = $model->get($id);

        return $this->jsonResponse($carts, $response)
            ->withStatus(200);
    }

    public function createCart(Request $request, Response $response): Response
    {
        $model = new CartModel;
        $cart = $request->getParsedBody();
        $model->createCart($cart);

        return $response
            ->withStatus(201);
    }

    public function modifyCart(Request $request, Response $response, string $id): Response
    {
        $model = new CartModel;
        $cart = $request->getParsedBody();
        $model->modifyCart($cart, $id);

        return $response
            ->withStatus(204);
    }

    public function deleteCart(Request $request, Response $response, string $id): Response
    {
        $model = new CartModel;
        $model->delete($id);

        return $response
            ->withStatus(204);
    }
}
