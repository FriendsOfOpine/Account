<?php
namespace Helper\Account;

class Account {
    private $layout;

    public function __construct ($layout) {
        $this->layout = $layout;
    }

    public function render (Array $arguments=[], Array $options=[]) {
        return $this->layout->make(['account/account', 'Account/account'], ['account/account-embedded', 'Account/account-embedded']);
    }
}