# How to use this app

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

![Screenshot](login_check.png)