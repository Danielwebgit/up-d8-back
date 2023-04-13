![Screenshot: Running tests on  vscode](docs/img/maxresdefault.jpg)

# Api para alimentar o front do sistema | :upd8

O objetivo é disponibilizar os dados da API para ser consumida pela aplicação desenvolvida no front.

## Instalação para primeira vez de uso.

*para uma melhor experiencia fiz uso do Docker para implementar a aplicação.*

se já tem o Docker instalado em sua máquina basta rodar o comando:

> docker compose up -d --build

Agora que você está com o container devidamente rodando vamos acessar:

> docker exec -it "ID-CONTAINER" bash

Rodando as migrations e seeders

> php artisan migrate

Foi criado alguns dados fakes para ajudar a testar a aplicação

> php artisan db:seed StateSeeder

> php artisan db:seed CitySeeder

Agora vamos rodar a seeder para popular alguns clientes para a aplicação:

> php artisan db:seed ClientSeeder

**Rotas GET**

> Listar clientes

* `baseURL/api/v1/clients`

### json demonstrativo

```json
"data": [
		{
			"id": 16,
			"name": "Ms. Crystel Reichel PhD",
			"cpf": "465.821.377-00",
			"gender": "male",
			"date_of_birth": "2023-04-13 04:01:51",
			"created_at": "2023-04-13T04:01:51.000000Z",
			"updated_at": "2023-04-13T04:01:51.000000Z",
			"address": []
		},
		{
			"id": 24,
			"name": "Luzia",
			"cpf": "111.045.124-79",
			"gender": "male",
			"date_of_birth": "2023-04-11",
			"created_at": "2023-04-13T04:49:58.000000Z",
			"updated_at": "2023-04-13T05:59:57.000000Z",
			"address": [
				{
					"id": 9,
					"state_id": 9,
					"city_id": 5,
					"client_id": 24,
					"address_detail": "Quadra 40 lt. 34",
					"created_at": "2023-04-13T05:59:57.000000Z",
					"updated_at": "2023-04-13T05:59:57.000000Z",
					"address_state": [
						{
							"id": 9,
							"title": "Goiás",
							"letter": "GO",
							"created_at": "2023-04-10T22:29:44.000000Z",
							"updated_at": "2023-04-10T22:29:44.000000Z"
						}
					],
```