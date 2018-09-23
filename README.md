# Bilemo_Project7

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/12b708ebfa804b878c7b4b427e8f6e60)](https://app.codacy.com/app/sergisergio/Bilemo_Project7?utm_source=github.com&utm_medium=referral&utm_content=sergisergio/Bilemo_Project7&utm_campaign=Badge_Grade_Dashboard)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sergisergio/Bilemo_Project7/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sergisergio/Bilemo_Project7/?branch=master)
## Setup

**Download Composer dependencies**

Make sure you have [Composer installed](https://getcomposer.org/download/)
and then run:
                   
```
composer install
```

**Configure the the .env File**

First, you should have an `.env` file.
If you don't, copy `.env.dist` to create it.

Next, look at the configuration and make any adjustments you
need - specifically `DATABASE_URL`.

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

**Start server**

```
php bin/console server:run
```

Now check out the api at `http://localhost:8000/api`

**Any Questions ?**

Feel free to contact me !