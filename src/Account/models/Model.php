<?php
namespace Foo\Account;

class Model {
    private $person;

    public function __construct ($post, $person) {
        $this->post = $post;
        $this->person = $person;
    }

    public function login ($context) {
        $document = $this->post->{$context['formMarker']};
        if ($document === false || empty($document)) {
            throw new Exception('Document not found in post');
        }
        $response = $this->person->login($document['email'], $document['password']);
        if ($response === true) {
            $this->post->statusSaved();
            $user = $this->person->current();
            $context['formObject']->after = 'refresh';
            $this->post->responseFieldsSet([
                'api_token' => (string)$user['api_token']
            ]);
            return;
        }
        $this->post->errorFieldSet($context['formMarker'], 'Credentials do not match.');
    }

    public function account ($context) {
		$document = $this->post->{$context['formMarker']};
        if ($document === false || empty($document)) {
            throw new Exception('Document not found in post');
        }
        $response = $this->person->checkByEmail($document['email']);
        if ($response === true) {
            $this->post->errorFieldSet($context['formMarker'], 'Account already exists.');
            return;
        }
        $this->post->statusSaved();
        $response = $this->person->create([
            'first_name' => $document['first_name'],
            'last_name'  => $document['last_name'],
            'email'      => $document['email'],
            'password'   => $document['password'],
        ]);
        if ($response === false) {
            $this->post->errorFieldSet($context['formMarker'], 'Error creating account.');
            return;
        }
        $user = $this->person->current();
        $context['formObject']->after = 'refresh';
        $this->post->responseFieldsSet([
            'api_token' => (string)$user['api_token']
        ]);
    }

    public function forgot ($context) {
        $document = $this->post->{$context['formMarker']};
        if ($document === false || empty($document)) {
            throw new Exception('Document not found in post');
        }
        $response = $this->person->checkByEmail($document['email']);
        if ($response === false) {
            $this->post->errorFieldSet($context['formMarker'], 'No account found.');
            return;
        }
        $this->post->statusSaved();
        //$user = $this->person->forgot($document);
        $context['formObject']->after = 'notice';
        $context['formObject']->notice = 'Check your email.';
    }
}