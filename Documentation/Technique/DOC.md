# How to use this app

``` bash
$ mkdir -p config/jwt 
$ openssl genrsa -out config/jwt/private.pem -aes256 4096
$ openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem
```
Be careful: you must put the key you chose in the .env file
##
**Test Getting a token**

1.Curl

```bash
curl -X POST -H "Content-Type: application/json" {yourdomain}/api/login_check -d '{"username":"{yourusername}", "password":"{yourpassword}"}'

```

![Screenshot](https://raw.githubusercontent.com/sergisergio/Bilemo_Project7/master/public/images/login_check.png)

2.Or Postman (Don't forget the content-type: Application/json (in the headers))

![Screenshot](https://raw.githubusercontent.com/sergisergio/Bilemo_Project7/master/public/images/login_Postman.png)

3.Or Insomnia (Don't forget the content-type: Application/json (in the headers))

![Screenshot](https://raw.githubusercontent.com/sergisergio/Bilemo_Project7/master/public/images/login_Insomnia.png)

#
**Authenticate**

1.Curl

```bash
curl -H "Authorization: Bearer {yourtoken}" {yourdomain}/api

```

![Screenshot](https://raw.githubusercontent.com/sergisergio/Bilemo_Project7/master/public/images/Authenticate_curl.png)

2.Or Postman 

![Screenshot](https://raw.githubusercontent.com/sergisergio/Bilemo_Project7/master/public/images/Authenticate_Postman.png)

- Don't forget method and URI.
- In Authorization, choose Bearer Token and paste your key

3.Or Insomnia

![Screenshot](https://raw.githubusercontent.com/sergisergio/Bilemo_Project7/master/public/images/Authenticate_Insomnia.png)

4.Or doc

click on the green button "Authorize" :

![api1](https://api-platform.com/static/JWTAuthorizeButton-702943047407dc8abd80a3e6c301d4f0-a72cf.png)


Enter:
```
Bearer %yourtoken%
```

![api2](https://api-platform.com/static/JWTConfigureApiKey-2b1888051ed1e63d8d3520f369c15e95-a72cf.png)


