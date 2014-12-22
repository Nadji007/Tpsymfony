<?php

namespace TD\ConferenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\HttpFoundation\Response;

class ConfController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
  
           $conferences = $em->getRepository('ConferenceBundle:Posts')->findAll();
                
        return $this->render('ConferenceBundle:Posts:posts.html.twig', array('conferences' => $conferences));

    }
    
    public function confAction($id)
    {
      $em = $this->getDoctrine()->getManager();
  
        $conference = $em->getRepository('ConferenceBundle:Posts')->find($id);
        
        
        if(!$conference) throw $this->createNotFoundException ('La page n\'existe pas!');
                
        return $this->render('ConferenceBundle:Posts:conf.html.twig', array('conference' => $conference));
      
    }
}
