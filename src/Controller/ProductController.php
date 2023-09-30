<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/api/products/{id<\d+>}', methods: ['GET'], name: 'api_products_get_one')]
    public function getProduct(int $id, LoggerInterface $logger): Response
    {
        // TODO query the database
        $product = [
            'id' => $id,
            'name' => 'Test Product Name',
            'price' => 15.23,
        ];

        $logger->info('Returning API response for product {product}', [
            'product' => $id,
        ]);

        return $this->json($product);
    }
}
