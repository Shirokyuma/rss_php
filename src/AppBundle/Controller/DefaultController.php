<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // if( array_key_exists('url', $request->request->all()) )
        {
            // $res = file_get_contents($request->request->get('url'));
            $rss_xml = simplexml_load_file('urlhogehoge');

            // print_r($rss_xml->channel);

            foreach ($rss_xml->channel->item as $key => $value) {
                foreach ($value as $c_key => $c_value) {
                    // $rss_xml->channel->item[$key][$c_key] = preg_replace('/hogehoge/i', '', $c_value);
                }
            }
        }

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'hoge' => $rss_xml->channel,
        ]);
    }
}
