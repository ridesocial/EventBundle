<?php
namespace RideSocial\Bundle\EventBundle\Repository\ORM;

use Doctrine\ORM\EntityRepository;

class EventRepository extends EntityRepository {
    public function filterByToday() {
        return $this->getEntityManager()
            ->createQuery('SELECT e FROM RideSocialEventBundle:Event e WHERE (e.start = :today) ORDER BY e.start, e.name ASC')->setParameter('today', new \DateTime())
            ->getResult();
    }

    public function filterByWeek() {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT e FROM RideSocialEventBundle:Event e 
                WHERE (e.start BETWEEN :today AND :thisWeek) ORDER BY e.start, e.name ASC')->setParameter('today', new \DateTime())->setParameter('thisWeek', new \DateTime('+7 day'))
            ->getResult();
    }

    public function filterByMonth() {
        return $this->getEntityManager()
            ->createQuery('SELECT e FROM RideSocialEventBundle:Event e WHERE (e.start BETWEEN :today AND :thisMonth) ORDER BY e.start, e.name ASC')->setParameter('today', new \DateTime())->setParameter('thisMonth', new\DateTime('+1 month'))
            ->getResult();
    }
}
