<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 */
class Application_Model_Usuario extends Zend_Db_Table_Abstract {
    protected $_name = 'tbl_usuario';

    public function autenticar(array $values){
        $db = $this->getAdapter();
        $filas = $db->select()
            ->from($this->_name)
            ->where('user = ?', $values['login'])
            ->where('pwd = ?', md5($values['pwd']))
            ->query()->fetchAll();
        $loginValido = count($filas)===1;
        if($loginValido){
            $S = new Zend_Session_Namespace('ventas');
            $S->usuario = $filas[0];
        }
        return $loginValido;
    }
    
    public function unido() {
        $db = $this->getAdapter();
        $sql1 = $db->select()->from($this->_name)->where('id < ?', 4); //1,2,3
        $sql2 = $db->select()->from($this->_name)->where('id > ?', 16);//17,18
        $sql3 = $db->select()->union(array($sql1, $sql2))->order("id DESC");
        return $sql3->query()->fetchAll();
    }


}
