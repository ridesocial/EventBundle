<?php
namespace RideSocial\Bundle\EventBundle\Controller;

use \Symfony\Component\HttpFoundation\Request;

use \RideSocial\Bundle\EventBundle\Form\Type\EventType;

class EventController extends \RideSocial\Bundle\CoreBundle\Controller\Controller
{
    public function indexAction(Request $request)
    {
        $events = $this->get('ridesocial_repository_event')->filterByStart();
        
        $map = $this->get('ivory_google_map.map');
        foreach ($events as $event) {
            if (!is_empty($event->getVenueId())) {
                // add map points for events
            }
        }
        
        return $this->render(
            'RideSocialEventBundle:Event:index.html.twig',
            array(
                'events' => $events,
                'map' => $map
            )
        );
    }
    
    public function showAction($slug)
    {
        $map = $this->get('ivory_google_map.map');
        
        $event = $this->get('ridesocial.repository.event')->findBySlug($slug);
        if (!$event) {
            throw $this->createNotFoundException('No event found.');
        }
        
        return $this->render(
            'RideSocialEventBundle:Event:show.html.twig',
            array(
                'map' => $map,
                'event' => $event
            )
        );
    }

    public function addAction()
    {
        $event = new Event();

        $form = $this->createForm(new EventType(), $event);

        return $this->render(
            'RideSocialEventBundle:Event:add.html.twig',
            array('form' => $form->createView())
        );
    }

    public function createAction()
    {
        $event = $this->get('ridesocial.repository.event')->createNew();
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($event);
        $em->flush();

        return forward(
            'RideSocialEventBundle:Event:show.html.twig',
            array(
                'slug',
                $event->getSlug()
            )
        );
    }
}
