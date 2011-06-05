<?php

class IndexController extends My_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->_helper->layout->setLayout('layout');
        // action body
    }


    public function loginAction()
    {
        $this->_helper->layout->setLayout('layout_login');
        $form = new Application_Form_Login();
        $params = $this->_request->getParams();
        if( $this->_request->isPost() && $form->isValid($params) ){
            $_usuario = new Application_Model_Usuario();
            $loginValido = $_usuario->autenticar($form->getValues());
            if($loginValido){
                $this->_redirect('/');
            }else{
                $this->_helper->flashMessenger('Usuario o contraseña invalido');
                $this->_redirect('/index/login');
            }

        }
        $this->view->form = $form;
    }  
    
     public function logoutAction(){
        $S = new Zend_Session_Namespace('ventas');
        unset($S->usuario);
        $this->_redirect('/');
    }
    
}

