<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Venta
 *
 * @author texai
 */
class Application_Form_VentaDetalle extends Zend_Form {

    public function init(){
        
        $this
            ->setMethod('post')
            ->setAttrib('id', 'frmVenta')
            ->setAttrib('style', 'width: 300px;margin:auto;')
        ;

        // Producto
        $e = new Zend_Form_Element_Select('id_producto');
        $e->setLabel('Producto');
        $e->setRequired();
        $_producto = new Application_Model_Producto();
        $e->addMultiOption(-1,'--Producto--');
        $e->addMultiOptions($_producto->getComboValues());
        $e->addValidator(new Zend_Validate_InArray($_producto->getComboValidValues()));
        $this->addElement($e);

        // Cantidad
        $e = new Zend_Form_Element_Text('cantidad');
        $e->setLabel('Cantidad');
        $e->setRequired();
        $e->addValidator(new Zend_Validate_Int(new Zend_Locale('US')));
        $e->addValidator(new Zend_Validate_GreaterThan(0));
        $e->addValidator(new Zend_Validate_LessThan(100));
        $this->addElement($e);

        // AddVentaDetalles
        $e = new Zend_Form_Element_Hidden('is_detalle');
        $e->setValue(true);
        $e->setRequired();
        $this->addElement($e);

        //Submit
        $e = new Zend_Form_Element_Submit('submit');
        $e->setLabel('Agregar');
        $this->addElement($e);
        

    }

}