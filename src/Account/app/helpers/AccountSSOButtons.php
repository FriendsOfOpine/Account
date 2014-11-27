<?php
namespace Helper\Account;

use Opine\Interfaces\Layout as LayoutInterface;

class AccountSSOButtons {
    private $config = [];
    private $layout;

    public function __construct (Array $config, LayoutInterface $layout) {
        $this->config = $config;
        $this->layout = $layout;
    }

    public function render (Array $arguments, Array $options) {
        $context = [
            'socialbuttons' => $this->config
        ];
        return $this->layout->
            config(['account/socialbuttons', 'Account/socialbuttons'], $context)->
            container(['account/socialbuttons', 'Account/socialbuttons'])->
            render();
    }
}