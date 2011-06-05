<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Registrar
 *
 */
class Application_Form_Registrar extends Zend_Form {


    public function  init()
    {
        $this
            ->setMethod('post')
            ->setAttrib('id', 'frmRegistrar')
        ;

        $e = new Zend_Form_Element_Text('nombre');
        $e->setRequired();
        $e->setLabel('Nombre');
        $e->addValidator(new Zend_Validate_StringLength(array('min'=>5,'max'=>25)));
        $e->addValidator(new My_Validate_NoX());
        $e->addValidator(new Zend_Validate_Db_NoRecordExists(array(
            'table' => 'usuario',
            'field' => 'nombre',
        )));
        $this->addElement($e);

        $e = new Zend_Form_Element_Text('login');
        $e->setRequired();
        $e->setLabel('Login');
        $e->addValidator(new Zend_Validate_Alnum());
        $e->addValidator(new Zend_Validate_Db_NoRecordExists(array(
            'table' => 'usuario',
            'field' => 'login',
        )));
        $e->addValidator(new Zend_Validate_StringLength(array('min'=>5,'max'=>25)));
        $this->addElement($e);

        $e = new Zend_Form_Element_Password('pwd');
        $e->setRequired();
        $e->setLabel('Password');
        $this->addElement($e);

        $e = new Zend_Form_Element_Password('pwd_2');
        $e->setRequired();
        $e->setLabel('Confirmación Password');
        $e->addValidator(new My_Validate_PasswordConfirmation());
        $this->addElement($e);

        $this->addElement('submit', 'Enviar');


    }




}
?>
