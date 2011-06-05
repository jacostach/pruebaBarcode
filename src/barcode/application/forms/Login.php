<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 */
class Application_Form_Login extends Zend_Form {

    public function init(){
        $this
            ->setMethod('post')
            ->setAttrib('id','frmLogin')
        ;

        $e = new Zend_Form_Element_Text('login');
        $e->setLabel('Username');
        $e->setRequired();
        $e->addValidator(new Zend_Validate_StringLength(array('min'=>5,'max'=>20)));
        $this->addElement($e);
        
        $e = new Zend_Form_Element_Password('pwd');
        $e->setRequired();
        $e->setLabel('Password');
        $this->addElement($e);

        //Submit
        $e = new Zend_Form_Element_Submit('submit');
        $e->setLabel('Login');
        $this->addElement($e);

    }

}
?>
