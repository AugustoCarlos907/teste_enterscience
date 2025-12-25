
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
