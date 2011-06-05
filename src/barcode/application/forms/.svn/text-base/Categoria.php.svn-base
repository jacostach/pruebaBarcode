<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 */
class Application_Form_Categoria extends Zend_Form {

    public function init(){
        $this
            ->setMethod('post')
            ->setAttrib('id','frmCategoria')
        ;

        $e = new Zend_Form_Element_Text('nombre');
        $e->setLabel('Nombre');
        $e->addValidator(new Zend_Validate_StringLength( array('min'=>2,'max'=>50) ));
        $e->addValidator(new Zend_Validate_Alnum(true));
        $this->addElement($e);

        //Submit
        $e = new Zend_Form_Element_Submit('submit');
        $e->setAttrib('value', 'Registrar');
        $this->addElement($e);

        
        

    }

}
?>
