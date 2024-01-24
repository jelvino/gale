<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\opo;

class Home extends BaseController
{
    public function index()
    {
        if (session()->get('id')>0) {

            $putus = new opo ();
            $data['pacaran']=  $putus->rayzhencinta('user');
            $data['page']= 'sales';
            return view('index',$data);
        }else{
            return redirect()->to('home/login');
        }
    }

    public function login()
    {
        return view('ucup');
    }
    public function hapus()
    {
      $putus = new opo ();
      $where = array ('');
    }
    public function aksi_login()
    {
        $velix=$this->request->getPost('jelvino');
        $ikbal=$this->request->getPost('p');

        $where=array(
            'email'=>$velix,
            'Password'=>$ikbal
        );
        $sekolah = new opo();
        $cek=$sekolah->getWhere('user',$where);
        if ($cek>0){
            session()->set('id',$cek->id_pelanggan);
             session()->set('id',$cek->Password);
             session()->set('id',$cek->alamat);
             session()->set('id',$cek->nomorhp);
             session()->set('id',$cek->email);
             return redirect()->to('home');
         }else{
             return redirect()->to('home/login');


        }
    }
     public function logout()
    {
      session()->destroy();
      return redirect()->to('home/login');
    }


    public function pelanggan()
    {
     if (session()->get('id')>0) {
        $data['page']= 'pelanggan';
        return view('index',$data);
         }else{
            return redirect()->to('home/login');
        }
    }
    public function ph()
    {
    if (session()->get('id')>0) {
         $putus = new opo ();
         $data['pacaran']=  $putus->rayzhencinta('ph');
        $data['page']= 'ph';
        return view('index',$data);
         }else{
            return redirect()->to('home/login');
        }
    }
    public function bp()
    {
     if (session()->get('id')>0) {
         $putus = new opo ();
         $data['pacaran']=  $putus->rayzhencinta('bp');
        $data['page']= 'bp';
        return view('index',$data);
     }else{
    return redirect()->to('home/login');
    }
}
    public function ko()
    {
        if (session()->get('id')>0) {
        $data['page']= 'ko';
        return view('index',$data);
        }else{
        return redirect()->to('home/login');
      }
    }
    public function uja()
    {
        if (session()->get('id')>0) {
        $data['page']= 'uja';
        return view('index',$data);
         }else{
        return redirect()->to('home/login');
    }
    }  
     public function jelvino()
    {
        $data['page']= 'jelvino';
        return view('index',$data);
    }
      public function jonathan()
    {
        $data['page']= 'jonathan';
        return view('index',$data);
    }
      public function frans()
    {
        $data['page']= 'frans';
        return view('index',$data);
    }
      public function dillon()
    {
        $data['page']= 'dillon';
        return view('index',$data);
    }
      public function octa()
    {
        $data['page']= 'octa';
        return view('index',$data);
    }
      public function ucup()
    {
    
        return view('ucup');
    }
     public function norman()
    {
        $data['page']= 'norman';
        return view('index',$data);
    }
      public function kelsey()
    {
        $data['page']= '';
        return view('index',$data);
    }
      public function jilian()
    {
        $data['page']= '';
        return view('index',$data);
    }
      public function ikbal()
    {
        $data['page']= '';
        return view('index',$data);
    }
      public function joshanta()
    {
        $data['page']= '';
        return view('index',$data);
    }
}
