
## Requisitos iniciais

Backend desenvolvido em Laravel 8.x

- Renomear arquivo .env.example para .env e alterar configurações das linhas abaixo para seu banco local

>DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=less_click<br>
DB_USERNAME=root<br>
DB_PASSWORD=<br>

- Após preencher os dados acima basta executar o comando abaixo para criar as tabelas.
> php artisan migrate
<br>
<br>

- (OPCIONAL) Você pode popular as tabelas com dados de teste executando o comando
> php artisan db:seed
<br>
<br>


- Para dar start no backend execute o comando a seguir no terminal dentro da pasta backend 
> php artisan serve --host=10.0.0.14(substituir por sua rede local) --port=8080(substituir por porta disponivel)
<br>
<br>

## Rotas

Todas as seguem o padrão resfull do laravel sendo criadas dentro de routes/api.js

- api/events
    - GET: Lista os eventos cadastrados
- api/event/{id}
    - GET: Mostra os dados de um evento assim como também seus ingressos relacionados
- api/events
    - POST: Cadastra um evento

- api/tickets
    - GET: Lista os ingressos cadastrados
- api/tickets/{id}
    - GET: Mostra os dados de um ingresso especificado pelo ID
- api/tickets
    - POST: Cadastra um ingresso


# Postman

Você pode testar as rotas utilizando o Postman