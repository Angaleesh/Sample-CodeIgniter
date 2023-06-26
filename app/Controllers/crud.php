<?php
namespace App\Controllers;
use App\Models\newModel;
use CodeIgniter\Controller;

class crud extends Controller{
    // public $mod;
    public function __construct()
    {
        // $mod=new newModel();
        helper('url');
    }
    public function index()
    {
         
        $mod=new newModel();
        $data=[
            'users' => $mod->orderBy('id','ASC')->paginate(5),
            'pager' => $mod->pager
        ];
        // $data['users']=$mod->orderBy('id','ASC')->findAll();
        return view('list',$data);
    }
    public function create()
    {
        return view('userForm');
    }
    public function save_new()
    {
        $mod=new newModel();
        $data=[
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'address' => $this->request->getPost('address'),
        ];
        $mod->set($data);
        $mod->insert();
        return redirect()->to('/dashboard');
    }
    public function edit($id)
    {
        $mod=new newModel();
        $data['users']=$mod->where('id',$id)->first();
        return view('edit_form',$data);
    }
    public function delete($id)
    {
        $mod=new newModel();
        $mod->where('id',$id)->delete();
        $use['users']=$mod->orderBy('id','ASC')->findAll();
        return redirect()->to('/dashboard');
    }
    public function update($id)
    {
        $mod=new newModel();
        $data=[
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'address' => $this->request->getPost('address'),
        ];
        $mod->set($data);
        $mod->where('id',$id);
        $mod->update();
        return redirect()->to('/dashboard');
    }

}


?>