<?php
namespace GoVoyageBundle\Redirection;


use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use GoVoyageBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AfterLoginRedirection implements AuthenticationSuccessHandlerInterface
{

    /**

     * @var \Symfony\Component\Routing\RouterInterface

     */
    private $router;
    protected $security;

    /**

     * @param RouterInterface $router

     */
    public function __construct(RouterInterface $router, AuthorizationChecker $security) {

        $this->router = $router;
        $this->security = $security;
    }

    /**

     * @param Request $request

     * @param TokenInterface $token

     * @return RedirectResponse

     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {

        // Get list of roles for current user

        $roles = $token->getRoles();

        // Tranform this list in array

        $rolesTab = array_map(function($role) {

            return $role->getRole();
        }, $roles);



        if (in_array('ROLE_AGENCE_VOITURE', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('go_voyage_affichevoitureforAgence'));
        if (in_array('ROLE_AGENCE', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('ListVol'));
        if (in_array('ROLE_HOTEL', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('hotel_show'));
        if (in_array('ROLE_ADMIN', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('admintempl'));
        if (in_array('ROLE_GUIDE', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('AfficherGuideCompte'));
        if (in_array('ROLE_CLIENT', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('users_showclient'));



        // otherwise we redirect user to the member area
        return $redirection;
    }

}

