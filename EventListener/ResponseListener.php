<?php

namespace Pulpmedia\P3PCookieBundle\EventListener;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
 
class ResponseListener
{
    public function onKernelResponse(FilterResponseEvent $event)
    {
        $request = $event->getRequest();
 
        // only execute for text/html files
        if ($request->getRequestFormat() != 'html') {
            return;
        }
         
        // set the "P3P" header of the response
        $event->getResponse()->headers->set('P3P', 'CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');
    }
}