<?php

/**
 * Description of Ejemplo
 *
 * @author Consultoria
 */
class Application_Form_Ejemplo extends Zend_Form {
    
    public function init() {
        
        $this->setAction('/index/form')
                ->setMethod('post')
                ->setAttrib('id', 'frmEjemplo');
        
        // Usuario
        $e = new Zend_Form_Element_Text('usuario');
        $e->setLabel("Usuario");
        $e->setRequired();
        $v = new Zend_Validate_StringLength(array(
            'min' => 5,
            'max' => 10
        ));
        $e->addValidator($v);
        $this->addElement($e);
        
        // Correo
        $e = new Zend_Form_Element_Text('email');
        $e->setLabel("Correo");
        $v = new Zend_Validate_EmailAddress();
        $e->addValidator($v);
        $this->addElement($e);
        
        // Submit
        $e = new Zend_Form_Element_Submit('submit');
        $e->setLabel("Guardar");
        $this->addElement($e);        
    }
    
}

?>
