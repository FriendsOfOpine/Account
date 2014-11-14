<?php
return function ($arguments, $options) {
    $config = \Opine\container()->config;
    $sso = $config->sso;
    if (!is_array($sso)) {
        return '';
    }
    if (!isset($sso['providers']) || !is_array($sso['providers'])) {
        return '';
    }
    $layout = \Opine\container()->layout;
    return $layout->
        app(['account/socialbuttons', 'Account/socialbuttons'])->
        data('socialbuttons', $sso)->
        layout(['account/socialbuttons', 'Account/socialbuttons'])->
        render();
};