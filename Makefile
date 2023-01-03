MARIADB_VOLUME=/home/seungpar/Workspace/Inception/data/mariadb
WORDPRESS_VOLUME=/home/seungpar/Workspace/Inception/data/wordpress

all: up

$(MARIADB_VOLUME):
	mkdir -p $(MARIADB_VOLUME)

$(WORDPRESS_VOLUME):
	mkdir -p $(WORDPRESS_VOLUME)

up: $(MARIADB_VOLUME) $(WORDPRESS_VOLUME)
	docker compose -f ./srcs/docker-compose.yml up --build

down:
	docker compose -f ./srcs/docker-compose.yml down

clean: 
	docker compose down --rmi all --volumes

fclean: clean
	rm -rf /home/seungpar/Workspace/Inception/data

re: fclean all

.PHONY: all up down clean fclean re
