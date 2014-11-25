<?php
namespace Foo\Account;

class View {
    private $layout;

    public function __construct ($layout) {
        $this->layout = $layout;
    }

    public function account () {
        echo $this->layout->make(['account/account', 'Account/account']);
    }
}