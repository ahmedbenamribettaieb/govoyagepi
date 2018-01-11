<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 23/11/2017
 * Time: 22:26
 */

namespace GoVoyageBundle\Repository;


use Doctrine\ORM\EntityRepository;

class VoitureRepository extends EntityRepository
{
    public function findIdParameter($alv_vo_fk){
        $query=$this->getEntityManager()
            ->createQuery("select m from GoVoyageBundle:Voiture m WHERE m.alvVoFk=:alvVoFk")
        ->setParameter('alvVoFk',$alv_vo_fk);
        return $query->getResult();
    }

}