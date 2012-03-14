<?php
require_once 'Zend/Db.php';

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // BootstrapにDB定義済み
        $db = Zend_Registry::get("database");
        //$db = Zend_Db::factory($resource->getAdapter(),$resource->getParams());
        
        //$albums = new Test_Db_Sample();
        //$this->view->albums = $albums->fetchAll();

        $select = $db->select();
        $culumn = array('id', 'artist', 'title');
        $select->from('zend_test', $culumn);
        //echo $select->__toString();
        $result = $db->fetchAll($select->__toString());
        //var_dump($result);
        $this->view->result = $result;
    }

    public function addAction()
    {
        // action body
        $form = new Application_Form_InsertAlbum();
        //$form->id->setValue($form->getValue('id'));
        $form->submit->setLabel('Add');
        $this->view->form = $form;

        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
                $artist = $form->getValue('artist');
                $title = $form->getValue('title');
                $albums = new Application_Model_Test_Sample();
                $albums->addAlbum($artist,  $title);

                $this->_helper->redirector('index');
            } else {
                $form->populate($formData);
            }
        }
    }

    public function editAction()
    {
        $form = new Application_Form_InsertAlbum();
        $form->submit->setLabel('Save');
        $this->view->form = $form;
        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
                $id = (int)$form->getValue('id');
                $artist = $form->getValue('artist');
                $title = $form->getValue('title');
                $albums = new Application_Model_Test_Sample();
                $albums->updateAlbum($id,  $artist,  $title);
                $this->_helper->redirector('index');
            } else {
                $form->populate($formData);
            }
        } else {
            $id = $this->_getParam('id',  0);
            if ($id > 0) {
                $albums = new Application_Model_Test_Sample();
                $form->populate($albums->getAlbum($id));
            }
        }
    }

    public function deleteAction()
    {
        if ($this->getRequest()->isPost()) {
            $del = $this->getRequest()->getPost('del');
            if ($del == 'Yes') {
                $id = $this->getRequest()->getPost('id');
                $albums = new Application_Model_Test_Sample();
                $albums->deleteAlbum($id);
            }
            $this->_helper->redirector('index');
        } else {
            $id = $this->_getParam('id',  0);
            $albums = new Application_Model_Test_Sample();
            $this->view->album = $albums->getAlbum($id);
        }
    }


}







