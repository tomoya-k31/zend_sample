<?php

class Application_Form_InsertAlbum extends Zend_Form
{

    public function init()
    {
        $this->setName('album');

        $id = new Zend_Form_Element_Hidden('id');
        //$id->('Int');
        //$this->addElement($id);

        $artist = new Zend_Form_Element_Text('artist');
        $artist->setLabel('Artist')
            ->setRequired(true)
            ->addFilter('StripTags')
            ->addFilter('StringTrim')
            ->addValidator('NotEmpty');

        $title = new Zend_Form_Element_Text('title');
        $title->setLabel('Title')
            ->setRequired(true)
            ->addFilter('StripTags')
            ->addFilter('StringTrim')
            ->addValidator('NotEmpty');

        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setAttrib('id',  'submitbutton');

        $this->addElements(array($id,  $artist,  $title,  $submit));

    }
}

