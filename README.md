# 💪 Sistema de Gerenciamento de Academia com Laravel

---

## 🚀 Sobre o Projeto

Este sistema foi desenvolvido para gerenciar uma academia de forma simples e eficiente, usando o framework Laravel.  
A ideia central é que o sistema suporte três tipos de usuários:  

- **Aluno:** pode fazer login, visualizar seus treinos personalizados e consultar as aulas disponíveis para se inscrever.  
- **Professor:** pode criar e gerenciar aulas e treinos, ajudando os alunos a alcançarem seus objetivos.  
- **Administrador:** tem controle total sobre o sistema, incluindo o gerenciamento de usuários e permissões.

---

## 🏋️ Funcionalidades Principais

- Sistema de autenticação para alunos, professores e administradores.  
- Visualização e gerenciamento de treinos e aulas.  
- Inscrição dos alunos nas aulas disponíveis.  
- Controle administrativo completo dos usuários.

---

## 🛠️ Estrutura do Projeto

### Migrations criadas:

- `users`: tabela de usuários, com campo `role` para diferenciar alunos, professores e administradores.  
- `aulas`: cadastro das aulas oferecidas.  
- `treinos`: registro dos treinos disponibilizados.  
- `exercicios`: lista de exercícios associados aos treinos.

### Controllers implementados:

| Controller            | Responsabilidade                                  |
|----------------------|--------------------------------------------------|
| `AlunoController`     | Visualizar informações e perfil do aluno.        |
| `AulaController`      | Exibir as aulas disponíveis e detalhes.          |
| `CriarAulaController` | Criar e gerenciar aulas (para professores).      |
| `CriarTreinoController` | Criar e gerenciar treinos (para professores).  |
| `GerenciarUsuariosController` | Gerenciar usuários e permissões (administrador). |
| `TreinoController`    | Exibir e manipular treinos.                       |
| `AuthController`      | Autenticação (login, logout).                     |

---

## 🏆 Exemplo Inicial

No primeiro momento, criamos uma rota simples que retorna a mensagem **"Hello World Maromba"** usando o método `hello` do `AlunoController`, apenas para testar o funcionamento do controller.


