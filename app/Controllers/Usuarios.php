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
            $nomeUsuario = esc($usuario->nome);
            
            $data[] = [
                'imagem' => $usuario->imagem,
                'nome' => anchor("usuarios/exibir/$usuario->id", esc($usuario->nome), 'title="Exibir usuário ' .$nomeUsuario.'"'),
                'email' => esc($usuario->email),
                'ativo' => ($usuario->ativo == true ? '<span class="text-success"><i class="ti-check-box"></i> Ativo</span>' : '<span class="text-warning"><i class="ti-close"></i> Inativo</span>'),
            ];
        }

        $retorno = [
            'data' => $data,
        ];
        
        return $this->response->setJSON($retorno);


    }

    public function exibir(int $id = null)
    {

        $usuario = $this->buscaUsuarioOu404($id);

        $data = [
            'titulo' => "Detalhes do usuário ". esc($usuario->nome),
            'usuario' => $usuario,
        ];

        return view('Usuarios/exibir', $data);

    }

    /**
     * Método que recupera o usuário
     * 
     * @param integer $id
     * @return Exceptions|object     * 
     */
    private function buscaUsuarioOu404(int $id = null)
    {
        if(!$id || !$usuario = $this->UsuarioModel->withDeleted(true)->find($id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o usuário $id");

        }

        return $usuario;
    }
}
