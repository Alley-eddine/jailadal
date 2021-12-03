<?php

namespace Services;

use Models\CategoryModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Services\EntityService;

class CategoryService extends EntityService
{
    public function getCategories(Response $response): Response
    {
        $model = new CategoryModel;
        $categories = $model->getAll();

        return $this->jsonResponse($categories, $response)
            ->withStatus(200);
    }

    public function getCategory(Response $response, string $id): Response
    {
        $model = new CategoryModel;
        $categories = $model->get($id);

        return $this->jsonResponse($categories, $response)
            ->withStatus(200);
    }

    public function createCategory(Request $request, Response $response): Response
    {
        $model = new CategoryModel;
        $category = $request->getParsedBody();
        $model->createCategory($category);

        return $response
            ->withStatus(201);
    }

    public function modifyCategory(Request $request, Response $response, string $id): Response
    {
        $model = new CategoryModel;
        $category = $request->getParsedBody();
        $model->modifyCategory($category, $id);

        return $response
            ->withStatus(204);
    }

    public function deleteCategory(Request $request, Response $response, string $id): Response
    {
        $model = new CategoryModel;
        $model->delete($id);

        return $response
            ->withStatus(204);
    }
}
