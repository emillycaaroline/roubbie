<?php
// Definição da classe UserController, responsável por gerenciar as ações relacionadas aos usuários
class UserController
{
    // Função que registra o usuário
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT) // Criptografa a senha
            ];

            User::create($data);
            header('Location: index.php');
        } else {
            // Se não for POST, carrega a página de registro
            include 'views/register.php';
        }
    }

    // Função que lista todos os usuários
    public function list()
    {
        $users = User::all();
        include 'views/list_users.php';
    }

    // Função que edita os dados de um usuário
    public function edit($id)
    {
        session_start();
        
        // Verifica se o usuário está autenticado para editar
        if (isset($_SESSION['user_id'])) {
            $user = User::find($id);

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = [
                    'nome' => $_POST['nome'],
                    'email' => $_POST['email']
                ];

                User::update($id, $data);
                header('Location: index.php?action=list');
            } else {
                include 'views/edit_user.php';
            }
        } else {
            echo 'Você precisa estar logado para editar os dados.';
        }
    }

    // Função que exclui um usuário
    public function delete($id)
    {
        if (is_numeric($id)) {
            User::delete($id); // Supondo que a classe User tenha um método estático delete
        }
    }
}
?>
