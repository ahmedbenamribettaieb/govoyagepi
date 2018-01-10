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
use Zend\Json\Expr;


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

            $totalhotel = $totalhotel + $Users->getNbChambre();

        }

        $data = array();
        foreach ($hotels as $Users) {
            $stat = array();
            array_push($stat, $Users->getNom(), ($Users->getNbChambre()) / $totalhotel);
            //var_dump($stat);
            array_push($data, $stat);

        }
        $ob->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data)));
        return $this->render('GoVoyageBundle:Graphe:pie.html.twig', array(
            'chart' => $ob
        ));


    }


    public function chartHistogrammeAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $chambres = $em->getRepository('GoVoyageBundle:Chambre')->findAllByDate();

        $categories = array();
        $nbres = array();

        foreach ($chambres as $chambre) {
            array_push($categories, $chambre[0]->getType());
            array_push($nbres,  intval($chambre[1]) );

        }

        $series = array(
            array(
                'name' => 'chambre',
                'type' => 'column',
                'color' => '#4572A7',
                'yAxis' => 0,
                'data' => $nbres,
            )
        );
        $yData = array(

            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + "" }'),
                    'style' => array('color' => '#4572A7')
                ),
                'gridLineWidth' => 0,
                'title' => array(
                    'text' => 'Nombre des étudiants',
                    'style' => array('color' => '#4572A7')
                ),
            ),
        );


        $ob = new Highchart();
        $ob->chart->renderTo('container'); // The #id of the div where to render the chart
        $ob->chart->type('column');
        $ob->title->text('Nombre des reservation par type de chambre');

        $ob->xAxis->categories($categories);

        $ob->yAxis($yData);

        $ob->legend->enabled(false);
        $formatter = new Expr('function () {
var unit = {
                     "Etudiant": "étudiant(s)",
                     
                 }[this.series.name];
                 return this.x + ": <b>" + this.y + "</b> " + unit;
             }');
        $ob->tooltip->formatter($formatter);
        $ob->series($series);
        return $this->render('GoVoyageBundle:Graphe:histogramme.html.twig', array(
            'chart' => $ob
        ));
    }


}




