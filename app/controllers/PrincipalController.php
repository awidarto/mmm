<?php

class PrincipalController extends AdminController {

    public function __construct()
    {
        parent::__construct();

        $this->controller_name = str_replace('Controller', '', get_class());

        //$this->crumb = new Breadcrumb();
        //$this->crumb->append('Home','left',true);
        //$this->crumb->append(strtolower($this->controller_name));

        $this->model = new Principal();
        //$this->model = DB::collection('documents');

    }

    public function getTest()
    {
        $raw = $this->model->where('docFormat','like','picture')->get();

        print $raw->toJSON();
    }


    public function getIndex()
    {

        $this->heads = array(
            array('Company Name',array('search'=>true,'sort'=>true)),
            array('Address',array('search'=>true,'sort'=>true)),
            array('City',array('search'=>true,'sort'=>true)),
            array('State',array('search'=>true,'sort'=>true)),
            array('ZIP',array('search'=>true,'sort'=>true)),
            array('Created',array('search'=>true,'sort'=>true,'date'=>true)),
            array('Last Update',array('search'=>true,'sort'=>true,'date'=>true)),
        );

        //print $this->model->where('docFormat','picture')->get()->toJSON();
        $this->title = 'Principals';

        return parent::getIndex();

    }

    public function postIndex()
    {

        $this->fields = array(
            array('company',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
            array('address_1',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
            array('city',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
            array('state',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
            array('zipCode',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
            array('createdDate',array('kind'=>'datetime','query'=>'like','pos'=>'both','show'=>true)),
            array('lastUpdate',array('kind'=>'datetime','query'=>'like','pos'=>'both','show'=>true)),
        );

        return parent::postIndex();
    }

    public function postAdd($data = null)
    {

        $this->validator = array(
            'company' => 'required',
            'address_1' => 'required',
        );

        return parent::postAdd($data);
    }

    public function postEdit($id,$data = null)
    {
        $this->validator = array(
            'company' => 'required',
            'address_1' => 'required',
        );

        if($data['pass'] == ''){
            unset($data['pass']);
            unset($data['repass']);
        }else{
            $this->validator['pass'] = 'required|same:repass';
        }

        return parent::postEdit($id,$data);
    }

    public function beforeSave($data)
    {
        return $data;
    }

    public function beforeUpdate($id,$data)
    {
        //print_r($data);
        //print_r($data);

        //exit();

        return $data;
    }

    public function makeActions($data)
    {
        $delete = '<span class="del" id="'.$data['_id'].'" ><i class="icon-trash"></i>Delete</span>';
        $edit = '<a href="'.URL::to('principal/edit/'.$data['_id']).'"><i class="icon-edit"></i>Update</a>';

        $actions = $edit.'<br />'.$delete;
        return $actions;
    }

    public function splitTag($data){
        $tags = explode(',',$data['docTag']);
        if(is_array($tags) && count($tags) > 0 && $data['docTag'] != ''){
            $ts = array();
            foreach($tags as $t){
                $ts[] = '<span class="tag">'.$t.'</span>';
            }

            return implode('', $ts);
        }else{
            return $data['docTag'];
        }
    }

    public function splitShare($data){
        $tags = explode(',',$data['docShare']);
        if(is_array($tags) && count($tags) > 0 && $data['docShare'] != ''){
            $ts = array();
            foreach($tags as $t){
                $ts[] = '<span class="tag">'.$t.'</span>';
            }

            return implode('', $ts);
        }else{
            return $data['docShare'];
        }
    }

    public function namePic($data)
    {
        $name = HTML::link('products/view/'.$data['_id'],$data['productName']);
        if(isset($data['thumbnail_url']) && count($data['thumbnail_url'])){
            $display = HTML::image($data['thumbnail_url'][0].'?'.time(), $data['filename'][0], array('id' => $data['_id']));
            return $display.'<br />'.$name;
        }else{
            return $name;
        }
    }

    public function pics($data)
    {
        $name = HTML::link('products/view/'.$data['_id'],$data['productName']);
        if(isset($data['thumbnail_url']) && count($data['thumbnail_url'])){
            $display = HTML::image($data['thumbnail_url'][0].'?'.time(), $data['filename'][0], array('style'=>'min-width:100px;','id' => $data['_id']));
            return $display.'<br /><span class="img-more" id="'.$data['_id'].'">more images</span>';
        }else{
            return $name;
        }
    }

    public function getViewpics($id)
    {

    }


}
