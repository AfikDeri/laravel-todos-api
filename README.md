## Laravel Todos Manager APi 

#### [@WeCodeTutorials](https://twitter.com/WeCodeTutorials)
[![Logo](https://cdn.pbrd.co/images/HdwCut8.png)](https://www.youtube.com/channel/UCj9VatwdukZjNOnIKcpWcsA)

This is the Backend API for our Todos Electron and React APP.

## get it up and running.

After you clone this project, do the following:

```bash
# go into the project
cd laravel-todos-api

# create a .env file
cp .env.example .env

#change the DB_CONNECTION inside the .env file
DB_CONNECTION=sqlite

# install composer dependencies
composer update

# install npm dependencies
npm install

# generate a key for your application
php artisan key:generate

# create a file for your SQLite database
touch database/database.sqlite

# mrun the migration files to generate the schema
php artisan migrate

# run webpack and watch for changes
npm run watch
```

Good Luck :)
