exec-app:
	docker-compose exec app bash
stop:
	docker-compose stop
start:
	docker-compose start
build up:
	dokcer-compose up -d
build:
	dokcer-compose build
prune:
	docker system prune -a
sd example-app:
	cd example-app/