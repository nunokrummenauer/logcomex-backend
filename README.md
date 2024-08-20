# API-Backend


### Build do Projeto:


Crie o Arquivo .env e copie o conteúdo de .env.example


Comando para subir os containers do projeto:
```sh
docker-compose up -d
```


Acessar o bash do container:
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


O projeto estará disponível pelo link local:
[http://localhost:8989](http://localhost:8989)

