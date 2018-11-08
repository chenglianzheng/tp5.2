<?php
namespace app\index\controller;

class Index
{
    public $ins='helllo';
    
    public function index()
    {
        \App::bindTo('IndexController','app\index\controller\Index');
        halt(\App::make('IndexController'));
        
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
