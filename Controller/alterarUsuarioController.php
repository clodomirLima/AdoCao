<?php
require_once 'DAO/usuarioDAO.php';
require_once 'DTO/usuarioDTO.php';

$idUsuario = $_POST["idUsuario"];
$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$celular = $_POST["celular"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$usuarioDTO = new UsuarioDTO();
$usuarioDTO->setNome($nome);
$usuarioDTO->setEndereco($endereco);
$usuarioDTO->setCidade($cidade);
$usuarioDTO->setCelular($celular);
$usuarioDTO->setEmail($email);
$usuarioDTO->setUsuario($usuario);
$usuarioDTO->setSenha($senha);
$usuarioDTO->setIdUsuario($idUsuario);

$usuarioDAO = new UsuarioDAO();
$status = $usuarioDAO->alterarUsuario($usuarioDTO);
if(!empty($status)){
    echo "<script>";
    echo "alert('Atualizado!')";
    echo "</script>";
    
    echo "<script>";
    echo "window.location='../View/index.php'";
    echo "</script>";
}