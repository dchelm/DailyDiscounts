<?php

namespace Daily\DiscountsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DiscountsController extends Controller
{
    public function ShowIdAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $discount = $em->getRepository('DailyDiscountsBundle:Discount')->find($id);
        
        if(!$discount){
            throw $this->createNotFoundException('Unable to find this Discount');
        }
        
        return $this->render('DailyDiscountsBundle:Discount:show.html.twig',array(
            'discount' => $discount,
        ));
    }
    
    public function ShowAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $blog = $em->getRepository('DailyDiscountBundle:Discount')->findAll();
    }
    
}
