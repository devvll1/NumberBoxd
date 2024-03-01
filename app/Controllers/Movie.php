<?php

namespace App\Controllers;

class Movie extends BaseController
{
    public function list()
    {
        // Show all movies in a table from the database tbl_movies
        $movieModel = new \App\Models\MovieModel(); // Assuming you have a MovieModel
        $data['movies'] = $movieModel->findAll();

        // Return the list of movies page
        return view('movie/index', $data); // Create movie/index view
    }

    public function view($id) {
        // Select one movie to view its details
        $movieModel = new \App\Models\MovieModel();
        $data['movie'] = $movieModel->find($id);

        // Return movie view page with movie data
        return view('movie/view', $data); // Create movie/view view
    }

    public function add()
    {
        $data = array();
        helper(['form']);
    
        // When the submit button is clicked
        if ($this->request->getMethod() == 'post') {
            $post = $this->request->getPost(['moviename', 'rating', 'review', 'datelog']);
    
            // Provide validation for every text field and image
            $rules = [
                'moviename' => ['label' => 'movie name', 'rules' => 'required'],
                'rating'    => ['label' => 'rating', 'rules' => 'required|numeric'],
                'review'    => ['label' => 'review', 'rules' => 'required'],
                'datelog'   => ['label' => 'date logged', 'rules' => 'required|valid_date'],
                'image'     => [
                    'label' => 'image',
                    'rules' => 'uploaded[image]|max_size[image,10000]|is_image[image]'
                ]
            ];
    
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                // Image upload handling
                $image = $this->request->getFile('image');
                $newName = $image->getRandomName(); // Generates a unique name
    
                // Move the uploaded image to the desired directory
                $image->move('./path/to/your/upload/directory/', $newName);
    
                // Save movie data and image filename to the database
                $movieModel = new \App\Models\MovieModel(); // Assuming you have a MovieModel
                $movieModel->save([
                    'moviename' => $post['moviename'],
                    'rating'    => $post['rating'],
                    'review'    => $post['review'],
                    'datelog'   => $post['datelog'],
                    'image'     => $newName, // Store the image filename in the database
                ]);
    
                $session = session();
                $session->setFlashdata('success-add-movie', 'Movie Successfully Saved!');
    
                return redirect()->to('/movie/list');
            }
        }
    
        // Return add movie page
        return view('movie/add', $data); // Create movie/add view
    }
    

    // Controller for handling the movie edit form
    public function edit($id)
    {
        // Select one movie from the table
        $movieModel = new \App\Models\MovieModel();
        $data['movie'] = $movieModel->find($id);
    
        helper(['form']);
        // When the save button is clicked
        if ($this->request->getMethod() == 'post') {
            $post = $this->request->getPost(['moviename', 'rating', 'review', 'datelog']);
    
            // Provide validation for every text field and image
            $rules = [
                'moviename' => ['label' => 'movie name', 'rules' => 'required'],
                'rating'    => ['label' => 'rating', 'rules' => 'required|numeric'],
                'review'    => ['label' => 'review', 'rules' => 'required'],
                'datelog'   => ['label' => 'date logged', 'rules' => 'required|valid_date'],
                'new_image' => [
                    'label' => 'new image',
                    'rules' => 'max_size[new_image,10000]|is_image[new_image]'
                ]
            ];
    
            if (! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                // Image upload handling
                $newImage = $this->request->getFile('new_image');
                if ($newImage->isValid() && ! $newImage->hasMoved()) {
                    // If a new image is uploaded, move it to the desired directory
                    $newImageName = $newImage->getRandomName();
                    $newImage->move('./path/to/your/upload/directory/', $newImageName);
    
                    // Remove the old image file if it exists
                    if (! empty($data['movie']->image)) {
                        unlink('./path/to/your/upload/directory/' . $data['movie']->image);
                    }
    
                    // Update movie data and image filename in the database
                    $movieModel->update($id, [
                        'moviename' => $post['moviename'],
                        'rating'    => $post['rating'],
                        'review'    => $post['review'],
                        'datelog'   => $post['datelog'],
                        'image'     => $newImageName
                    ]);
                } else {
                    // If no new image is uploaded, update movie data without changing the image
                    $movieModel->update($id, $post);
                }
    
                $session = session();
                $session->setFlashdata('success-update-movie', 'Movie Successfully Updated!');
    
                return redirect()->to('/movie/list');
            }
        }
    
        // Return the movie edit page with data
        return view('movie/edit', $data); // Create movie/edit view
    }
            

    public function delete($id) {
        // Select one movie from the table
        $movieModel = new \App\Models\MovieModel();
        $data['movie'] = $movieModel->find($id);

        // When the delete button is clicked
        if ($this->request->getMethod() == 'post') {
            $movieModel->delete($id);

            $session = session();
            $session->setFlashdata('success-delete-movie', 'Movie Successfully Deleted!');

            return redirect()->to('/movie/list');
        }

        // Return the delete page with movie data
        return view('movie/delete', $data); // Create movie/delete view
    }
}
