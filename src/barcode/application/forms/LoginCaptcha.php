<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 */
class Application_Form_LoginCaptcha extends Application_Form_Login {

    public function init(){
        $this
            ->setMethod('post')
            ->setAttrib('id','frmLogin')
        ;
        
        $e = new Zend_Form_Element_Captcha();
        $this->addElement($e);
        
        
        $e = $this->getElement('username');
        $e->addValidator();
        
        

    }

}
?>
