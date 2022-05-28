CONF_PATH	=	srcs/docker-compose.yaml

.PHONY: all
all:
	sh srcs/hosts_edit.sh
	docker-compose -f $(CONF_PATH) --env-file srcs/.env build

.PHONY: start
start:
	docker-compose -f $(CONF_PATH) --env-file srcs/.env up

.PHONY: stop
stop:
	docker-compose -f $(CONF_PATH) --env-file srcs/.env down

.PHONY: clean
clean:
	docker stop $$(docker ps -qa); docker rm $$(docker ps -qa); \
	docker rmi -f $$(docker images -qa); docker volume rm $$(docker volume ls -q); \
	docker network rm $$(docker network ls -q) 2>/dev/null