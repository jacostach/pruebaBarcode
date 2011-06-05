<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    public function _initView(){
        $docTypeHelper = new Zend_View_Helper_Doctype();
        $docTypeHelper->doctype('XHTML1_STRICT');
        $this->bootstrap('layout');
        $layout = $this->getResource('layout');
        $view = $layout->getView();
        $view->headTitle('Sistema Barcode')->headTitle('v1.0')->setSeparator(' - ');
        $view->headLink()->prependStylesheet('/css/style.css');
        $view->headScript()->appendFile('/js/global.js');
        $view->headMeta()->appendHttpEquiv('Content-Type','text/html; charset=UTF-8');
        $view->headMeta()->appendHttpEquiv('Content-Language', 'en-US');
    }

}

