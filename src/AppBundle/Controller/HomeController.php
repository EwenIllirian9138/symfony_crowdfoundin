<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Projects;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\DBAL\Connections;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

class HomeController extends Controller
{
    /**
     * @Route ("/home", name="home_page")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('home.html.twig');
    }
}
