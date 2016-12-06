<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class ServicesController extends Controller
{
    public function indexAction()
    {
        return $this->render("AppBundle::index.html.twig");
    }

    public function srcAction()
    {
        return $this->render('AppBundle:announcement:srcbelgeleri.html.twig');
    }

    public function psikoteknikAction()
    {
        return $this->render('AppBundle:announcement:psikoteknik.html.twig');
    }

    public function belgelerAction()
    {
        return $this->render('AppBundle:announcement:udy-ody-adr.html.twig');
    }

    public function tmgdAction()
    {
        return $this->render('AppBundle:announcement:tmgd.html.twig');
    }

    public function mainpageAction()
    {
        return $this->render("UserBundle:Default:index.html.twig");
    }

}