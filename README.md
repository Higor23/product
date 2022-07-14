## Instalação

Clone o projeto
```sh
git clone https://github.com/Higor23/product.git
```

Acesse a pasta do projeto:
```sh
cd product
```

Crie o arquivo .env:
```sh
cp .env.example .env
```
Substitua o conteúdo do .env por:
```dosini
APP_NAME=Product
APP_ENV=local
APP_KEY=base64:nVv1Mbrc/CjvlznGT4XKE536q5wbyQAcI5KDM09PWTY=
APP_DEBUG=true
APP_URL=http://localhost:8882

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=product
DB_USERNAME=root
DB_PASSWORD=root

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

Suba os containers:
```sh
docker-compose up -d
```
Acesse o container:
```sh
docker-compose exec product bash
```
Instale as dependências:
```sh
composer install
```
Crie as tabelas no banco de dados rodando as migrations:
```sh
php artisan migrate
```
Rode os testes:
```sh
php artisan test
```