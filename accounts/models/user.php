<?php
require_once 'models/database.php';

class User
{
    // Função para localizar usuário pelo email
    public static function findByEmail($email)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Função para encontrar usuário pelo id
    public static function find($id)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Função para criar um novo usuário no banco de dados
    public static function create($data)
    {
        // Verifica se o email já está registrado
        if (self::findByEmail($data['email'])) {
            throw new Exception('Este email já está registrado.');
        }

        try {
            $conn = Database::getConnection();
            $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
            $stmt->execute($data);
        } catch (Exception $e) {
            throw new Exception("Erro ao criar o usuário: " . $e->getMessage());
        }
    }

    // Função para obter todos os dados de todos os usuários do banco de dados
    public static function all()
    {
        $conn = Database::getConnection();
        $stmt = $conn->query('SELECT * FROM usuarios');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Função para atualizar os dados do usuário
    public static function update($id, $data)
    {
        try {
            $conn = Database::getConnection();
            $stmt = $conn->prepare('UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id');
            $data['id'] = $id;
            return $stmt->execute($data);
        } catch (Exception $e) {
            throw new Exception("Erro ao atualizar o usuário: " . $e->getMessage());
        }
    }

    // Função que exclui usuário
    public static function delete($id)
    {
        try {
            $conn = Database::getConnection();
            $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = :id"); 
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute(); 
        } catch (Exception $e) {
            throw new Exception("Erro ao excluir o usuário: " . $e->getMessage());
        }
    }
}
?>
