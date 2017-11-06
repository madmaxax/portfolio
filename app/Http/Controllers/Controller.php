<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function landing() 
    {
    	return view('extends.landing');
	}
	public function blogOverview() 
	{
    	return view('extends.blog');
	}
	public function viewBlogPost($url) 
	{
		$myBlogPost = ['webdesign_fehler', 'kreativ', 'konkurrenz', 'ideen'];
		if(in_array($url, $myBlogPost)) {
			$file = 'extends.blogPosts.' . $url;
	        return view($file);
	    } else {
	    	return view('extends.404');
	    }
	}
	public function kontakt() 
	{
    	return view('extends.contactForm');
	}
	public function sendMail(\Illuminate\Http\Request $request, \Illuminate\Mail\Mailer $mailer) 
	{
		$mailer
			->to('maximilian.muza@gmx.de')
			->send(new \App\Mail\MyMail($request->input('name'), $request->input('mail'), $request->input('nachricht')));
		return redirect()->back();
	}
}
