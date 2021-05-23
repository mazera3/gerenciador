<h1 align="center">O DESAFIO</h1>
<h1 align="center">
  <img alt="cadastro" title="#Cadastro" src="./assets/logo.png" />
</h1>

# Considere os seguintes critérios fictícios para desenvolver sistema Gerenciador de Operações:

Crie um sistema que permita o controle de operações. O cadastro deverá conter os 
seguintes dados:

- nome do clientea
- moeda de origem
- moeda de destino
- data da operação
- valor original
- valor convertido
- taxa cobrada

O sistema fornecerá os seguintes relatórios:
- lista de operações
- valor total das operações
- valor total das taxas cobradas
- Os relatórios poderão ser filtrados por intervalo de tempo e cliente.
- O valor de conversão de cada moeda para Reais poderá ser definido no código-fonte 
ou cadastrado pelo usuário do sistema. O cadastro de valores de conversão garantirá 
pontos extras na avaliação.

Critérios de avaliação:

Atendimento aos requisitos: 5 pontos
Estrutura do código: 1 ponto
Persistência de dados: 1 ponto
Separação de camadas: 1 ponto
Documentação: 1 ponto
Testes unitários: 1 ponto
Pontuação total: 10

Entrega da Solução:

O código fonte desse sistema precisa ser entregue através de um repositório público no Github. O código deve incluir o arquivo README na raiz com a documentação do sistema, incluindo a descrição de como compilar e executar o programa, além das instruções de utilização. 

Pode ser feito em qualquer linguagem de programação.

# Instruções

## Requisitos
- PHP 7.2
- MySql 8
- Servidor Ampache 2

# Intalar o mysql e executar os comando:
- mysql -u root -p
- CREATE DATABASE gerenciador;
- USE gerenciador;
- CREATE USER 'root'@'localhost' IDENTIFIED BY '123456';
- GRANT ALL PRIVILEGES ON gerenciador.* TO 'root'@'localhost';
- FLUSH PRIVILEGES;

# Credenciais de acesso ao BD

- define('HOST', 'localhost'); 
- define('USER', 'root'); 
- define('PASS', '123456'); 
- define('DBNAME', 'gerenciador'); 
- define('PORT', 3308); 


## Importar a tabela e os arquivos fonte:
- Importar: operacoes.sql
- criar um dirotorio chamado: gerenciador no diretório de leitura do apache.
- Copiar: código fonte para o diretório. (https://github.com/mazera3/gerenciador.git)
- abrir no navegador o endereço: http://localhost/gerenciador

### Desenvolvimento Atual

- [x] Cadastro de clientes
- [x] Lista de operações
- [x] Filtros