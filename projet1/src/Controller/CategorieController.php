<?php


namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/categorie', name: 'categorie_')]
class CategorieController extends AbstractController
{
   
    #[Route('/{slug}', name: 'list')]
    public function list(Categorie $categorie, ProductRepository $productRepository, Request $request): Response
    
    {
        //On va chercher la liste des produits de la catégorie
       //On va chercher le numéro de page dans l'url
       $page = $request->query->getInt('page', 1);

       //On va chercher la liste des produits de la catégorie
       $products = $productRepository->findProductsPaginated($page, $categorie->getSlug(), 4);

        return $this->render('categorie/list.html.twig',compact('categorie','products'));
    }
   
   
}