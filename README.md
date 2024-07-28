Nesse projeto de cadastro de usuários , foi utilizado as seguintes linguens : PHP , Laravel,bootstrap , HTML . Mantendo padrão Model , View , Controller . A seguir estão os requisitos exigidos para esse projeto:

#Requisitos Funcionais:
1. Criação (Create):
• Formulário para adicionar novos registros.
• Campos obrigatórios: Nome, Sobrenome, Email, Telefone e Data de Nascimento.
2. Leitura (Read):
• Listagem de todos os registros cadastrados, exibindo os 3 campos.
• Possibilidade de visualizar detalhes de um registro específico.
3. Atualização (Update):
• Formulário para editar os registros existentes.
• Possibilidade de atualizar qualquer um dos 3 campos.
4. Exclusão (Delete):
• Funcionalidade para excluir um registro específico.

Abaixo estão códigos para instalar ambiente de desenvolvimento:

Download do composer

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

Download do GIT 

winget install --id Git.Git -e --source winget 

Download do laravel via composer 

composer global require laravel/installer

