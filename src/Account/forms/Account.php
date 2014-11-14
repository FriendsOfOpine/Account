<?php
/**
 * Account\Form\Account
 *
 * Copyright (c)2013, 2014 Ryan Mahoney, https://github.com/Opine-Org <ryan@virtuecenter.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace Account\Form;

class Account {
    public $storage = [
        'collection'    => 'login_attempts',
        'key'            => '_id'
    ];
    public $after = 'redirect';
    public $redirect = '/Manager';

    function firstnameField() {
        return [
            'name'        => 'first_name',
            'placeholder' => 'First Name',
            'display'     => 'Field\InputText',
            'required'    => true
        ];
    }

    function lastnameField() {
        return [
            'name'        => 'last_name',
            'placeholder' => 'Last Name',
            'display'     => 'Field\InputText',
            'required'    => true
        ];
    }

    function emailField() {
        return [
            'name'        => 'email',
            'placeholder' => 'Email',
            'display'     => 'Field\InputText',
            'required'    => true
        ];
    }

    function passwordField() {
        return [
            'name'        => 'password',
            'placeholder' => 'Password',
            'display'     => 'Field\InputPassword',
            'required'    => true
        ];
    }
}