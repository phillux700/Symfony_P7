# Bilemo_Project7

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/12b708ebfa804b878c7b4b427e8f6e60)](https://app.codacy.com/app/sergisergio/Bilemo_Project7?utm_source=github.com&utm_medium=referral&utm_content=sergisergio/Bilemo_Project7&utm_campaign=Badge_Grade_Dashboard)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sergisergio/Bilemo_Project7/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sergisergio/Bilemo_Project7/?branch=master)
[![Maintainability](https://api.codeclimate.com/v1/badges/8f370362c78c588ce085/maintainability)](https://codeclimate.com/github/sergisergio/Bilemo_Project7/maintainability)

[![Build Status](https://travis-ci.org/sergisergio/Bilemo_Project7.svg?branch=master)](https://travis-ci.org/sergisergio/Bilemo_Project7)
[![CircleCI](https://circleci.com/gh/sergisergio/Bilemo_Project7.svg?style=svg)](https://circleci.com/gh/sergisergio/Bilemo_Project7)

## Setup

**Download Composer dependencies**

Make sure you have [Composer installed](https://getcomposer.org/download/)
and then run:

```
composer install
```
##
**Configure the the .env File**

First, you should have an `.env` file.
If you don't, copy `.env.dist` to create it.

Next, look at the configuration and make any adjustments you
need - specifically `DATABASE_URL`.
##
**Setup the Database**

Again, make sure `.env` is setup for your computer. Then, create
the database & tables!

```
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
```

If you get an error that the database exists, that should
be ok. But if you have problems, completely drop the
database (`doctrine:database:drop --force`) and try again.

##
**Start server**

```
php bin/console server:run
```

![api2](https://raw.githubusercontent.com/sergisergio/SYMFONY_Projet7_Bilemo/master/api.png)

##
**Generate the SSH keys with JWT**

``` bash
$ mkdir -p config/jwt 
$ openssl genrsa -out config/jwt/private.pem -aes256 4096
$ openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem
```
Be careful: you must put the key you chose in the .env file
##
**Test Getting a token**

```bash
curl -X POST -H "Content-Type: application/json" {yourdomain}/api/login_check -d '{"username":"{yourusername}", "password":"{yourpassword}"}'

```

You should have an answer like this:

```json
{
   "token" : "eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOjE0MzQ3Mjc1MzYsInVzZXJuYW1lIjoia29ybGVvbiIsImlhdCI6IjE0MzQ2NDExMzYifQ.nh0L_wuJy6ZKIQWh6OrW5hdLkviTs1_bau2GqYdDCB0Yqy_RplkFghsuqMpsFls8zKEErdX5TYCOR7muX0aQvQxGQ4mpBkvMDhJ4-pE4ct2obeMTr_s4X8nC00rBYPofrOONUOR4utbzvbd4d2xT_tj4TdR_0tsr91Y7VskCRFnoXAnNT-qQb7ci7HIBTbutb9zVStOFejrb4aLbr7Fl4byeIEYgp2Gd7gY"
}
```

**Authentification**

```bash
curl -H "Authorization: Bearer {yourtoken}" {yourdomain}/api

```

For more informations, see [JWT](https://github.com/lexik/LexikJWTAuthenticationBundle)


Now check out the api at `http://localhost:8000/api`
##
**DOC**

click on the green button "Authorize" :

Enter:
```
Bearer %yourtoken%
```

Now, you can see 6 operations:

GET /api/products

GET /api/products/{id}

GET /api/users

GET /api/users/{id}

POST /api/users

DELETE /api/users/{id}

You can also use [Postman](https://www.getpostman.com/) or [Insomnia](https://insomnia.rest/) !
##
**Postman/Insomnia**


In both cases, start with a POST {yourdomain}/api/login_check with your credentials to get your token.

Don't forget in the header : (KEY) Content-Type, (VALUE) application/json.

In the body, select "raw" and JSON(application/json) and write your credentials.

Then, Do your requests using the Bearer Authorization and paste your token.


## HTTP

***Request***

1) Request Line (HTTP Method, URI, protocol version).
2) Headers.
3) Body.

***Response***

1) Status Line (protocol version, code status, code status text).
2) Headers.
3) Body.

## Richardson Maturity Model

***Level1: Resources***

example: /users or /users/{id}

***Level2: Verbs***

example: GET /users/{id}

***Level3: Hypermedia controls***

The point of hypermedia controls is that they tell us what we can do next.

##


**Any Questions ?**

Feel free to contact me !
