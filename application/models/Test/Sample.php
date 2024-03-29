<?php
class Application_Model_Test_Sample extends Zend_Db_Table_Abstract
{
    protected $_name = 'zend_test';
    protected $_primary = 'id';

    public function getAlbum($id)
    {
        $id = (int)$id;
        $row = $this->fetchRow('id = ' . $id);
        if (!$row) {
            throw new Exception("Count not find row $id");
        }
        return $row->toArray();
    }

    public function addAlbum($artist,  $title)
    {
        $data = array(
            'artist' => $artist, 
            'title' => $title, 
        );
        $this->insert($data);
    }

    public function updateAlbum($id,  $artist,  $title)
    {
        $data = array(
            'artist' => $artist, 
            'title' => $title, 
        );
        $this->update($data,  'id = '. (int)$id);
    }

    public function deleteAlbum($id)
    {
        $this->delete('id =' . (int)$id);
    }

}
