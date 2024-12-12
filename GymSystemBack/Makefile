build:
	docker-compose build --no-cache --force-rm
	# docker build .

up:
	docker-compose up app -d
	docker-compose up db -d

up-ws:
	docker run -p 6001:6001 -p 9601:9601 -d quay.io/soketi/soketi:1.4-16-debian

dependencies:	
	docker exec GymSystemBackApp composer update
	docker exec GymSystemBackApp composer install

db-create:
	docker-compose exec db sh -c "mysql -u root -p -e 'DROP DATABASE IF EXISTS GymSystemBack;'"
	docker-compose exec db sh -c "mysql -u root -p -e 'CREATE DATABASE GymSystemBack;'"

db-seed:
	docker exec GymSystemBackApp php artisan migrate
	docker exec GymSystemBackApp php artisan db:seed
	docker exec GymSystemBackApp php artisan db:seed --class=AccessSeeder

rebuild-app:
	docker-compose app down
	docker-compose build app
	docker-compose up app -d




do-it-all: # build it all and run it all at once with only this command
	@make build
	@make up 
	# @make up-ws
	@make dependencies
	@make db-create
	@make db-seed



# utils for docker and mysql

see-all-dbs:
	docker-compose exec db sh -c "mysql -u root -p -e 'SHOW DATABASES;'"


# remove-all:
# 	docker rm -f $(docker ps -a -q)