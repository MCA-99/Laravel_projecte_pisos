# About Proyecto_pisos

[Documentación Laravel](https://laravel.com/docs/5.4)

## Requisitos:
- Git
- Php
- Mysql
- Docker
- Docker-compose

## Instalación

### Actualiza el sistema
```bash
sudo apt-get update && sudo apt-get upgrade
```

### Git
```bash
sudo apt-get install git
```

### Docker
```bash
sudo apt install apt-transport-https ca-certificates curl software-properties-common
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu bionic stable"
sudo apt update
apt-cache policy docker-ce
sudo apt install docker-ce
```

### Docker-Compose
```bash
sudo curl -L "https://github.com/docker/compose/releases/download/1.24.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose
```

### Composer
```bash
sudo apt update
sudo apt install wget php-cli php-zip unzip
HASH="$(wget -q -O - https://composer.github.io/installer.sig)"
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
sudo composer install
```

### Dependencias Php
```bash
sudo apt-get install php-dom
sudo apt-get install php-mbstring
```

## Uso
- Clona los 2 repositorios necesarios
```bash
git clone https://github.com/MCA-99/Docker.git
git clone https://github.com/MCA-99/Laravel_projecte_pisos.git
```

- Inicia el docker que contiene la base de datos
(Situate en la ruta del docker-compose)
```bash
sudo docker-compose up -d
```

- En el proyecto de laravel remnombra .envexample por .env y editalo
```bash
mv .env.example .env
nano .env

DB_CONNECTION=mysql
DB_HOST=172.19.0.1
DB_PORT=3306
DB_DATABASE=proyecto_pisos
DB_USERNAME=root
DB_PASSWORD=root
```

- Si no existe crea la base de datos "proyecto_pisos" mediante phpmyadmin
user: root
pass: root

- Servimos el proyecto mediante artisan
```bash
php artisan serve
```

- Llenamos la base de datos para el proyecto

Estando en el directorio raiz del proyecto
```bash
php artisan migrate
php artisan db:seed
```

- Accedemos finalmente
```bash
localhost:8000
```