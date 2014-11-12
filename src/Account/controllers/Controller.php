<?php
namespace Foo\Account;

class Controller {
    private $service;
    private $topic;
    private $model;
    private $view;

    public function __construct ($service, $topic, $model, $view) {
        $this->service = $service;
        $this->topic = $topic;
        $this->model = $model;
        $this->view = $view;
    }
}