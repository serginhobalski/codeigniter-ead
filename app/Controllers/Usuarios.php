<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Usuarios extends BaseController
{
    private $UsuarioModel;

    public function __construct()
    {
        $this->UsuarioModel = new \App\Models\UsuarioModel();
    }

    public function index()
    {
        $data = [
            'titulo' => 'Usuários',
        ];

        return view('Usuarios/index', $data);
    }

    public function recuperaUsuarios()
    {


        if(!$this->request->isAJAX()) {
            return redirect()->back();
        }
        
        $atributos = [
            'id',
            'nome',
            'email',
            'ativo',
            'imagem',
        ];

        $usuarios = $this->UsuarioModel->select($atributos)
                                        ->findAll();

        $data = [];

        foreach($usuarios as $usuario){
            $data[] = [
                'imagem' => $usuario->imagem,
                'nome' => esc($usuario->nome),
                'email' => esc($usuario->email),
                'ativo' => ($usuario->ativo == true ? '<span class="text-success">Ativo</span>' : '<span class="text-warning">Inativo</span>'),
            ];
        }

        $retorno = [
            'data' => $data,
        ];
        
        return $this->response->setJSON($retorno);


    }
}
