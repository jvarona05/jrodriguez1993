<p align="center"><img src="https://theme.zdassets.com/theme_assets/624144/6a8455c16fd14684884098941e1317cc5173b353.png" width="400"></p>

# BitPanda Sample Code

This is a RESTful API project developed with Laravel, Passport, Mysql and Docker. This project went through all software development steps; analysis, design, development, testing and documentation.

This project was inspired by BitPanda. The main goal was to try simulating the basic functionalities and architecture of this interesting platform.

[API Documentation](https://jvarona05.github.io/bitpanda-sample/public/docs/).

## Main Technologies

- Laravel
- Mysql
- RESTful API
- Docker - Laradock
- Oauth2 - Passport
- Migrations
- Seeders
- Factory
- Query Scopes
- Carbon/Carbon
- FeatureTest - PHPUnit
- Eloquent - Resource
- Eloquent - Eager Loading
- Eloquent - One To Many (Polymorphic) relation

## Database Schema

<p align="center"><img src="https://i.imgur.com/Olhdq3X.png" width="500"></p>

## Installation

### Clone the project

```
git clone https://github.com/jvarona05/bitpanda-sample.git

cd bitpanda-sample
```

### Create .env file

```
cp .env.example .env
```

### Run Docker

```
git clone https://github.com/Laradock/laradock.git

cd laradock

cp env-example .env

docker-compose up -d nginx mysql workspace 
```

### Configure the project

```
docker exec -ti laradock_workspace_1 composer install

docker exec -ti laradock_workspace_1 php artisan migrate --seed

docker exec -ti laradock_workspace_1 php artisan passport:install

docker exec -ti laradock_workspace_1 php artisan test
```

Note: The keys generated by 'passport:install' are going to be used for authentication
```
Password grant client created successfully.
Client ID: 2
Client secret: PBLVFz5Drgr7bgAnmLpSsW7VscEji56d3O08e9kv
```

### Open the proyect

```
http://localhost/
```
 
 Note: the app will ask you to generate the Laravel APP_KEY

 ### Get token

To learn more about the authentication check [Laravel Passport documentation](https://laravel.com/docs/7.x/passport). Below there is an example of how to login.

<p align="center"><img src="https://i.imgur.com/lW6faS9.png" width="600"></p>
