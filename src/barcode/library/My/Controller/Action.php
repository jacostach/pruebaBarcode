<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Action
 *
 * @author drumsclown
 */
class My_Controller_Action extends Zend_Controller_Action
{
    public function init()
    {
        $this->view->messages = $this->_helper->flashMessenger->getMessages();
        $S = new Zend_Session_Namespace('ventas');
        $this->view->usuario = $S->usuario;
        if(!isset($S->usuario)  ){
            $no_require_login = array(
                'index/login',
                'test/reset'
            );
            $current_action = $this->_request->getControllerName().'/'.$this->_request->getActionName();
            if(!in_array( $current_action ,$no_require_login )){
                $this->_redirect('/index/login');
            }
        }
    }
}