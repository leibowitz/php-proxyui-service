<?php

namespace Leibowitz\Bundle\ProxyServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="_home")
     * @Template()
     */
    public function indexAction()
    {
        $dm = $this
            ->get('doctrine_mongodb')
            ->getManager()
            ->getRepository('AcmeDemoBundle:Log');

        $rs = $dm->findAllOrderedByDate();
        return array('results' => $rs);
    }

    /**
     * @Route("/info/{id}", name="_info")
     * @Template()
     */
    public function viewAction($id)
    {
        $dm = $this
            ->get('doctrine_mongodb')
            ->getManager()
            ->getRepository('AcmeDemoBundle:Log');

        $rs = $dm->find($id);
        return array('result' => $rs);
    }
}
