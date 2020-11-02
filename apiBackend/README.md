# Aplicação API RESTFul para LessClick

## Getting Started Guide
Guia de instalação da aplicação, Documentação: <https://laravel.com/docs/7.x/installation>

### Pré-requisitos
 
- Composer
- PHP >= 7.2.5

### Instalação
- Clonar repositorio 

- Ir até a pasta da apiBackend

 - Instalar o composer
 ```sh 
$ composer install
```
- Renomear ou Copiar .env.example arquivo para .env #editar campos com credenciais do banco
```sh 
$ cp .env.example .env 
```
- Gerar key

```sh 
$ php artisan key:generate
```
- Gerar key JWT

```sh 
$ php artisan jwt:secret
```

- Gerar migrate da aplicação

```sh 
$ php artisan migrate
```

- Aplicação em execução

```sh 
$ php artisan serve
```

- Para acessar a Aplicação em execução

```sh 
http://localhost:8000/
```

## API RESTFul
 
### Criar Usuario

**Method:** [![Badge](https://img.shields.io/badge/-POST-red)](#)  
```sh 
 http://localhost:8000/api/auth/register
```
**Parâmetros** 
- Body - JSON

Field   | Type  | Description
------- | ------|---------
name | String | Required
email | String | Required, Unique
password | String | Required 
 

Response:
```sh 
{
  "created": {
    "name": "...",
    "email": "...",
    "updated_at": "...",
    "created_at": "...",
    "id": ...
  }
}
```

### Login de Usuario

**Method:** [![Badge](https://img.shields.io/badge/-POST-red)](#)  
```sh 
 http://localhost:8000/api/auth/login
```
**Parâmetros** 
- Body - JSON

Field   | Type  | Description
------- | ------|---------
email | String | Required, Unique
password | String | Required 
 

Response:
```sh 
{
  "access_token": "...",
  "token_type": "bearer",
  "expires_in": 3600
}
```

### Registro de Evento

**Method:** [![Badge](https://img.shields.io/badge/-POST-red)](#)  
```sh 
 http://localhost:8000/api/event/create
```
**Parâmetros**
- Headers - Authorization bearer Token
- Body - JSON

Field   | Type  | Description
------- | ------|---------
name | String | Required
date | DateTime | Required 
category | String | Required
description | String | Required
 

Response:
```sh 
{
  "created": {
    "name": "...",
    "date": "...",
    "category": "...",
    "description": "...",
    "updated_at": "...",
    "created_at": "...",
    "id": 1
  }
}
```

### Registro de Ingresso

**Method:** [![Badge](https://img.shields.io/badge/-POST-red)](#)  
```sh 
 http://localhost:8000/api/ticket/create
```
**Parâmetros**
- Headers - Authorization bearer Token
- Body - JSON

Field   | Type  | Description
------- | ------|---------
name | String | Required
value | Numeric | Required 
sector | String | Required 
event_id | Numeric | Required 
 

Response:
```sh 
{
  "created": {
    "name": "...",
    "value": ...,
    "sector": "...",
    "event_id": ...,
    "updated_at": "...",
    "created_at": "...",
    "id": 3
  }
}
```
### Listagem de Evento e Ingresso

**Method:** [![Badge](https://img.shields.io/badge/-GET-red)](#)  
```sh 
 http://localhost:8000/api/event/list
```
**Parâmetros**

- No Body

Response:
```sh 
[
  {
    "id": ...,
    "name": "...",
    "date": "...",
    "category": "...",
    "description": "...",
    "created_at": "...",
    "updated_at": "...",
    "ticket_event": [
      {
        "id": ...,
        "name": "...",
        "value": "...",
        "sector": "...",
        "event_id": ...,
        "created_at": "...",
        "updated_at": "..."
      },
      
       
    ]
  }
]
```
