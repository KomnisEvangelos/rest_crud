# Single Recourse RESTful CRUD API
![architecture](https://raw.githubusercontent.com/KomnisEvangelos/rest_crud/master/img/Drawing1%20(3).png)

# Extented Endpoints
- GET /courses
- GET /courses/{id}
- POST /courses
- PUT /courses/{id}
- DELETE /courses/{id}

# Run the following commands
- composer install 
- docker-compose up -d –build
- (docker-compose up -d)
- docker exec -it rest_crud-app-1 php artisan migrate
- docker exec -it rest_crud-app-1 php artisan migrate:refresh --seed
