<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function html01()
    {
        return view('html01');
    }
    public function html02()
    {
        return view('html02');
    }
    public function html03()
    {
        return view('html03');
    }
    public function html04()
    {
        return view('html04');
    }
    public function html05()
    {
        return view('html05');
    }
    public function form01()
    {
        return view('html-workshop/form01');
    }
    public function form02()
    {
        return view('html-workshop/form02');
    }
    public function form03()
    {
        return view('html-workshop/form03');
    }
    public function form04()
    {
        return view('html-workshop/form04');
    }
    public function form05()
    {
        return view('html-workshop/form05');
    }
    public function form06()
    {
        return view('html-workshop/form06');
    }
    public function css01()
    {
        return view('css-workshop/css01');
    }
    public function css02()
    {
        return view('css-workshop/css02');
    }
    public function css03()
    {
        return view('css-workshop/css03');
    }
    public function php01()
    {
        return view('php01-workshop/php01');
    }
    public function php02()
    {
        return view('php01-workshop/php02');
    }
    public function php03()
    {
        return view('php01-workshop/php03');
    }
    public function php04()
    {
        return view('php01-workshop/php04');
    }
    public function js01()
    {
        return view('js01-workshop/js01');
    }
    public function js02()
    {
        return view('js01-workshop/js02');
    }
    public function js03()
    {
        return view('js01-workshop/js03');
    }
    public function js04()
    {
        return view('js01-workshop/js04');
    }
    public function jQuery01()
    {
        return view('jQuery-workshop/jQuery01');
    }
    public function jQuery02()
    {
        return view('jQuery-workshop/jQuery02');
    }
    public function jQuery03()
    {
        return view('jQuery-workshop/jQuery03');
    }
    public function jQuery04()
    {
        return view('jQuery-workshop/jQuery04');
    }
    public function jQuery05()
    {
        return view('jQuery-workshop/jQuery05');
    }
    public function jQuery06()
    {
        return view('jQuery-workshop/jQuery06');
    }
    public function bootstrap01()
    {
        return view('bootstrap-workshop/bootstrap01-02');
    }
}