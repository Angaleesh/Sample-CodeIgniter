<?php

namespace App\Controllers;
use App\Models\userModel;
class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function login()
    {   
        $session=session();
        $mod=new userModel();
        $data=[
            'username'=>$this->request->getPost('username'),
            'password'=>$this->request->getPost('pwd'),
            'u_type'=>$this->request->getPost('u_type')
        ];
        $mod->where('username',$data['username']);
        $mod->where('u_type',$data['u_type']);
        $usr=$mod->first();
        if($usr){
            $verify=$data['password']==$usr['password'];
            if($verify){
                $data['logged_in']=true;
                $session->set($data);
                return redirect()->to('/dashboard');
            }
            else{
                $session->setFlashdata('msg','Invalid password');
                return redirect()->to('/');
            }
        }
        else{
            $session->setFlashdata('msg','Username Doesnt Exist');
            return redirect()->to('/');
        }
        // return redirect()->to('/dashboard');
    }

    public function logout ()
    {
        $session=session();
        $session->destroy();
        return redirect()->to('/');
    }
    public function register() {
        return view('registration');
    }
    public function save_new() {
        $session=session();
        $mod=new userModel();
        $data=[
            'username'=>$this->request->getPost('username'),
            'password'=>$this->request->getPost('pwd'),
            'u_type'=>2
        ];
        $cpwd=$this->request->getPost('cpwd');
        $usr=$mod->where('username',$data['username'])->first();
        if(!$usr){
            $verify=$data['password']===$cpwd;
            if($verify){
                $qry=$mod->save($data);
                if($qry){
                    return view('/login');
                }
                else{
                    $session->setFlashdata('msg','Not inserted');
                    return redirect()->to('/reg');
                }
            }
            else{
                $session->setFlashdata('msg','Password and Confirm Password Does not match '.$verify);
                return redirect()->to('/reg');
            }
        }
        else{
            $session->setFlashdata('msg','username already exists');
            return redirect()->to('/reg');
        }
    }
}
