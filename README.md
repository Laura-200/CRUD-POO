# 🍦 SORVETERIA — DELÍCIAS GELADAS

<div align="center">

### Sistema de Cadastro de Sorvetes

Um sistema CRUD desenvolvido em PHP utilizando Programação Orientada a Objetos (POO), PDO e PostgreSQL.

![PHP](https://img.shields.io/badge/PHP-8.5-777BB4?style=for-the-badge&logo=php&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-Database-4169E1?style=for-the-badge&logo=postgresql&logoColor=white)
![PDO](https://img.shields.io/badge/PDO-Database%20Connection-8892BF?style=for-the-badge)
![Status](https://img.shields.io/badge/Status-Concluído-2ea44f?style=for-the-badge)

</div>

---

## 📖 Sobre o projeto

O projeto **Sorveteria Delícias Geladas** foi desenvolvido como atividade prática da unidade curricular de Programação Back-End.

O objetivo é desenvolver um sistema de cadastro de sorvetes, aplicando conceitos de Programação Orientada a Objetos (POO), conexão com banco de dados e organização do código em camadas.

## 🎯 Funcionalidades

- 🍨 Cadastrar sorvetes.
- 📋 Listar sorvetes cadastrados.
- ✏️ Editar informações dos sorvetes.
- 🗑️ Excluir sorvetes.
- 🔎 Buscar sorvetes pelo ID.

## 🛠️ Tecnologias utilizadas

| Tecnologia | Utilização |
|---|---|
| PHP | Desenvolvimento do sistema |
| POO | Organização em classes e objetos |
| PDO | Conexão com o banco de dados |
| PostgreSQL | Armazenamento dos dados |
| Git e GitHub | Versionamento do projeto |

## 📂 Estrutura do projeto

```text
sorveteria/
│
├── config/
│   ├── Database.php
│   └── credenciais.php
│
├── interfaces/
│   └── RepositoryInterface.php
│
├── models/
│   └── Sorvete.php
│
├── repositories/
│   └── SorveteRepository.php
│
├── public/
│   ├── index.php
│   ├── criar.php
│   ├── editar.php
│   └── excluir.php
│
└── .gitignore
```

## 🧠 Conceitos aplicados

**Programação Orientada a Objetos (POO)**
- Classes e objetos.
- Atributos e métodos.
- Encapsulamento.
- Separação de responsabilidades.

**Repository**
- Organização das operações do banco de dados.
- Implementação de métodos para cada operação do CRUD.
- Utilização de interface para padronização.

**PDO**
- Conexão com PostgreSQL.
- Prepared Statements.
- Execução de comandos SQL.

## 🔄 CRUD

O sistema implementa as quatro operações principais:

| Operação | SQL | Funcionalidade |
|---|---|---|
| Create | INSERT | Cadastrar |
| Read | SELECT | Listar e consultar |
| Update | UPDATE | Atualizar |
| Delete | DELETE | Excluir |

## 🗄️ Banco de dados

O banco utilizado é o PostgreSQL, com uma tabela chamada `sorvetes`.

| Campo | Tipo |
|---|---|
| id | SERIAL PRIMARY KEY |
| nome | VARCHAR(100) |
| sabor | VARCHAR(100) |
| preco | DECIMAL(10,2) |

## 🚀 Como executar o projeto

**1. Clone o repositório**

```bash
git clone URL_DO_REPOSITORIO
```

**2. Entre na pasta**

```bash
cd sorveteria
```

**3. Configure o banco de dados**

Crie o banco `sorveteria` no PostgreSQL e execute o comando SQL de criação da tabela.

**4. Configure as credenciais**

Crie o arquivo `config/credenciais.php` com os dados de acesso ao PostgreSQL.

**5. Inicie o servidor PHP**

```bash
php -S localhost:8000 -t public
```

**6. Acesse no navegador**

```text
http://localhost:8000/
```

## 🔐 Segurança

O projeto utiliza um arquivo `.gitignore` para impedir o envio das credenciais do banco de dados ao GitHub.

## 📚 Aprendizados

Durante o desenvolvimento, foram trabalhados conceitos importantes de Back-End, como:

- Organização de projetos em PHP.
- Programação Orientada a Objetos.
- Integração entre PHP e PostgreSQL.
- Utilização de PDO.
- Implementação de CRUD.
- Separação de responsabilidades com Repository e Interfaces.

---

<div align="center">

### 🍦 Sorveteria Delícias Geladas

**Projeto acadêmico — Programação Back-End**

Desenvolvido para fins de aprendizagem e prática de PHP POO.

</div>
