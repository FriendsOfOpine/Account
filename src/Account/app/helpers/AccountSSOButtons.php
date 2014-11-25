<?php
namespace Helper\Account;

class AccountSSOButtons {
    private $config = [];
    private $layout;

    public function __construct (Array $config, $layout) {
        $this->config = $config;
        $this->layout = $layout;
    }

    public function render (Array $arguments, Array $options) {
        return $this->layout->
            app(['account/socialbuttons', 'Account/socialbuttons'])->
            data('socialbuttons', $this->config)->
            layout(['account/socialbuttons', 'Account/socialbuttons'])->
            render();
    }
}