setup:
	@make build
	@make up 
	@make dependencies
	@make database


build:
	docker-compose build --no-cache --force-rm

up:
	docker-compose up -d

dependencies:	
	docker exec GymSystemBackApp composer update
	docker exec GymSystemBackApp composer install

database:
	docker-compose exec GymSystemDB mysql -u root -p'password' -e "DROP DATABASE IF EXISTS GymSystemBack;"
	docker-compose exec GymSystemDB mysql -u root -p'password' -e "CREATE DATABASE GymSystemBack;"
	docker exec GymSystemBackApp php artisan migrate
	docker exec GymSystemBackApp php artisan GymSystemDB:seed

# serve:
# 	docker exec -it GymSystemBackApp php artisan serve --host=127.0.0.1