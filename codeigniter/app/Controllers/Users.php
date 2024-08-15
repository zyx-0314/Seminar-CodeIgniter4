<?php
namespace App\Controllers;

class Users extends BaseController{

    public function index(){
        // echo 'Welcome to CodeIgniter!';
        $data['title'] = 'Viewing Users List';
        $data['page_title'] = 'Viewing Users List';
        // $data['users'] = array(
        //     'id' => '1',
        //     'username' => 'admin',
        //     'password' => 'password',
        //     'fullname' => 'Joseph Calleja',
        //     'email' => 'admin@training.com'
        // );

        // Create an instance of your model
        $user_model = new \App\Models\Users_model();
        // Creating a shared instance of the model
        // $user_model = model('Users_model');

        // Use the the built-in query builder of the model class
        $data['users'] = $user_model->findAll();

        return view('userslist_view', $data);
    }

    public function add(){
        $data['title'] = 'Add New User';
        $data['page_title'] = 'Add New User';

        if($this->request->getMethod() == 'POST'){
            // Capture all data entered into the form
            $post_data = $this->request->getPost(['username', 'password', 'fullname', 'email']);

            $user_model = new \App\Models\Users_model();
            $user_model->insert($post_data);
            return redirect()->to('users/index');
        }

        return view('adduser_view', $data);
    }

    public function view($id){
        $data['title'] = 'Add New User';
        $data['page_title'] = 'Add New User';

        $user_model = new \App\Models\Users_model();
        $data['user'] = $user_model->find($id);

        return view('user_view', $data);
    }

    public function edit($id){
        $data['title'] = 'Add New User';
        $data['page_title'] = 'Add New User';

        if($this->request->getMethod() == 'POST'){
            $post_data = $this->request->getPost(['username', 'password', 'fullname', 'email']);

            $user_model = new \App\Models\Users_model();
            $user_model->update($id, $post_data);
            return redirect()->to('users/index');
        }

        $user_model = new \App\Models\Users_model();
        $data['user'] = $user_model->find($id);

        return view('edit_view', $data);
    }

    public function delete($id){
        $user_model = new \App\Models\Users_model();
        $user_model->delete($id);

        return redirect()->to('users/index');
    }

    // public function test($var1 = false, $var2 = false){
    //     echo 'This is another function.<br>';
    //     echo 'Value of parameter 1: '.$var1.'<br>';
    //     echo 'Value of parameter 2: '.$var2.'<br>';
    // }
}
?>