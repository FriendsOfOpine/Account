<?php
return function ($arguments, $options) {
    $layout = \Opine\container()->layout;
    return $layout->make(['account/account', 'Account/account'], ['account/account-embedded', 'Account/account-embedded']);
};