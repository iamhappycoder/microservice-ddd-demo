# microservice-ddd-demo

$ git clone git@github.com:iamhappycoder/microservice-ddd-demo.git
$ cd microservice-ddd-demo/docker
$ docker-compose up --build -d

$ docker-compose exec php-users composer install -vvv
$ docker-compose exec php-users vendor/bin/phpunit

$ docker-compose exec php-notifications composer install -vvv
$ docker-compose exec php-notifications vendor/bin/phpunit
$ docker-compose exec php-notifications bin/console messenger:consume async
$ cd ../code/notifications
$ tail -f var/log/dev.log
