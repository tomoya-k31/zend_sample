<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');

    }
    protected function _initDb()
    {
        $resource = $this->getPluginResource('db');
        $db = Zend_Db::factory($resource->getAdapter(),
                               $resource->getParams());

        Zend_Registry::set('database', $db);
        Zend_Db_Table::setDefaultAdapter($db);
    }  
}

