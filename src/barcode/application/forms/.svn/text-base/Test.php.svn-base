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
class Application_Form_Test extends Zend_Form
{

    public function init()
    {
        $this
            ->setMethod('post')
            ->setAttrib('id', 'frmTest')
            ->setAttrib('enctype', 'multipart/form-data');
        ;

        // Elemento: Nombre
        $e = new Zend_Form_Element_Text('nombre');
        $e->setLabel('Nombre');
        $e->setFilters(array('StringToLower'));
        $this->addElement($e);
        

        // Elemento: activo
        $e = new Zend_Form_Element_Checkbox('activo');
        $e->setLabel('Activo');
        $this->addElement($e);
        
        // Elemento: activo2
        $e = new Zend_Form_Element_Radio('activo2');
        $e->setLabel('Activo2');
        $_cat = new Application_Model_Categoria();
        $values = $_cat->getComboValues();
        $e->setMultiOptions($values);
        $e->setValue(array_rand($values));
        $v = new Zend_Validate_InArray(array_keys($values));
        $this->addElement($e);

        $e = new Zend_Form_Element_File('imagen');
        $e->setLabel('Upload an image:');
        $e->setDestination(APPLICATION_PATH . '/../public/uploads/');
        $f = new Zend_Filter_File_Rename(array('target'=>'123.jpg'));// Renombrar archivo
        $e->addFilter($f);
        $e->addValidator('Count', false, 1); // Solo 1 archivo
        $e->addValidator('Size', false, 102400); // limite de 100K
        $e->addValidator('Extension', false, 'jpg,png,gif'); // solo JPEG, PNG, and GIFs
        $this->addElement($e);
       
        $this->addElement('submit', 'Enviar');
    }

}

?>
