<?php

namespace App\Controllers;

class User extends BaseController
{
    public function list()
    {
        //Show all users in table from database tbl_users
        $userModel = new \App\Models\UserModel();
        $data['users'] = $userModel->findAll();

        //Return list of users page
        return view('user/index', $data);
    }

    public function view($id) {
        //Select one user to view his/her details
        $userModel = new \App\Models\UserModel();
        $data['user'] = $userModel->find($id);

        //Return user view page with user data
        return view('user/view', $data);

    }

    public function add() {
        $data = array();
        helper(['form']);

        //When submit button is clicked
        if($this->request->getMethod() == 'post') {
            $post = $this->request->getPost(['first_name', 'middle_name', 'last_name', 'age', 'email', 'password']);

            //Provide validation for every text field
            $rules = [
                'first_name' => ['lable' => 'first name', 'rules' => 'required'],
                'last_name' => ['lable' => 'last name', 'rules' => 'required'],
                'age' =>  ['lable' => 'age', 'rules' => 'required|numeric'],
                'email' =>  ['lable' => 'email', 'rules' => 'required|valid_email|is_unique[tbl_users.email]'],
                'password' => ['lable' => 'password', 'rules' => 'required'],
                'confirm_password' => ['lable' => ' confirm password', 'rules' => 'required_with[password]|matches[password]']
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator;
            } else {
                //Save user to database
                $post['password'] = sha1($post['password']);
            
                $userModel = new \App\Models\UserModel();
                $userModel->save($post);

                $session = session();
                $session ->setFlashdata('success-add-user', 'User Successfully Saved!');

                return redirect()->to('/user/add', );
            }

        }

        //Return add user page
        return view('user/add', $data); 
    }

    public function edit($id) {
        //Select one user from table
        $userModel = new \App\Models\UserModel();
        $data ['user'] = $userModel->find($id);

        helper(['form']);

        //When button is save is clicked
        if ($this->request->getMethod() == 'post') {
            $post = $this->request->getPost(['first_name', 'middle_name', 'last_name', 'age', 'email']);

            //Provide validation for every text field
            $rules = [
                'first_name' => ['lable' => 'first name', 'rules' => 'required'],
                'last_name' => ['lable' => 'last name', 'rules' => 'required'],
                'age' =>  ['lable' => 'age', 'rules' => 'required|numeric'],
                'email' =>  ['lable' => 'email', 'rules' => 'required|valid_email|is_unique[tbl_users.email]'],
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator;
            } else {
                //Update user in database and return user list page
                $userModel->update($id, $post);

                $session = session();
                $session->setFlashdata('success-update-user', 'User Successfully Updated!');

                return redirect()->to('/user/list');
            }
        }

        //Return user edit page with data
        return view('user/edit', $data);
    }

    public function delete($id) {
        //Select one user from table
        $userModel = new \App\Models\UserModel();
        $data['user'] = $userModel->find($id);

        //When delete button is clicked
        if ($this->request->getMethod() == 'post') {
            $userModel->delete($id);

            $session = session();
            $session->setFlashdata('success-delete-user', 'User Sucessfully Deleted!');

            return redirect()->to('/user/list');
        }

        //Return delete page with user data
        return view('user/delete', $data);
    }
}