# ES - Contratação de Artistas

Aplicação web para contratação de artistas para shows particulares.

## Funcionalidades

- Busca de artistas (bandas e cantores)
- Listagem de resultados para seleção
- Formulário de contratação (Nome, Artista, Cachê, Data do evento, Endereço)
- Registro da contratação (Banco de Dados MySQL)
- Consulta de contratações anteriores
- Backend em Laravel (API própria)
- Frontend em React 


## Requisitos

- PHP 8.x
- Composer
- Node.js 18+
- MySQL 5.7+

## Como rodar o projeto

### 1. Clonar o repositório

```sh
git https://github.com/AugustoCarlos907/teste_enterscience.git

### 2. Backend (Laravel)

1. Configure o arquivo `.env` com os dados do seu banco MySQL:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=teste_enterscience
DB_USERNAME=root
DB_PASSWORD=
```

2. Execute os comandos:

```sh
cd teste_enterscience
composer install
cp .env.example .env Se ainda não existir
php artisan migrate 
php artisan db:seed --class=ArtistSeeder
php artisan serve
```
A API estará disponível em http://localhost:8000

### 3. Frontend (React)

```sh
cd frontend_enterscience
npm install
npm run dev 
**ou** 
npm start 
```
O frontend estará disponível em http://localhost:3000


### 4. Como usar

- Acesse o frontend, pesquise por artistas, selecione um e preencha o formulário de contratação.
- As contratações são salvas no banco de dados MySQL e podem ser consultadas na tela de histórico.

---

“Para a listagem de artistas, criei uma API própria em Laravel utilizando migrations e seeders, simulando uma fonte externa de dados, conforme solicitado no teste.”

# Estrutura do Projeto

```
app/
  Http/
    Controllers/
      ArtistController.php
      ContratacaoController.php
      Controller.php
Requests/
    StoreContratacaoRequest.php
Response/
    ApiResponse.php
Models/
    Artist.php
    Contratacao.php
    User.php
Repositories/
    ArtistRepository.php
    ContratacaoRepository.php
  Interfaces/
      ArtistInterface.php
      ContratacaoInterface.php
Services/
    ArtistService.php
    ContratacaoService.php
    
frontend_enterscience/

database/
  migrations/
    2025_12_24_135004_create_artists_table.php
    2025_12_24_145532_create_contratacaos_table.php
  seeders/
    ArtistSeeder.php
routes/
  api.php

README.md
```



# teste_enterscience
