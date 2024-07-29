Requisitos Funcionais
Criação (Create):<br><br>
• Formulário para adicionar novos registros.<br><br>
• Campos obrigatórios: Nome, Sobrenome, Email, Telefone e Data de Nascimento.<br><br>

Leitura (Read):<br><br>
• Listagem de todos os registros cadastrados, exibindo três campos.<br><br>
• Possibilidade de visualizar detalhes de um registro específico.<br><br>

Atualização (Update):<br><br>
• Formulário para editar os registros existentes.<br><br>
• Possibilidade de atualizar qualquer um dos três campos.<br><br>

Exclusão (Delete):<br><br>
• Funcionalidade para excluir um registro específico.<br><br>

Instalação do Ambiente de Desenvolvimento
Download do Composer:<br><br>
Execute os seguintes comandos para baixar e instalar o Composer:

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"<br><br>
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"<br><br>
php composer-setup.php<br><br>
php -r "unlink('composer-setup.php');"

Download do Git:

Utilize o comando para instalar o Git:

winget install --id Git.Git -e --source winget


Download do Laravel via Composer:<br><br>
Execute o comando para instalar o Laravel globalmente:

composer global require laravel/installer
Download do XAMPP:<br><br>
Acesse o link para baixar o XAMPP:<br><br>
https://www.apachefriends.org/pt_br/index.html

Configuração do Ambiente de Desenvolvimento e Banco de Dados
Realize a cópia do arquivo .env.example com o seguinte comando:

copy .env.example .env
<br><br>
Renomeie o arquivo para `.env`.<br><br>

Gere a chave de segurança com o comando:copy php artisan key:generate


Acesse o arquivo .env e certifique-se de que a configuração DB_DATABASE está definida como leader.<br><br>

No XAMPP, crie um banco de dados com o mesmo nome definido no arquivo .env (no caso, leader).<br><br>

Execute a migração para criar a tabela no banco de dados com as colunas declaradas no projeto:<br><br>


php artisan migrate
