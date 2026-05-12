# Formulário de Contato com PHP

Este projeto foi desenvolvido para o **Desafio Profissional Inicial – Mini Desafio**, com o objetivo de criar um formulário funcional em PHP que receba e exiba dados enviados pelo usuário.

## Objetivo

Criar uma página com formulário HTML que envie dados via **POST** e os exiba utilizando uma função PHP reutilizável.

## Funcionalidades

- Formulário com 3 campos: nome, e-mail e texto
- Envio de dados via método POST
- Exibição dos dados recebidos com função reutilizável
- Proteção contra XSS com `htmlspecialchars()`
- Código organizado e comentado

## Tecnologias utilizadas

- HTML
- PHP

## Como executar o projeto

1. Abra a pasta do projeto no terminal.

2. Execute o servidor PHP:

```bash
php -S localhost:8000
```

3. Abra no navegador:

```txt
http://localhost:8000
```

## Estrutura do projeto

```txt
projeto/
│
├── index.php
└── README.md
```

## Sobre o código

O arquivo `index.php` contém o formulário e o processamento PHP na mesma página.

- `exibirCampo($label, $valor)` — exibe um campo recebido pelo formulário de forma formatada e segura
- `isset($_POST[...])` — verifica se o formulário foi enviado antes de exibir os dados

## Critérios atendidos

- Formulário HTML funcional
- Uso do método POST
- Pelo menos 3 campos
- PHP recebendo e exibindo os dados
- Código comentado e organizado

## Autor

Feito por **Luan Basani**.