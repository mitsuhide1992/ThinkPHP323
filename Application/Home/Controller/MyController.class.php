<?php
namespace Home\Controller;
use Think\Controller;

class MyController extends Controller {
    public function myFirstR () { 
        var_dump("this is my first route");
    }
}