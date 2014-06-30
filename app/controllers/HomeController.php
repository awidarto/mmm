<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function getIndex()
    {

    }

    public function getFeed()
    {
        $feed = Feed::where('shareto','public')
                    ->orWhere('shareto',Auth::user()->email)
                    ->orderBy('createdDate')
                    ->take(20)
                    ->get()->toArray();
        return View::make('tables.feed')->with('feed',$feed);
    }

    public function postFeed()
    {

    }

	public function showWelcome()
	{
		return View::make('hello');
	}

    public function getYml(){
        Yaml::setFile('form.yml');

        $yml = Yaml::parsing();

        print_r($yml);
    }

}