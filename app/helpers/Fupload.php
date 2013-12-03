<?php

class Fupload {

    public static $element_id = 'fileupload';
    public static $label = 'Upload Files';
    public static $title = 'Select File';

    public function __construct()
    {

    }

    public static function id($id)
    {
        self::$element_id = $id;
        return new self;
    }

    public function title($title)
    {
        self::$title = $title;
        return new self;
    }

    public function label($label)
    {
        self::$label = $label;
        return new self;
    }

    public function make($formdata = null)
    {
        return View::make('fupload.form')
            ->with('label',self::$label)
            ->with('title',self::$title)
            ->with('element_id', self::$element_id )
            ->with('formdata',$formdata);
    }
}
