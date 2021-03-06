<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RolModel;

class Home extends BaseController
{

    public function redireccionar() 
    {
        if(empty($_POST)){
            $valor=0;
        }else{
            $valor = $_POST['opcion'];
        }
        
        $rolModel = new RolModel();
        $data['roles'] = $rolModel->findAll();
        $userModel = new UserModel();
        $data['usuarioInfo'] = $userModel->obtenerUsuarios();
        
        switch($valor) {
            case 1: return view('usuarios/altaUsuarios', $data); break;
            case 2: return view('usuarios/usuarios', $data); break;
            case 3: return view('usuarios/usuarios', $data); break;
            case 4: return view('usuarios/usuarios', $data); break;
            default: return redirect()->to(base_url());; break;
        }
    
    
    }


    public function index()
    {
        $userModel = new UserModel();
        $data['usuarioInfo'] = $userModel->obtenerUsuarios();

        return view('usuarios/homeAdministrador');
    }
    public function eliminar($id)
    {


        $userModel = new UserModel();
        $userModel->delete($id);

        return redirect()->back();
    }

    public function agregar()
    {
        $rolModel = new RolModel();
        $data['roles'] = $rolModel->findAll();
        return view('usuarios/altaUsuarios', $data);
    }
    public function guardar()
    {

        $validacion = $this->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'DNI' => 'required|is_unique[usuarios.DNI]',
            'email' => 'required|is_unique[usuarios.email]',
            'id_rol' => 'required',
            'fecha_de_nacimiento'=> 'required|valid_date',
        ]);

        if ($validacion) {

            $userModel = new UserModel();
            $userModel->save($_POST);

            session()->setFlashdata('mensajeLoad', 'El usuario se creo con exito');
            return redirect()->to(base_url());
        } else {

            $error = $this->validator->listErrors();
            session()->setFlashdata('mensaje', $error);

            return redirect()->to(base_url('home/agregar'))->withInput();
        }
    }

    public function guardarModificaciones()
    {
        $userModel = new UserModel();
        $datos['datos'] = $userModel->find($_POST['id']);

        $validacion = $this->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'DNI' => 'required|is_unique[usuarios.{id}]',
            'email' => 'required|is_unique[usuarios.{id}]',
            'id_rol' => 'required',
            'fecha_de_nacimiento'=> 'required|valid_date',
        ]);



        if ($validacion) {

            $userModel->update($_POST['id'], $_POST);

            session()->setFlashdata('mensajeLoad', 'Los datos se guardaron con exito');
            return redirect()->to(base_url());
        } else {

            $error = $this->validator->listErrors();
            session()->setFlashdata('mensaje', $error);

            return redirect()->back()->withInput();
        }
    }
    public function editar($id)
    {
        $userModel = new UserModel();
        $data['usuario'] = $userModel->obtenerUsuario($id);
        $rolModel = new RolModel();
        $data['roles'] = $rolModel->findAll();

        return view('usuarios/modificacionUsuarios', $data);
    }
public function buscarDNI()
    {
        $userModel = new UserModel();
                $data['usuarioInfo'] = $userModel->obtenerUsuarioDNI($_POST['DNI']);
                if(empty($data['usuarioInfo'])){

                    $rolModel = new RolModel();
                    $data['roles'] = $rolModel->findAll();
                    $userModel = new UserModel();
                    $data['usuarioInfo'] = $userModel->obtenerUsuarios();

                    session()->setFlashdata('mensajeError', 'No se encontraron resultados');
                    return view('usuarios/usuarios',$data);

                }else{

                    return view('usuarios/usuarios', $data);
                }
    }
    public function cargarTabla(){
        $userModel = new UserModel();
        return json_encode($userModel->obtenerDatosParaTabla());
    }
}
