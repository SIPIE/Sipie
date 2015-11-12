<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

//request object para habilitar las 
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $user = $request->get('username');
            $password = $request->get('password');
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('LoginLoginBundle:Users');

            $user = $repository->findOneBy(array('name' => $user, 'pass' => $password));
            if ($user) {
                return array('name' => $user->getName());
            } else {
                return array('name' => 'Login Failed!');
            }
        }
    }
    
    /**
     * @Route("/login")
     * @Template()
     */
    public function loginAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            //variables para obtner el login/pass que ingreso el usuario
            $nombre = $request->get('username');
            $password = $request->get('password');
            
            //acceso a la base de datos
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('LoginLoginBundle:Users');
            
            //consulta a la base de datos
            $nombre = $repository->findOneBy(array('name' => $nombre, 'pass' => $password));
            $users = $repository->findAll();
            
            //valido si el login es correcto
            if($nombre){
            return array('users' => $users);
            } else {
                return array('name' => 'Login Failed!');
            }
            }
       
    }
}
