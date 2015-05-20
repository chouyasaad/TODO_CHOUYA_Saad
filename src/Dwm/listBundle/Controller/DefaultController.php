<?php

namespace Dwm\listBundle\Controller;

use Dwm\listBundle\Entity\tache;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\BrowserKit\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    /**
     * @Route("/list" )
     * @Template()
     */
    public function listAction()
    {

        return array();
    }
    /**
     * @Route("/afficher" , name="affiche" )
     * @Template()
     */
    public function afficherAction()
    {

        $e=$this->getDoctrine()->getRepository("DwmlistBundle:tache")->findAll();

        return array('tache' => $e);

    }
    /**
     * @Route("/ajouter" , name="ajout" )
     * @Template()
     */
    public function ajouterAction(Request $request)
    {

        $p=new tache();

        $form=$this->createFormBuilder($p)
            ->add('nom','text')
            ->add('description','text')
            ->add('date','text')
            ->add('ok','submit')
            ->getForm();
        $form->handleRequest($request);

        return array();



    }



}
