<?php

namespace Daily\DiscountsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    public function ShowIdAction($name)
    {
        return $this->render('DailyDiscountsBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function ShowAction($name)
    {
        return $this->render('DailyDiscountsBundle:Default:index.html.twig', array('name' => $name));
    }
    
}
