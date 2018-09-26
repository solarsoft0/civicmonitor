---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#User

User Resource Login, Register, Details etc
<!-- START_8c0e48cd8efa861b308fc45872ff0837 -->
## Login endpoint

> Example request:

```bash
curl -X POST "http://localhost/api/v1/login" \
-H "Accept: application/json" \
    -d "email"="harmon85@example.com" \
    -d "password"="dolorum" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/login",
    "method": "POST",
    "data": {
        "email": "harmon85@example.com",
        "password": "dolorum"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/login`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | email |  required  | 
    password | string |  required  | 

<!-- END_8c0e48cd8efa861b308fc45872ff0837 -->

<!-- START_8ae5d428da27b2b014dc767c2f19a813 -->
## Register endpoint

> Example request:

```bash
curl -X POST "http://localhost/api/v1/register" \
-H "Accept: application/json" \
    -d "name"="dolor" \
    -d "email"="mwilkinson@example.com" \
    -d "password"="dolor" \
    -d "c_password"="dolor" \
    -d "username"="dolor" \
    -d "phone_number"="dolor" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/register",
    "method": "POST",
    "data": {
        "name": "dolor",
        "email": "mwilkinson@example.com",
        "password": "dolor",
        "c_password": "dolor",
        "username": "dolor",
        "phone_number": "dolor"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/register`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    email | email |  required  | 
    password | string |  required  | 
    c_password | string |  required  | Must be the same as `password`
    username | string |  optional  | Maximum: `255`
    phone_number | string |  optional  | 

<!-- END_8ae5d428da27b2b014dc767c2f19a813 -->

<!-- START_7d037587811c04093c923c7db7411aba -->
## Details endpoint

> Example request:

```bash
curl -X POST "http://localhost/api/v1/details" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/details",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/details`


<!-- END_7d037587811c04093c923c7db7411aba -->

