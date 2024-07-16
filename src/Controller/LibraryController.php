<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{
    #[Route('/library')]
    public function list ()
    {
        $library = 
        [
            'gender' => ' ',
            'autor' => ' ',
            'description' => ' ',
            'editorial' => ' ',

        ]
    }
};