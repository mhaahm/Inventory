<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as AbstractController;
use Symfony\Component\HttpFoundation\Request as Request;

/**
 * Class HomeController
 * @package App\Controller
 */
class HomeController extends AbstractController
{

    /**
     * Home controller action
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function home(Request $request)
    {
        return $this->render("home/home.html.twig");
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getInventory(Request $request)
    {
        // get family
        $familys = $this->getDoctrine()->getManager()->getRepository("App\Entity\Family")->findAll();
        return $this->render("home/currentInventory.html.twig", [
            'familys' => $familys
        ]);
    }
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listProducts(Request $request)
    {
        // get family
        $family = $this->getDoctrine()->getManager()->getRepository("App\Entity\Family")->findOneByName($request->get("family"));
        // find product by family
        $products = $this->getDoctrine()->getManager()->getRepository()->findBy('family',$family);
        return $this->render("home/currentInventoryProduct.html.twig",[
            'products' => $products
        ]);
    }
}