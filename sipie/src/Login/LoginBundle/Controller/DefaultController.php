<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/login")
     * @Template()
     */
    public function indexAction()
    {
        $user = 'felipe';
        $password = 'asd1';
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('LoginLoginBundle:Users');
        
        $user = $repository->findOneBy(array('name'=>$user,'pass'=>$password));
        if($user){
        return array('name' => $user-> getName());
        }
        else{
            return array('name' => 'Login Failed!');
        }
    }
}
