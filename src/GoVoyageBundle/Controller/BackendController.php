<?php
/**
 * Created by PhpStorm.
 * User: Ghassen
 * Date: 20/11/2017
 * Time: 19:50
 */

namespace GoVoyageBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackendController extends Controller
{
    public function testAction()
    {
        return $this->render('GoVoyageBundle:Admin:index_admin.html.twig');
    }

}