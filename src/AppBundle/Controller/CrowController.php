<?php 
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CrowController extends Controller
{
    /**
     * @Route("/", name="Homepage")
     */
    public function indexAction()
    {
        $number = random_int(0, 100);

        return $this->render('crow/homePage.html.twig', array(
            'number' => $number,
        ));
    }
}