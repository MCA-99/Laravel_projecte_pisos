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
```

### Dependencias Php
```bash
sudo apt-get install php-dom
sudo apt-get install php-mbstring
```

## Uso
En la terminal ejecuta
```bash
php artisan serve
```
