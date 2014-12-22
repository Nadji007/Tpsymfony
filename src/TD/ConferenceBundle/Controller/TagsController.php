<?php

namespace TD\ConferenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TD\ConferenceBundle\Entity\Tags;

class TagsController extends Controller
{
    public function ajoutAction()
    {
        $em = $this->getDoctrine()->getManager();
        $motcle = new Tags();
        $motcle->setName('Cache');
        
        $em->persist($motcle);
        $em->flush();
        die('test'); // die pour sortir après enregistrement
        $tags = $em->getRepository('ConferenceBundle:Tags')->findAll();
                
        return $this->render('ConferenceBundle:Posts:posts.html.twig', array('tags' => $tags));
    }
}
