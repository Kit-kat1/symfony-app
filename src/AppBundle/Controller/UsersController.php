<?php
/**
 * Created by PhpStorm.
 * User: gunko
 * Date: 10/13/15
 * Time: 3:08 PM
 */
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Users;

class UsersController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('admin2/index.html.twig', array('user' => 1));
    }
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function showDashboard()
    {
        return $this->render('admin2/dashboard.html.twig');
    }
    /**
     * @Route("/signin")
     */
    public function showSignInAction()
    {
        return $this->render('admin2/login.html.twig');
    }
}