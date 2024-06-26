<?php

namespace Source\App;

use League\Plates\Engine;

class Web
{
    private $view;

public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/web","php");
    }

    public function home ()
    {
        //echo "<h1>Eu sou a Home</h1>";
        echo $this->view->render("home",[]);
    }

    public function about ()
    {
        echo $this->view->render("about",[]);
    }

    public function contact ()
    {
        echo $this->view->render("contact",[]);
    }

    public function products ()
    {
        echo $this->view->render("products",[]);
    }
    public function productsDetails ()
    {
        echo $this->view->render("products-details",[]);
    }

    public function faq ()
    {
        echo $this->view->render("faq",[]);
    }

    public function cart () : void
    {
        echo $this->view->render("cart",[]);
    }

    public function login() : void
    {
        echo $this->view->render("login",[]);
    }
    public function admin() : void
    {
        echo $this->view->render("admin",[]);
    }

    public function error(array $data)
    {
        echo $this->view->render("404",[]);

    }

}