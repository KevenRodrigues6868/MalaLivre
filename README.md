# Projeto de Aluguel de Malas - MALA LIVRE

Este é um projeto acadêmico desenvolvido como parte do curso de Engenharia de Software da Catolica do Tocantins. O projeto consiste em uma loja fictícia que oferece aluguel de malas. A plataforma permite aos usuários se cadastrar, fazer login, visualizar produtos disponíveis, realizar o aluguel de malas e gerar comprovantes em formato PDF.

## Tecnologias Utilizadas

- **Frontend:**
  - HTML
  - CSS
  - JavaScript
  
- **Backend:**
  - PHP (para gerar o comprovante em PDF)
  - SQL (Banco de Dados)
  - XAMPP (para o servidor local)

## Funcionalidades

- **Cadastro de Usuários:** Os usuários podem se cadastrar informando dados como nome, e-mail, contato, endereço, CPF/CNPJ e senha.
- **Login de Usuários:** Usuários registrados podem fazer login para acessar o sistema.
- **Visualização de Produtos:** O sistema apresenta uma lista de malas disponíveis para aluguel.
- **Aluguel de Malas:** O usuário pode escolher uma mala para alugar, visualizar o valor e confirmar o aluguel.
- **Geração de Comprovante:** Após o aluguel, um comprovante é gerado com o nome do usuário logado, o valor da mala e a data do aluguel em formato PDF.

## Banco de Dados

Para o banco de dados, foi utilizado o MySQL com o seguinte script de criação:

```sql
-- Criação do Banco de Dados
CREATE DATABASE malalivre;

USE malalivre;

-- Tabela de Cadastro de Usuários
CREATE TABLE tb_cadastro (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(45) NOT NULL,
  contato VARCHAR(40) NOT NULL,
  ender VARCHAR(40) NOT NULL,
  docum VARCHAR(100) NOT NULL,
  senha VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);

-- Tabela de Produtos (Malas)
CREATE TABLE tb_produto4 (
  id INT NOT NULL,
  nome_produto VARCHAR(500) NOT NULL,
  descr_produto VARCHAR(500) NOT NULL,
  valor FLOAT(50) NOT NULL,
  PRIMARY KEY (id)
);

-- Inserção de Produtos
INSERT INTO tb_produto4 VALUES
(1, 'Mala de Bordo 10 kg Abs 4 Rodas Turquia Preto', 'A Mala de Bordo ABS 4 Rodas Bagaggio Turquia 20" Preta com seu tamanho de bordo...', 100),
(3, 'Mala de Bordo ABS 4 Rodas Adventure Fortt Preto - MAB01-PT', 'A Mala de Bordo Adventure Fortt, foi desenvolvida com o que há de mais moderno...', 150),
(4, 'Mala de Bordo ABS Swiss Go Viena Para Viagem Cadeado Integrado e Rodas 360º Cinza', 'A mala é prática, leve e resistente...', 200);

-- Tabela de Aluguel
CREATE TABLE tb_aluguel (
  id INT AUTO_INCREMENT PRIMARY KEY,
  produto_id INT,
  user_id INT,
  data_aluguel DATETIME,
  data_devolucao DATETIME,
  valor DECIMAL(10, 2),
  status VARCHAR(20)
);



