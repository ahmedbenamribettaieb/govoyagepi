<?php

/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 24/11/2017
 * Time: 11:18
 */
namespace GoVoyageBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ChambreRepository extends EntityRepository
{

    public function findAllByDate()
    {
        $query = $this->getEntityManager()
            ->createQuery('SELECT d, COUNT (d) FROM GoVoyageBundle:Chambre d WHERE d.date_debut IS NOT NULL GROUP BY d.type' ) ;


            return $query->getResult();
    }
    public function findcount (){
        $query = $this->getEntityManager()
            ->createQuery('SELECT d FROM GoVoyageBundle:Chambre d WHERE d.date_debut IS NOT NULL ' ) ;
        $total = $this->getEntityManager()
            ->createQuery('SELECT count(d) FROM GoVoyageBundle:Chambre d WHERE d.date_debut IS NOT NULL ' );


        return $total->getResult();
    }

}