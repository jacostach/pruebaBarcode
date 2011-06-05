<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Venta
 *
 */
class Application_Form_Venta extends Zend_Form {

    public function init(){
        
        $this
            ->setMethod('post')
            ->setAction('/venta/registrar')
            ->setAttrib('id', 'frmVenta')
            ->setAttrib('style', 'width: 300px;margin:auto;')
        ;

        // Comentarios
        $e = new Zend_Form_Element_Textarea('comentarios');
        $e->setLabel('Comentarios');
        $e->setRequired(false);
        $e->addValidator(new Zend_Validate_StringLength(array('min'=>5,'max'=>100)));
        $e->setAttrib('cols', '20');
        $e->setAttrib('rows', '2');
        $this->addElement($e);


        //Submit
        $e = new Zend_Form_Element_Submit('submit');
        $e->setlabel('Registrar');
        $this->addElement($e);
        

    }

}