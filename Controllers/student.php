<?php

namespace App\Controllers;

class Student extends BaseController
{
    public function show_input()
    {
        return view('v_show_input');
    }
    public function show_value()
    {
        $data['name_title'] = $this->request->getPost('name_title');
        $data['age']= $this->request->getPost('age');
        $data['phoneNB']= $this->request->getPost('phoneNB');
        $data['firstname']= $this->request->getPost('firstname');
        $data['lastname']= $this->request->getPost('lastname');
        $data['dob']= $this->request->getPost('dob');
        $data['email']= $this->request->getPost('email');
        $data['sex']= $this->request->getPost('sex');
        $data['cluster']= $this->request->getPost('cluster');
        $data['code']= $this->request->getPost('code');
        $data['province']= $this->request->getPost('province');
        $data['district']= $this->request->getPost('district');
        $data['check']= $this->request->getPost('check');

        $file = $this->request->getFile('image');
        if($file->isValid()){
            $image_name=$file->getRandomName();
            $file->move('./picture',$image_name);
        }
        $data['image']=$image_name;

        $file = $this->request->getFile('file');
        if($file->isValid()){
            $file_name=$file->getRandomName();
            $file->move('./file',$file_name);
        }
        $data['file']=$file_name;

        return view('v_show_value',$data);
    }
}