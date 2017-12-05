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
	public function überMich() 
    {
    	return view('extends.überMich');
	}
	public function leistungen() 
    {
    	return view('extends.leistungen');
	}
	public function impressum() 
    {
    	return view('extends.impressum');
	}
	public function kontakt() 
	{
    	return view('extends.contactForm');
	}
	public function blogOverview() 
	{
    	return view('extends.klassenraum');
	}
	public function konkurrenz() 
    {
    	return view('extends.Klassenraum.konkurrenz');
	}
	public function onlinePräsenz() 
    {
    	return view('extends.Klassenraum.online-präsenz');
	}
	public function potentialInternetseite() 
    {
    	return view('extends.Klassenraum.Online-Präsenz.potential-internetseite');
	}
	public function sozialeMedien() 
    {
    	return view('extends.Klassenraum.Online-Präsenz.soziale-medien');
	}
	public function sendMail(\Illuminate\Http\Request $request, \Illuminate\Mail\Mailer $mailer) 
	{
		$mailer
			->to('maximilian.muza@gmx.de')
			->send(new \App\Mail\MyMail($request->input('name'), $request->input('mail'), $request->input('nachricht')));
		return redirect()->back();
	}
}
