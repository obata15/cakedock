# Quickstart

Clone this repository
```
$ git clone git@github.com:obata15/cakedock.git
```

Run docker-compose (Laradock)
```
$ cd cakedock/laradock/
$ docker-compose up -d apache2 mysql 
```

Initialize CakePHP
```
$ docker-compose exec workspace bash
// in Docker workspace
# cd addressbook/
# composer install
Set Folder Permissions ? (Default to Y) [Y,n]? Y # Enter Y
# bin/cake migrations migrate
# bin/cake migrations seed
```

Access to http://localhost/
