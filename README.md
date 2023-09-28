# Desarrollo de Módulo para PrestaShop con Docker

Este repositorio contiene una estructura y configuración básica para desarrollar un módulo desde cero para PrestaShop utilizando Docker. Esto te permitirá crear, probar y depurar tu módulo de manera eficiente en un entorno aislado.

## Requisitos

Antes de comenzar, asegúrate de tener instalados los siguientes requisitos:

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## Estructura del Proyecto

El proyecto se organiza de la siguiente manera:

- **`modules/testmodule/`**: En esta carpeta puedes desarrollar tu módulo. Aquí deberías colocar todos los archivos y código relacionado con tu módulo.
- **`docker-compose.yml`**: Este archivo define los servicios de Docker necesarios, como el servidor web Apache, la base de datos MySQL y PHP, y configura la red y los volúmenes para el desarrollo de PrestaShop.

## Instrucciones de Uso

1. Clona este repositorio en tu entorno de desarrollo:

   ```shell
   git clone https://github.com/tu-usuario/tu-proyecto-prestashop-modulo.git
