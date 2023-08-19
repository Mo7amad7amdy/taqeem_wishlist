# Taqeem API
## Installation

For Postman  <a href="https://documenter.getpostman.com/view/3385717/2s9Y5SWkX2">documentation</a>

## Setup

First clone the project.

```bash
git clone https://github.com/Mo7amad7amdy/taqeem_wishlist
```

into to the project and run composer update

```
cd taqeem_wishlist
```
Here
```
composer install
```
Now you’ll create a MySQL database and set up environment variables to give the application access to the database.

Let’s copy ``env.example`` to ``.env`` and update the database related variables

```
cp .env.example .env
```

Then run migrate and seed for Items table and dummy data

```
php artisan migrate --seed
```

Now the project is ready, just run the server command if you are on local:

```npm
npm install && npm run dev
```

And

```
php artisan serve
```

## The Assignment

Coding Assignment

### Project Description:

A simple Laravel project, where the user can perform CRUD operations on the items of the
Wishlist

### Requirements:
1. Create a Laravel Project
2. ‘items’ table structure:

   o Id

   o Name

   o Price

   o Seller (i.e, where do you get the item from)

   o created_at

   o updated_at

3. Create API endpoints for:

   o Items Index

   o Item Show

   o Item Store:

   all fields (name, price, seller) are required

      § add any other proper validations

   o Items Statistics:

      § The total price of items added in the current month

      § The average price of all items added

4. Create a View for:

   o Items Index
