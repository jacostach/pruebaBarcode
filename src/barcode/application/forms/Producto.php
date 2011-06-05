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
class Application_Form_Producto extends Zend_Form
{

    public function init()
    {
        $this
            ->setMethod('post')
            ->setAttrib('id', 'frmProducto')
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
            "El nombre del producto debe tener debe tener al menos
            %min% characters. '%value%' no cumple ese requisito",
            Zend_Validate_StringLength::TOO_SHORT
        );
        $e->addValidator($v);
        $this->addElement($e);
        

        // Elemento: Precio
        $e = new Zend_Form_Element_Text('precio');
        $e->setLabel('Precio');
        $e->setRequired(true);
        $v = new Zend_Validate_Between(array('min'=>0.1,'max'=>9999));
        $e->addValidator($v);
        $v = new Zend_Validate_Float(new Zend_Locale('US'));
        $e->addValidator($v);
        $e->setAttrib('maxlength', '7');
        $this->addElement($e);


        //Elemento: Categoria
        $e = new Zend_Form_Element_Select('id_categoria');
        $e->setLabel('Categoria');
        $_cat = new Application_Model_Categoria();
        $values = $_cat->getComboValues();
        $e->addMultiOption(-1, '--- Categoría ---');
        $e->addMultiOptions($values);
        $this->addElement($e);
        $v = new Zend_Validate_InArray(array_keys($values));
        $e->addValidator($v);
        
       
        //Elemento: Fabricante
        $e = new Zend_Form_Element_Select('id_fabricante');
        $e->setLabel('Fabricante');
        $_fab = new Application_Model_Fabricante();
        $values = $_fab->getComboValues();
        $e->addMultiOption(-1, '--- Fabricante ---');
        $e->addMultiOptions($values);
        $this->addElement($e);
        $v = new Zend_Validate_InArray(array_keys($values));
        $e->addValidator($v);

        $this->addElement('submit', 'Enviar');
    }

}

?>
