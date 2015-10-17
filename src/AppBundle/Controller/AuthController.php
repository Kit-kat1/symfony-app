<?php
/**
 * Created by PhpStorm.
 * User: gunko
 * Date: 10/16/15
 * Time: 1:54 PM
 */
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Users;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class AuthController extends Controller
{
    /**
     * @Route("/login")
     */
    public function loginAction()
    {
    }
    /**
     * @Route("/login_check")
     */
    public function loginCheckAction()
    {
    }
}