<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Venta
 *
 */
class Application_Form_VentaCatalogo extends Zend_Form {

    public function init(){
        
        $this
            ->setMethod('post')
            ->setAction('/test/catalogo/')
            ->setAttrib('id', 'frmVentaCataloto')
        ;

        $e = new Zend_Form_Element_Hidden('id_producto');
        $e->setLabel('Producto');
        $e->setRequired();
        $this->addElement($e);


        // Cantidad
        $e = new Zend_Form_Element_Text('cantidad');
        $e->setLabel('Cantidad');
        $e->setRequired();
        $e->addValidator(new Zend_Validate_Int(new Zend_Locale('US')));
        $e->addValidator(new Zend_Validate_GreaterThan(0));
        $e->addValidator(new Zend_Validate_LessThan(100));
        $this->addElement($e);


        //Submit
        $e = new Zend_Form_Element_Submit('submit');
        $e->setlabel('Registrar');
        $this->addElement($e);
        

    }

}