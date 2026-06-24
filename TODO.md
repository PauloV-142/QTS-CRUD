# TODO
- [x] CRUD Básico
    - [x] indexconsulta.php, consulta.php
    - [x] indexinserir.php, inserir.php
    - [x] indexremover.php, remover.php
        - [x] Issue: Ainda aparenta remover se o ID for inválido.
    - [x] indexatualizar.php, atualizar.php


## Ideias: 
- Opção de listar todos os alunos cadastrados.
- Definir o tamanho & tipos de dados dos inputs no form.
    - Colocar máscaras de dados AAAA-MM-DD nos inputs. (JQuery)
- As pág. indexInserir e formAtualizar conterão o mesmo form. :] Dá pra reutilizar :DDDDD
- Highlight the inputs modified by the user (JS)
- Script para mudar o IDENTIFIER em `buscaraluno.sql`.
- Seção para mensagens de erro. (Footer com variável $mensagem)
    - Um componente estilizado apenas para mostrar mensagens de erro/sucesso -- Após realizar uma action
- Criar uma divisão para os dados pessoais e para dados escolares nos forms.
- Higlight do link da página aberta em `components/header.php`

- Usar `htmlspecialchars($_POST['chave'])` em todos os inputs recebidos para defender contra XSS attacks (Cross-Site Scripting)

## Ao final:
- Pesquisar e remover seções com a tag `#REMOVER`