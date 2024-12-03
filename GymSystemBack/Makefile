build:
	# docker-compose build --no-cache --force-rm
	docker build .

up:
	docker-compose up -d

dependencies:	
	docker exec GymSystemBackApp composer update
	docker exec GymSystemBackApp composer install

database-create:
	docker-compose exec db sh -c "mysql -u root -p -e 'DROP DATABASE IF EXISTS GymSystemBack;'"
	docker-compose exec db sh -c "mysql -u root -p -e 'CREATE DATABASE GymSystemBack;'"

database-seed:
	docker exec GymSystemBackApp php artisan migrate
	docker exec GymSystemBackApp php artisan db:seed

# serve:
# 	docker exec -it GymSystemBackApp php artisan serve --host=127.0.0.1


do-it-all: # build it all and run it all at once with only this command
	@make build
	@make up 
	@make dependencies
	@make database-create
	@make database-seed




# utils for docker and mysql

see-all-dbs:
	docker-compose exec db sh -c "mysql -u root -p${MYSQL_ROOT_PASSWORD} -e 'SHOW DATABASES;'"


# remove-all:
# 	docker rm -f $(docker ps -a -q)