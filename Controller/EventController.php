<?php

namespace RideSocial\Bundle\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use RideSocial\Bundle\EventBundle\Entity\Event;
use RideSocial\Bundle\EventBundle\Form\Type\EventType;

class EventController extends Controller {
    public function indexAction($filter = 'today', $distance=25) {
      switch($filter) {
        case 'month':
          $events = $this->getDoctrine()->getRepository('RideSocialEventBundle:Event')->filterByMonth();
          break;
        case 'week':
          $events = $this->getDoctrine()->getRepository('RideSocialEventBundle:Event')->filterByWeek();
          break;
        default:
          $events = $this->getDoctrine()->getRepository('RideSocialEventBundle:Event')->filterByToday();
          break;
      }
      $map = $this->get('ivory_google_map.map');
      foreach($events as $event) {
        if(!is_empty($event->getVenueId())) {
          
        }
      }
      return $this->render('RideSocialEventBundle:Event:index.html.twig', array('events'=>$events, 'filter'=>$filter, 'distance'=>$distance, 'map'=>$map));
    }
    
    public function showAction($slug) {
      $event = $this->getDoctrine()->getRepository('RideSocialEventBundle:Event')->find($slug);
      if(!$event)  throw $this->createNotFoundException('No event found.');
    }
    
    public function addAction() {
      $event = new Event();
      
      $form = $this->createForm(new EventType(), $event);
      
      return $this->render('RideSocialEventBundle:Event:add.html.twig', array(
          'form' => $form->createView()));
    }
    
    public function createAction() {
      $event = new Event();
      
      $em = $this->getDoctrine()->getEntityManager();
      $em->persist($event);
      $em->flush();
      
      return forward('RideSocialEventBundle:Event:event', array('slug', $event->getSlug()));
    }
}
