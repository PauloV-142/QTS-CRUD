# TODO

## Páginas
- [x] indexconsulta.php, consulta.php
    - Opção de listar todos os alunos cadastrados.
- [x] indexinserir.php, inserir.php
    - Teste se os dados foram inseridos.
    - [ ] Definir o tamanho & tipos de dados dos inputs no form.

- [x] indexremover.php, remover.php
    - [x] Issue: Ainda aparenta remover se o ID for inválido.

- [ ] Pesquisar e remover seções com a tag `#REMOVER`


## Funcionalidade
- [ ] Mudar o `... WHERE $identifier=$value` do `$sql_query` de acordo com o valor do `<select id="identifier">` no form.

- [ ] Colocar máscaras de dados AAAA-MM-DD nos inputs. (JQuery)

### Design
- [ ] Seção para mensagens de erro. (Footer com variável $mensagem)

- [ ] Criar uma divisão para os dados pessoais e para dados escolares nos forms.

- [ ] Higlight do link da página aberta em `components/header.php`

- [ ] Uma página estilizada / componente apenas para mostrar mensagens de erro/sucesso -- Após realizar uma action