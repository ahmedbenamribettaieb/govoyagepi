<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 23/11/2017
 * Time: 01:38
 */

namespace GoVoyageBundle\Controller;

use GoVoyageBundle\Entity\Users;

use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;


class GrapheController extends Controller
{

    public function chartPieAction()
    {
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('Pourcentages des chambre par Hotel');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
        $em = $this->container->get('doctrine')->getEntityManager();

        $hotels = $em->getRepository('GoVoyageBundle:Users')->findAll();
        $totalhotel = 0;

        foreach ($hotels as $Users) {
            if ($Users->get_the_role() == "ROLE_HOTEL") {
                $totalhotel = $totalhotel + $Users->getNbChambre();
            }
        }
        if ($Users->get_the_role() == "ROLE_HOTEL") {
            $data = array();
            foreach ($hotels as $Users) {
                $stat = array();
                array_push($stat, $Users->getNom(), (($Users->getNbChambre()) * 100) / $totalhotel);
                //var_dump($stat);
                array_push($data, $stat);
            }
        }
        $ob->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data)));
        return $this->render('GoVoyageBundle:Graphe:pie.html.twig', array(
            'chart' => $ob,'hotel'=>$Users,
        ));

    }

}
