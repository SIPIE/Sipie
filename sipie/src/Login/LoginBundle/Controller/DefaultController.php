<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
//request object para habilitar las 
use Symfony\Component\HttpFoundation\Request;
use Login\LoginBundle\Entity\Profesional;
use Login\LoginBundle\Entity\Participante;


class DefaultController extends Controller {

    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $user = $request->get('username');
            $password = $request->get('password');
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('LoginLoginBundle:Profesional');

            $user = $repository->findOneBy(array('rut' => $user, 'pass' => $password));
            if (!$user) {
                return $this->render('LoginLoginBundle:Default:index.html.twig',array('name' => 'Usuario o clave incorrecto!'));
            }
            else{
                 return $this->render('LoginLoginBundle:Default:index.html.twig',array('name' => 'Usuario Correcto!'));
                /*return $this->render('LoginLoginBundle:Default:login.html.twig', array('name'=>$user));*/
            }
        }
    }

    /**
     * @Route("/login")
     * @Template()
     */
    public function loginAction(Request $request) {
            
            //acceso a la base de datos
            //$em = $this->getDoctrine()->getManager();

            //cambio el repositorio
            //$repository = $em->getRepository('LoginLoginBundle:Profesional');
            //$users = $repository->findAll();

            //valido si el login es correcto
            //if ($users) {
              //  return array('users' => $request);
            }
        
    

    /**
     * @Route("/addp")
     * @Template()
     */
    public function addpAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            try {
                $participantea = new Participante();

                $participantea->setRut($request->get('rut'));
                $participantea->setNombres($request->get('nombres'));
                $participantea->setApellidos($request->get('apellidos'));
                $participantea->setTelefono($request->get('telefono'));
                $participantea->setEmail($request->get('email'));
                $participantea->setDireccion($request->get('direccion'));
                $participantea->setSexo($request->get('sexo'));
                $participantea->setTipo($request->get('tipo'));
                $participantea->setFechanacimiento($request->get('fechanacimiento'));
                $participantea->setLateralidad($request->get('lateralidad'));

                $em = $this->getDoctrine()->getManager();
                $em->persist($participantea);
                $em->flush();
                return $this->render('LoginLoginBundle:Default:addp.html.twig',array('name'=>'Participante fue agregado exitosamente!'));
                
            } catch (\Exception $e) {
                return array('warning' => 'No se pudo agregar el participante con rut "' . $request->get('rut') . '", ya a sido ingresado anteriormente.');
            }
        }
        return $this->render('LoginLoginBundle:Default:addp.html.twig');
    }
    
    /**
     * @Route("/update")
     * @Template()
     */
    public function updateAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $usuario = $em->getRepository('LoginLoginBundle:Profesional')->findOneBy(array('rut' => $nombre));
            if($usuario){
                
            } else {
                return array('name' => 'No se encontro el profesional con rut "'.$request.'".');
            }
        }
        return $this->render('LoginLoginBundle:Default:addp.html.twig');
    }

}
