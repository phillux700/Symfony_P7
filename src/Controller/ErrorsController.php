<?php
/**
 * Created by PhpStorm.
 * User: philippetraon
 * Date: 22/11/2018
 * Time: 23:04
 */

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ClientRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ProductRepository;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ErrorsController
 * @package App\Controller
 */
class ErrorsController extends AbstractController
{
    /**
     * @Route("/api/products/{id}", name="product")
     */
    public function productCheck($id, ProductRepository $productRepository)
    {
        $product = $productRepository->find($id);
        if(!$product)
        {
            $data['@context'] = "/contexts/Error";
            $data['@type'] = "Erreur";
            $data['hydra:title'] = "Une erreur est survenue";
            $data['hydra:description'] = "Le produit $id n'existe pas";
            return $this->json($data, 404);
        }
        return $this->json($product);
    }

    /**
     * @Route("/api/clients/{id}", name="client")
     */
    public function clientCheck($id, ClientRepository $clientRepository)
    {
        $client = $clientRepository->find($id);
        if(!$client)
        {
            $data['@context'] = "/contexts/Error";
            $data['@type'] = "Erreur";
            $data['hydra:title'] = "Une erreur est survenue";
            $data['hydra:description'] = "Le client $id n'existe pas";
            return $this->json($data, 404);
        }
        return $this->json($client);
    }
}