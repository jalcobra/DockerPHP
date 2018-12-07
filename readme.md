# Dockerizando un Proyecto con Laravel (PHP)
<hr>
Para Dockerizar un proyecto de Laravel, antes que nada, se debe tener instalado Docker, tener en cuenta que si esta prueba se realizara en Ubuntu ante poner en todos los comandos: sudo

## Paso 1.
Ejecute el Siguiente comando:
```
pip install docker-compose
```
```
docker pull php:7.2-apache
```
## Paso 2.
Descargar la imagen de Composer
```
docker pull composer
```

## Paso 3.
Clonamos nuestro repositorio.
```
git clone https://github.com/jalcobra/DockerPHP.git jorge_acosta
```

## Paso 4.
Le damos permisos a nuestras carpetas.
```
sudo chown -R connan:connan jorge_acosta/
```
```
sudo chmod -R 755 jorge_acosta/
```
```
cd jorge_acosta/
```
```
sudo chmod -R 777 storage
```
```
cd Bootstrap
```
```
sudo chmod -R 777 cache
```
## Paso 5.
Inicializar Dockerfile.
Nos vamos nuevamente al directorio raíz de nuestro proyecto clonado retrocedemos con el comando``` cd.. ```hasta llegar a nuestro directorio donde se encuentra nuestro Dockerfile y Docker-composer.
<br>
Usamos el siguiente comando:
```
Docker-compose up -d
```
Y listo ya podemos ingresar al http://localhost:8000/ y ver nuestro proyecto funcionando.

