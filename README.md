<h3 align="center">
Staff Directory
</h3>

## What is Staff Directory?

This application is built using Laravel and Vue.js. It is a simple app that lets your filter through employees by name or department.

## Installation

### Clone
Clone `ashbakernz/StaffDirectory` to your local development environment.

### Dependencies
Once you have cloned down the repo you must open your terminal in the root directory of the project and install the dependencies using the following command.

`composer install`

### Setup the database
Once everything has installed you have to create a database and put your credentials in the .env file.

```
DB_DATABASE=YOUR_DATABASE_NAME
DB_USERNAME=YOUR_DATABASE_USERNAME
DB_PASSWORD=YOUR_DATABASE_PASSWORD
```

Once the database is all setup you will need to migrate and seed the database to add the tables & data into the database.

`php artisan migrate --seed`

```
MIT License

Copyright (c) 2018 ashbakernz

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

## Credits
- [ashbakernz](https://ashbakernz.com)
- [Spatie](https://github.com/spatie)
 - [`spatie/laravel-fractal`](https://github.com/spatie/laravel-fractal)


- [All Contributors](../../contributors)
