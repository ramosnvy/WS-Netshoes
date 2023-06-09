
# WS-Netshoes
Esse é um projeto desenvolvido para um teste de estágio. Se trata de um Web Scraper que segue os requisitos determinados pelo problema apresentado. Todo o projeto está sendo entregue visando os requisitos e critérios de avaliação.

**Requisitos**

- [x] Requisição em uma página de um produto;
- [x] Pegar o  html e extrair informações deste produto;
- [x] Capturar título, preço, imagem e descrição.

**Avaliação**
- Proficiência na linguagem de programação escolhida para o teste;
- Organização e estruturação do código;
- Capacidade de aprender e se adaptar.

## Como utilizar?

Esse projeto utiliza três ferramentas fundamentais para seu funcionamento. Para rodar um projeto PHP que utiliza o Composer e um servidor web, você precisará seguir os seguintes passos:

1.  Certifique-se de ter o PHP 7^ instalado em seu sistema. Você pode verificar a versão do PHP digitando o comando `php -v` no terminal ou prompt de comando. Você encontra o download oficial [aqui.](https://www.php.net/releases/8.2/en.php)


2.  Instale o Composer, caso ainda não o tenha feito. O Composer é uma ferramenta que gerencia as dependências do projeto. Você pode baixá-lo no site oficial [https://getcomposer.org/](https://getcomposer.org/).

3. Após instalar o Composer, é necessário acessar a pasta do projeto pelo prompt de comando e executar o comando para instalar as dependências do projeto.

4.  Instale as dependências do projeto executando o comando `composer install` na pasta do projeto. Isso baixará e instalará todas as dependências necessárias para que o projeto funcione corretamente.

5.  Configure um servidor web. O servidor web pode ser o Apache, Nginx ou outro de sua preferência. Você precisará configurar o servidor para apontar para a pasta raiz do projeto, para que possa ser acessado por um navegador web.

6.  Inicie o servidor web e acesse o projeto através do navegador. Depois de configurar o servidor web, você pode acessar o projeto no navegador digitando o endereço local do servidor web, seguido pelo caminho para a página inicial do projeto.


## Sobre o projeto

### Web Scraper

**Definição**
Um Web Scraper em PHP é um programa desenvolvido em linguagem PHP que tem como objetivo automatizar a coleta de dados de sites da web. Ele é capaz de percorrer uma página web, identificar e extrair as informações relevantes em um formato estruturado, como por exemplo em uma tabela ou em um arquivo JSON. Com o uso de técnicas de web scraping, é possível obter dados de forma mais rápida e eficiente do que a obtenção manual por meio de navegadores web. Em geral, um Web Scraper em PHP faz uso de bibliotecas específicas, como a biblioteca Simple HTML DOM ou a biblioteca cURL, para obter e manipular o código HTML das páginas web a serem raspadas.

### Escolhas e resultados

Durante esse projeto, precisei me adaptar e realizar escolhas. Realizar um Web Scraper é uma tarefa até que tranquila, porém o maior trabalho por cima disso tudo é o fato de precisar lidar com dados e formatações HTML/CSS que não são feitos por você ou que possuem um formato claro e simples. Muitas vezes, você pode se deparar com tags e seletores que estão totalmente bagunçados ou misturados entre si. Por esse motivo, você consegue encontrar 3 formas de realizar um filtro de dados no meu projeto. Essas formas foram separadas em três tipos de requisições: filtro de título, filtro de imagem e filtro de descrição e preço.

No final, consegui chegar a um resultado consistente e agradável, que atendesse todos os requisitos do projeto.

**Página inicial: Entrada de Dados**
![Print entrada](https://uploaddeimagens.com.br/images/004/453/935/full/1.png?1683228579)

**Página de resposta: Saída de Dados**
![Resposta](https://uploaddeimagens.com.br/images/004/453/948/full/2.png?1683228860)