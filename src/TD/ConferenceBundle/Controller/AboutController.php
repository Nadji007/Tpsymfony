<?php

namespace TD\ConferenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    public function articleAction()
    {
        return $this->render('ConferenceBundle:About:article.html.twig');
    }
}
