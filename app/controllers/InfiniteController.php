<?php

class InfiniteController extends AdminController(){

    public function __construct(){
        return parent::__construct();
    }

    public function getIndex()
    {
        return View::make('tables.feed')->with('feed',$feed);
    }

}