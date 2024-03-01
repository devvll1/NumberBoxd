<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function login()
    {
        $data = array();
        helper(['form']);

        //Login button clicked
        if ($this->request->getMethod() == 'post') {
            //Get value from text fields
            $post = $this->request->getPost(['email', 'password']);

            //Provide validation for text fields
            $rules = [
                'email' => ['label' => 'email', 'rules' => 'required|valid_email'],
                'password' => ['label' => 'password', 'rules' => 'required']
            ];

            if (! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                //Get user by email and password
                $userModel = new \App\Models\UserModel();
                $user = $userModel->where('email', $post['email'])->where('password', sha1($post['password']))->first();

                if(! $user) {
                    $session = session();
                    $session->setFlashdata('invalid', 'Invalid email or password, please try again!');
                } else {
                    $this->setUserSession($user);

                    return redirect()->to('movie/list');
                }
            }
        }

        //Return login page
        return view('login', $data);
    }

    public function setUserSession($user) {
        //Set full name of current user
        $myFullName = "";

        if (empty($user->middle_name)) {
            $myFullName = $user->first_name . ' ' . $user->last_name;
        } else {
            $myFullName = $user->first_name . ' ' . $user->middle_name[0] . '. ' . $user->last_name;
        }

        //Provide variables for every field of user and set session of user
        $data = [
            'myUserId' => $user->user_id,
            'myFirstName' => $user->first_name,
            'myMiddleName' => $user->middle_name,
            'myLastName' => $user->last_name, 
            'myAge' => $user->age,
            'myEmail' => $user->email,
            'myPassword' => $user->password,
            'myFullName' => $myFullName,
            'isLoggedIn' => true
        ];

        session()->set($data);
    }
}