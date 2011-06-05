<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author eanaya
 */
class Application_Form_Fabricante extends Zend_Form
{

    public function init()
    {
        $this
            ->setMethod('post')
            ->setAttrib('id', 'frmFabricante')
        ;

        // Elemento: Nombre
        $e = new Zend_Form_Element_Text('nombre');
        $e->setLabel('Nombre');
        $e->setAttrib('maxlength', '50');
        $e->setRequired(true);
        $v = new Zend_Validate_StringLength(
            array('min'=>5,'max'=>50)
        );
        $v->setMessage(
            "'%value%' debe tener más de %min% characters.",
            Zend_Validate_StringLength::TOO_SHORT
        );
        $e->addValidator($v);
        $this->addElement($e);
        

        // Elemento: RUC
        $e = new Zend_Form_Element_Text('ruc');
        $e->setLabel('RUC');
        $e->setRequired(true);
        $e->addValidator(new Zend_Validate_Digits());
        $v = new Zend_Validate_StringLength();
        $v->setMin(11)->setMax(11);
        $e->addValidator($v);
        $e->setAttrib('maxlength', '11');
        $this->addElement($e);
        
       
        $this->addElement('submit', 'Enviar');
    }

}

?>
