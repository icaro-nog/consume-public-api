# Segunda Fase - Teste 2: Consumir API Gratuita com Autenticação Usando HTTP Client do Laravel

## Objetivos
O objetivo desse desafio técnico é fazer uma requisição a uma API pública gratuita que exija autenticação.
* 1 - Consumir essa API utilizando o HTTP Client nativo do Laravel (Http facade)
* 2 - Tratar a resposta da API e retornar ou manipular os dados conforme necessário

## Linguagens, frameworks e softwares utilizados 
* Laravel 12
* Composer 2.8
* PHP 8.2
* Insomnia

## Instruções para execução local
### A API pública escolhida foi: <a href="https://newsapi.org/">NewsAPI</a>
1º Instale o <a href="https://www.php.net/">PHP</a> de acordo com seu sistema operacional e a versão descrita acima
<br>
2º Instale o <a href="https://git-scm.com/">Git</a> de acordo com seu sistema operacional e a versão descrita acima
<br>
3º Instale o <a href="https://getcomposer.org/">Composer</a> de acordo com seu sistema operacional e a versão descrita acima
<br>
4º Instale o <a href="https://insomnia.rest/download">Insomnia</a> ou qualquer outro client HTTP de sua preferência, de acordo com seu sistema operacional
<br>
6º No terminal do seu sistema operacional, execute o comando abaixo para clonar o projeto
```
git clone https://github.com/icaro-nog/consume-public-api.git (HTTPS)
ou
git clone git@github.com:icaro-nog/consume-public-api.git (SSH)
```
7º Na pasta raiz do projeto clonado, para atualizar e instalar as dependências do <b>Composer</b>, execute os comandos abaixo
```
composer update
composer install
```
8º Vá até a documentação da <b>NewsAPI</b> e gere uma chave de API, conforme o indicado

9º Agora, vá até o arquivo <b>consume-public-api/.env</b> e defina
```
NEWS_API_KEY="sua_chave_api"
```
10º Para servir a aplicação, execute o seguinte comando
```
php artisan serve
```
Após isso, a aplicação estará pronta para testagens!

### Rota GET para obtenção de notícias com assunto sobre: artificial intelligence
```
http://127.0.0.1:8000/api/news
```
Caso tudo esteja configurado corretamente, em seu navegador ou client http, você deve obter algo como:
```
{
    {
	"status": "ok",
	"totalResults": 1,
	"articles": [
    		{
    			"source": {
    				"id": null,
    				"name": "Gizmodo.com"
    			},
    			"author": "Mike Fazioli",
    			"title": "Forget AirPods, Samsung Galaxy Buds3 Pro Are Practically Free After 50% Price Cut With Trade-In",
    			"description": "Samsung's offering up to $125 in instant trade-in credit on their AI-powered wireless earbuds, or $60 off without a trade-in.",
    			"url": "https://gizmodo.com/forget-airpods-samsung-galaxy-buds3-pro-are-practically-free-after-50-price-cut-with-trade-in-2000607818",
    			"urlToImage": "https://gizmodo.com/app/uploads/2025/04/GalaxyBuds3ProAI.jpg",
    			"publishedAt": "2025-05-28T15:10:02Z",
    			"content": "As much as you love your current wireless earbuds, they may never be more useful to you than they are right now. That has nothing to do with their features or their sound, but everything to do with h… [+2373 chars]"
    		}
          }
    ]
}
```
Em caso de insucesso na requisição, será retornado algo como:
```
{
	"error": "Error to find news.",
	"status": 401,
	"message": "..."
}
```

## Pontuação de melhorias
* Captura de logs para coleta de possíveis erros
* Ter uma rotina de testes, pode ser utilizado o PHPUnit
* Paginação da listagem de registros
* Clareza nos recursos que a requisição poderia ter, segundo o desafio passado, exemplo: utilizar o método withUrlParameters() para passar parâmetros e consultar outros dados
