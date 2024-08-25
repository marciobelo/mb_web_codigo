# BazarTemTudo

## Subindo MariaDB com o Docker

```sh
docker run --rm -p 3306:3306 -e MYSQL_ROOT_PASSWORD=bazar --name bazar-tem-tudo-mariadb -d -v ./datadir:/var/lib/mysql mariadb:10.5.19
```
