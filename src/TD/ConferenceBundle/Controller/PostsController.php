<?php

namespace TD\ConferenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TD\ConferenceBundle\Form\PostsType;
use Symfony\Component\HttpFoundation\Request;
use TD\ConferenceBundle\Entity\Posts;
use TD\ConferenceBundle\Entity\Image;

class PostsController extends Controller
{
    public function ajoutAction(Request $request)
    {
    $posts = new Posts();
    $form = $this->get('form.factory')->create(new PostsType(), $posts);

    if ($form->handleRequest($request)->isValid()) {
        
     $posts->getImage()->upload();
      $em = $this->getDoctrine()->getManager();
      $em->persist($posts);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', ' Conférence bien enregistrée.');

      return $this->redirect($this->generateUrl('conference_homepage', array('id' => $posts->getId())));
      //, array('conferences' => $conferences)));
    }

    return $this->render('ConferenceBundle:Posts:ajout.html.twig', array(
      'form' => $form->createView(),
    ));
   }
    
    /* public function ajoutAction()
    {
    
        $em = $this->getDoctrine()->getManager();
        $conference = new Posts();
        $conference->setTitre('Symfony Live Madrid 2014');
        $conference->setExtrait('SensioLabs Madrid is proud to announce the third edition of the exceptionally successful SymfonyLive Madrid');
        $conference->setContenu('The two day conference will take place on Thursday 25th - Friday 26th September 2014, in the heart of Madrid, and will bring together the sharpest minds in open source enterprise software development. Day one is a workshop day consisting of hands-on training courses from industry leading Symfony experts. Day two is the main conference day when we\'re pulling out all the stops. Talks on Symfony, Drupal, BDD and wider PHP topics will make this an event to remember');
       
        // Création de l'entité Image
        $image = new Image();
        $image->setUrl('C:\Users\Fidèle\Desktop\examen_PHP_dev\symfony_madrid.png');
        $image->setAlt('Madrid 2014');

        // On lie l'image à la conférence
        
        $conference->setImage($image);
        $em->persist($conference);
        $em->flush();
        
        $em = $this->getDoctrine()->getManager();
     /* $conference = new Posts();
        $conference->setTitre('PHP Tour 2014');
        $conference->setExtrait('Cette année au PHP Tour Lyon 2014, l\'AFUP et JoliCode, sponsor Argent, exaucent leur souhait ! Un apéro communautaire se tiendra le lundi 23 juin, uniquement réservé aux visiteurs de l\'event, juste après la fin de la première journée de conférences. ');
        $conference->setContenu('C\'est au Red House, pub situé à quelques pas de la Manufacture des Tabacs, que nous organiserons cet apéro PHP exceptionnel. Repas, boissons, ambiance conviviale, quelques surprises, on se charge de tout ! Et l\'AFUP est soutenue dans l\'organisation de cette soirée par JoliCode, agence experte dans la réalisation de projets Web et mobiles. En effet, JoliCode s\'implique dans de nombreuses conférences à travers le monde, et a depuis toujours une véritable affinité avec les événements AFUP. Sans compter que les développeurs de JoliCode sont convaincus que, ce qu\'il y a de mieux dans une conférence, ce sont les gens que l\'on y croise et les discussions qui s\'en suivent... C\'est pourquoi, en plus de devenir sponsor Argent du PHP Tour Lyon 2014, JoliCode participe à l\'organisation de cet apéro communautaire gratuit pour tous les visiteurs de l\'event ! 
');
       
        // Création de l'entité Image
        $image = new Image();
        $image->setUrl('C:\Users\Fidèle\Desktop\examen_PHP_dev\rasmusLerdorf.jpg');
        $image->setAlt('PHP Tour 2014');

        // On lie l'image à la conférence
        
        $conference->setImage($image);
        $em->persist($conference);
        $em->flush();
       
       $conferences = $em->getRepository('ConferenceBundle:Posts')->findAll();
                
        return $this->render('ConferenceBundle:Default:posts.html.twig', array('conferences' => $conferences));
    }*/
}
