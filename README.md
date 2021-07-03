# docker-lempstack
A simple multi-container docker LEMP stack
- nginx
- php7.4-fpm
- mysql 5.7



# Usage

The php-fpm is running on port `9000` and the mysql service on `3306`.
Add your php files on `src/`. All docker related files is located at `.docker/` directory.

Start the containers in the background:
```
docker compose up -d 
```
Once everything is started, you can now view it on http://localhost:8000. 


View the status of the containers:
```
docker compose ps
```

Check and follow logs:
```
docker compose logs -f [<service>]
```

Execute a command in a running container:
```
docker compose exec nginx cat /etc/nginx/nginx.conf
```

Restart the containers:
```
docker compose restart
```

Stop the containers:
```
docker compose down -v
```

If you want to add more php extensions, just modify `.docker/php/Dockerfile`.




