<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as EasyAdminController;
use AppBundle\Entity\User;
use FOS\UserBundle\Form\Type\RegistrationFormType;

class AdminController extends EasyAdminController
{
    /**
     * @Route("/admin/", name="admin")
     */
    public function indexAction(Request $request)
    {
        return parent::indexAction($request);
    }

    public function createNewForm($entity, array $entityProperties)
    {
        if ($entity instanceof User) {
        	$editForm = $this->createForm(new RegistrationFormType('AppBundle\Entity\User'), $entity);
        }else{
	        $editForm = parent::createEditForm($entity, $entityProperties);
        }


        return $editForm;
    }
}