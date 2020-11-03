# Aplicação Mobile para LessClick

## Getting Started Guide
Guia de instalação da aplicação, Documentação: <https://docs.expo.io/get-started/installation/>

A aplicação foi desenvolvida na Tecnologia React Native com o Expo.

### Pré-requisitos
 
- Expo
- Node
- Instalar o expo no Smartphone para testes

### Instalação
- Clonar repositorio 

- Ir até a pasta Mobile

 - Instalar o Node
 ```sh 
$ npm install
```
- Aplicação em execução

```sh 
$ yarn start
```
Ou
```sh 
$ expo start
```

- Para acessar a Aplicação em execução

```sh 
http://localhost:19002/
```

- Em seguida colocar o QRCode do Expo no Smartphone para testes

### Alterando caminho da APIBackend
- Caminho para alterar o serviço da api backend

```sh 
$ cd ../mobile/src/service

```

- Alterar arquivo api.js para o caminho desejado da aplicação backend

Ex.:
```sh 

baseURL:'http://localhost:8000/api'

```