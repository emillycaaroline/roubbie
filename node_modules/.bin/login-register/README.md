# Sistema de Login e Cadastro

Bem-vindo ao sistema de **Login e Cadastro**! Este projeto é uma aplicação web simples que permite aos usuários se registrarem e fazerem login usando HTML, CSS, PHP e MySQL. Ideal para quem está aprendendo a integrar front-end com back-end.

## 🚀 Funcionalidades

- **Cadastro de Usuários**: Permite que novos usuários criem uma conta.
- **Login de Usuários**: Usuários existentes podem acessar suas contas.
- **Página Inicial**: Após o login, os usuários são redirecionados para uma página inicial.

## 📁 Estrutura do Projeto

- **`cadastro.html`**: Formulário de registro para novos usuários.
- **`cadastro_process.php`**: Processa o registro e adiciona novos usuários ao banco de dados.
- **`login.php`**: Formulário de login para usuários existentes.
- **`login_process.php`**: Verifica as credenciais e autentica usuários.
- **`inicio.html`**: Página inicial que aparece após o login bem-sucedido.
- **`roubbie_bd.sql`**: Script SQL para criar o banco de dados e tabelas necessárias no MySQL.
- **`vendor/`**: Dependências externas e bibliotecas utilizadas no projeto.
- **`css/`**: Arquivos CSS para estilizar o site.
- **`img/`**: Imagens usadas no site.

## 🛠️ Como Configurar

1. **Importe o Banco de Dados**:
   - Utilize o arquivo `roubbie_bd.sql` para criar o banco de dados no MySQL.

2. **Configure as Credenciais**:
   - Ajuste as configurações de conexão com o banco de dados nos arquivos PHP (`login_process.php`, `cadastro_process.php`, etc.).

3. **Inicie o Projeto**:
   - Abra `cadastro.html` para registrar um novo usuário.
   - Acesse `login.php` para entrar com uma conta existente.
   - Após o login, você será direcionado para `inicio.html`.

## 🚧 Notas

- **Segurança**: O sistema utiliza MD5 para hashing de senhas. Para ambientes de produção, considere usar métodos mais seguros como `password_hash`.
- **Melhorias**: As páginas de erro são básicas. Sinta-se livre para aprimorar a experiência do usuário.
