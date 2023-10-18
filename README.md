`
## Sobre digital-maps

A DigitalMaps é uma empresa especializada na produção de receptores GPS. A organização está empenhada em lançar um dispositivo que promete auxiliar pessoas
na “localização de pontos de interesse”, e você será o responsável pela criação da solução!

## Como executar
Primeiramente no dockerfile e no docker-compose está configurado para `arm64v8`, se a máquina em questão
não for arm, seguir com as alterações abaixo

#### Dockerfile
Alterar a linha 1.
```
FROM arm64v8/php:8.2-fpm
```
por isso:

```
FROM php:8.2-fpm
```

#### docker-compose
Alterar a linha 27.
```
image: arm64v8/mysql:8.1.0
```
por isso:
```
image: mysql:8.1.0
```

## Variáveis de ambiente
Para facilitar a executação dessa poc as variáveis de exemplo já estão corretas,
então basta fazer a cópia do `.env.example` para `.env`, dentro da pasta do projeto executar esse comando

```
cp .env.example .env
```

## Migrations
```
docker exec -it app.digital-maps.dev php artisan migrate
```

## Execução da api
```
docker-compose up -d
```

## Execução de testes 
```
docker exec -it app.digital-maps.dev ./vendor/bin/phpunit
```

## Endpoints disponíveis

### Criar ponto de interesse
```
POST localhost:8000/api/v1/pinterest
BODY - 
{
	"name": "Restaurante",
	"x": 10,
	"y": 20,
	"opened": "19:00",
	"closed": "22:00"
}

```

### Listar todos os pontos de interesse

```
GET localhost:8000/api/v1/pinterest
```

### Listar os pontos de interesse por proximidade

```
GET localhost:8000/api/v1/pinterestByProximity
BODY - 
{
	"x": 3,
	"y": 5,
	"mts": 20,
	"hr": "18:00"
}
```
