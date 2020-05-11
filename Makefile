#!make
# Makefile for Docker
help:
	@echo ""
	@echo "usage: make COMMAND"
	@echo ""
	@echo "Commands:"
	@echo "  build               Build images"
	@echo "  start               Create and start containers"
	@echo "  deploy              Start deploy script"
	@echo "  stop                Stop all services"
	@echo "  enter-php           Open php container"

build:
	docker-compose build

start:
	docker-compose up -d

deploy:
	docker exec -it $(shell docker-compose ps -q php) bash -c "composer dump"

stop:
	docker-compose down -v

enter-php:
	docker exec -it $(shell docker-compose ps -q php) bash
