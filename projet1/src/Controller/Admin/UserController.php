<?php
namespace App\Controller\Admin;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/admin/utilisateurs', name: 'admin_users_')]
class UserController extends AbstractController{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        
      
        return $this->render('admin/user/index.html.twig');
    }




}