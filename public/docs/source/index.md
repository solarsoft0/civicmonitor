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

#Candidate

Candidate CRUD Resource and ...
<!-- START_05121932cfd6ab1b8b1fe5c77dada25b -->
## Get a Candidate Issue Positions.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/candidates/{candidate}/issue-positions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/candidates/{candidate}/issue-positions",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/candidates/{candidate}/issue-positions`


<!-- END_05121932cfd6ab1b8b1fe5c77dada25b -->

<!-- START_dfad8eb7c654a25286d673249cd8e8e3 -->
## Get a Candidate Political Parties.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/candidates/{candidate}/candidate-political-parties" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/candidates/{candidate}/candidate-political-parties",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/candidates/{candidate}/candidate-political-parties`


<!-- END_dfad8eb7c654a25286d673249cd8e8e3 -->

<!-- START_2f3598170f8b5efb6cf46e706023421e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/candidates" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/candidates",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/candidates?page=1",
        "last": "http:\/\/localhost\/api\/v1\/candidates?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": null,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/v1\/candidates",
        "per_page": 15,
        "to": null,
        "total": 0
    }
}
```

### HTTP Request
`GET api/v1/candidates`


<!-- END_2f3598170f8b5efb6cf46e706023421e -->

<!-- START_0e32e1cc10ac16e49906d5715e1030a7 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/candidates/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/candidates/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/candidates/create`


<!-- END_0e32e1cc10ac16e49906d5715e1030a7 -->

<!-- START_304ed7287a2bfbfc810349ea6275b088 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/candidates" \
-H "Accept: application/json" \
    -d "title"="non" \
    -d "name"="non" \
    -d "other_names"="[&quot;foo&quot;,&quot;bar&quot;,&quot;baz&quot;]" \
    -d "email"="lemke.hailee@example.org" \
    -d "gender"="non" \
    -d "birth-date"="1980-04-15" \
    -d "death-date"="1980-04-15" \
    -d "image"="non" \
    -d "cover-image"="non" \
    -d "summary"="non" \
    -d "biography"="non" \
    -d "national_identity"="non" \
    -d "contact_details"="[&quot;foo&quot;,&quot;bar&quot;,&quot;baz&quot;]" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/candidates",
    "method": "POST",
    "data": {
        "title": "non",
        "name": "non",
        "other_names": "[\"foo\",\"bar\",\"baz\"]",
        "email": "lemke.hailee@example.org",
        "gender": "non",
        "birth-date": "1980-04-15",
        "death-date": "1980-04-15",
        "image": "non",
        "cover-image": "non",
        "summary": "non",
        "biography": "non",
        "national_identity": "non",
        "contact_details": "[\"foo\",\"bar\",\"baz\"]"
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
`POST api/v1/candidates`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    name | string |  required  | Maximum: `255`
    other_names | string |  optional  | Must be a valid JSON string.
    email | email |  required  | 
    gender | string |  required  | 
    birth-date | date |  required  | 
    death-date | date |  optional  | 
    image | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg)
    cover-image | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg)
    summary | string |  optional  | 
    biography | string |  required  | 
    national_identity | string |  optional  | 
    contact_details | string |  optional  | Must be a valid JSON string.

<!-- END_304ed7287a2bfbfc810349ea6275b088 -->

<!-- START_903f3a9aed1d94e6b43e05602db6b266 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/candidates/{candidate}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/candidates/{candidate}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/candidates/{candidate}`


<!-- END_903f3a9aed1d94e6b43e05602db6b266 -->

<!-- START_1d3201b871ec94840e47580e6c0141ff -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/candidates/{candidate}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/candidates/{candidate}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/candidates/{candidate}/edit`


<!-- END_1d3201b871ec94840e47580e6c0141ff -->

<!-- START_857511df16834453c5feb168f1123d68 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/candidates/{candidate}" \
-H "Accept: application/json" \
    -d "id"="32595" \
    -d "title"="ducimus" \
    -d "name"="ducimus" \
    -d "other_names"="[&quot;foo&quot;,&quot;bar&quot;,&quot;baz&quot;]" \
    -d "email"="evert.heller@example.net" \
    -d "gender"="ducimus" \
    -d "birth-date"="1991-10-23" \
    -d "death-date"="1991-10-23" \
    -d "image"="ducimus" \
    -d "cover-image"="ducimus" \
    -d "summary"="ducimus" \
    -d "biography"="ducimus" \
    -d "national_identity"="ducimus" \
    -d "contact_details"="[&quot;foo&quot;,&quot;bar&quot;,&quot;baz&quot;]" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/candidates/{candidate}",
    "method": "PUT",
    "data": {
        "id": 32595,
        "title": "ducimus",
        "name": "ducimus",
        "other_names": "[\"foo\",\"bar\",\"baz\"]",
        "email": "evert.heller@example.net",
        "gender": "ducimus",
        "birth-date": "1991-10-23",
        "death-date": "1991-10-23",
        "image": "ducimus",
        "cover-image": "ducimus",
        "summary": "ducimus",
        "biography": "ducimus",
        "national_identity": "ducimus",
        "contact_details": "[\"foo\",\"bar\",\"baz\"]"
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
`PUT api/v1/candidates/{candidate}`

`PATCH api/v1/candidates/{candidate}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | 
    title | string |  optional  | 
    name | string |  optional  | Maximum: `255`
    other_names | string |  optional  | Must be a valid JSON string.
    email | email |  optional  | 
    gender | string |  optional  | 
    birth-date | date |  optional  | 
    death-date | date |  optional  | 
    image | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg)
    cover-image | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg)
    summary | string |  optional  | 
    biography | string |  optional  | 
    national_identity | string |  optional  | 
    contact_details | string |  optional  | Must be a valid JSON string.

<!-- END_857511df16834453c5feb168f1123d68 -->

<!-- START_82a3956a95e79a8966c28dea82cdbb0e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/candidates/{candidate}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/candidates/{candidate}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/candidates/{candidate}`


<!-- END_82a3956a95e79a8966c28dea82cdbb0e -->

#Education

Education CRUD Resource and ...
<!-- START_4d340187a15b68650e3e26289826e457 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/educations" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/educations",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/educations`


<!-- END_4d340187a15b68650e3e26289826e457 -->

<!-- START_7f455f153ebbacc01b3a0c82c6f57759 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/educations/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/educations/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/educations/create`


<!-- END_7f455f153ebbacc01b3a0c82c6f57759 -->

<!-- START_0ed5bd2bb39fe562f55dbbf8204e30f5 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/educations" \
-H "Accept: application/json" \
    -d "candidate_id"="ut" \
    -d "levels"="[&quot;foo&quot;,&quot;bar&quot;,&quot;baz&quot;]" \
    -d "notes"="ut" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/educations",
    "method": "POST",
    "data": {
        "candidate_id": "ut",
        "levels": "[\"foo\",\"bar\",\"baz\"]",
        "notes": "ut"
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
`POST api/v1/educations`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    candidate_id | string |  required  | 
    levels | string |  optional  | Must be a valid JSON string.
    notes | string |  optional  | 

<!-- END_0ed5bd2bb39fe562f55dbbf8204e30f5 -->

<!-- START_1c44b52ad94fc0408fcc2c66464a095f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/educations/{education}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/educations/{education}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/educations/{education}`


<!-- END_1c44b52ad94fc0408fcc2c66464a095f -->

<!-- START_984ddba61b41203df126cd07b2c2f5a3 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/educations/{education}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/educations/{education}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/educations/{education}/edit`


<!-- END_984ddba61b41203df126cd07b2c2f5a3 -->

<!-- START_676e5de39359f34eb23363b340ae837a -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/educations/{education}" \
-H "Accept: application/json" \
    -d "id"="4907918" \
    -d "candidate_id"="quod" \
    -d "levels"="[&quot;foo&quot;,&quot;bar&quot;,&quot;baz&quot;]" \
    -d "notes"="quod" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/educations/{education}",
    "method": "PUT",
    "data": {
        "id": 4907918,
        "candidate_id": "quod",
        "levels": "[\"foo\",\"bar\",\"baz\"]",
        "notes": "quod"
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
`PUT api/v1/educations/{education}`

`PATCH api/v1/educations/{education}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | 
    candidate_id | string |  required  | 
    levels | string |  optional  | Must be a valid JSON string.
    notes | string |  optional  | 

<!-- END_676e5de39359f34eb23363b340ae837a -->

<!-- START_fbeaa20d6c471a803b9cc3cd796f346e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/educations/{education}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/educations/{education}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/educations/{education}`


<!-- END_fbeaa20d6c471a803b9cc3cd796f346e -->

#Election

Election CRUD Resource and ...
<!-- START_85b909af8cd46c6a6edb4d0891e74c91 -->
## Display a listing of the election resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/elections" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/elections",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/api\/v1\/elections?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v1\/elections?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v1\/elections",
    "per_page": 15,
    "prev_page_url": null,
    "to": null,
    "total": 0
}
```

### HTTP Request
`GET api/v1/elections`


<!-- END_85b909af8cd46c6a6edb4d0891e74c91 -->

<!-- START_887b9f3cdab078eb54a401e3dc6e2337 -->
## Show the form for creating a new election resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/elections/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/elections/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/elections/create`


<!-- END_887b9f3cdab078eb54a401e3dc6e2337 -->

<!-- START_21564cbbc3164e7e82a5a873f097b4e2 -->
## Store a newly created election resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/elections" \
-H "Accept: application/json" \
    -d "name"="qui" \
    -d "year"="96" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/elections",
    "method": "POST",
    "data": {
        "name": "qui",
        "year": 96
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
`POST api/v1/elections`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    year | integer |  required  | 

<!-- END_21564cbbc3164e7e82a5a873f097b4e2 -->

<!-- START_7104db941574e1f23ab663b92fe02038 -->
## Display the specified election resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/elections/{election}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/elections/{election}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/elections/{election}`


<!-- END_7104db941574e1f23ab663b92fe02038 -->

<!-- START_e0c5aa1843cb22d5d5f39dc65c4a04b2 -->
## Show the form for editing the specified election resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/elections/{election}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/elections/{election}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/elections/{election}/edit`


<!-- END_e0c5aa1843cb22d5d5f39dc65c4a04b2 -->

<!-- START_01e62b608aeeb820acce1781f1a89a7c -->
## Update the specified election resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/elections/{election}" \
-H "Accept: application/json" \
    -d "id"="84118" \
    -d "name"="quos" \
    -d "year"="84118" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/elections/{election}",
    "method": "PUT",
    "data": {
        "id": 84118,
        "name": "quos",
        "year": 84118
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
`PUT api/v1/elections/{election}`

`PATCH api/v1/elections/{election}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | Valid election id
    name | string |  optional  | 
    year | integer |  optional  | 

<!-- END_01e62b608aeeb820acce1781f1a89a7c -->

<!-- START_6dab54668f41baed4cfc659363909795 -->
## Remove the specified election resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/elections/{election}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/elections/{election}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/elections/{election}`


<!-- END_6dab54668f41baed4cfc659363909795 -->

#ElectionType

ElectionType CRUD Resource and ...
<!-- START_b8d43bc8a867e0cf9acfaf6375fa4da5 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/election-types" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/election-types",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/api\/v1\/election-types?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v1\/election-types?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v1\/election-types",
    "per_page": 15,
    "prev_page_url": null,
    "to": null,
    "total": 0
}
```

### HTTP Request
`GET api/v1/election-types`


<!-- END_b8d43bc8a867e0cf9acfaf6375fa4da5 -->

<!-- START_9b8f8ada932650ea7113cf358c6bbb3e -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/election-types/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/election-types/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/election-types/create`


<!-- END_9b8f8ada932650ea7113cf358c6bbb3e -->

<!-- START_d69d024dd5e929df8bc8d6c442c4d2a8 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/election-types" \
-H "Accept: application/json" \
    -d "candidate_id"="perspiciatis" \
    -d "levels"="[&quot;foo&quot;,&quot;bar&quot;,&quot;baz&quot;]" \
    -d "notes"="perspiciatis" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/election-types",
    "method": "POST",
    "data": {
        "candidate_id": "perspiciatis",
        "levels": "[\"foo\",\"bar\",\"baz\"]",
        "notes": "perspiciatis"
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
`POST api/v1/election-types`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    candidate_id | string |  required  | 
    levels | string |  optional  | Must be a valid JSON string.
    notes | string |  optional  | 

<!-- END_d69d024dd5e929df8bc8d6c442c4d2a8 -->

<!-- START_c762b5ccd540defc8f4e5df508ede344 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/election-types/{election_type}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/election-types/{election_type}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/election-types/{election_type}`


<!-- END_c762b5ccd540defc8f4e5df508ede344 -->

<!-- START_8e228a000ba9db71be80f8690498466a -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/election-types/{election_type}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/election-types/{election_type}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/election-types/{election_type}/edit`


<!-- END_8e228a000ba9db71be80f8690498466a -->

<!-- START_7bccbecfb298e46fcef8d7a13d60ffaa -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/election-types/{election_type}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/election-types/{election_type}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/election-types/{election_type}`

`PATCH api/v1/election-types/{election_type}`


<!-- END_7bccbecfb298e46fcef8d7a13d60ffaa -->

<!-- START_cdf9a4f6e541c83a1a8c85023ca97f45 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/election-types/{election_type}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/election-types/{election_type}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/election-types/{election_type}`


<!-- END_cdf9a4f6e541c83a1a8c85023ca97f45 -->

#Issue

Issue CRUD Resource and ...
<!-- START_f1adc84d8913bec7ce8a1d13770a5566 -->
## Display a listing of the Issue resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/issues" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/issues",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/issues`


<!-- END_f1adc84d8913bec7ce8a1d13770a5566 -->

<!-- START_e2c17327bfc79e50094255fb9c80194d -->
## Show the form for creating a new Issue resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/issues/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/issues/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/issues/create`


<!-- END_e2c17327bfc79e50094255fb9c80194d -->

<!-- START_0da248661f746ebebddda65e36e3cffc -->
## Store a newly created Issue resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/issues" \
-H "Accept: application/json" \
    -d "title"="sed" \
    -d "description"="sed" \
    -d "election_id"="sed" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/issues",
    "method": "POST",
    "data": {
        "title": "sed",
        "description": "sed",
        "election_id": "sed"
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
`POST api/v1/issues`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | Maximum: `225`
    description | string |  optional  | 
    election_id | string |  required  | Valid election election_id

<!-- END_0da248661f746ebebddda65e36e3cffc -->

<!-- START_9358d4fd6cc4fe35fde4b816506da9b1 -->
## Display the specified Issue resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/issues/{issue}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/issues/{issue}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/issues/{issue}`


<!-- END_9358d4fd6cc4fe35fde4b816506da9b1 -->

<!-- START_0e09e3b1cf8b44e5366c6ed1f4bb0f87 -->
## Show the form for editing the specified Issue resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/issues/{issue}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/issues/{issue}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/issues/{issue}/edit`


<!-- END_0e09e3b1cf8b44e5366c6ed1f4bb0f87 -->

<!-- START_c2d860897e39e888ec9725c44fd1aa1c -->
## Update the specified Issue resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/issues/{issue}" \
-H "Accept: application/json" \
    -d "id"="63" \
    -d "title"="eos" \
    -d "description"="eos" \
    -d "election_id"="eos" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/issues/{issue}",
    "method": "PUT",
    "data": {
        "id": 63,
        "title": "eos",
        "description": "eos",
        "election_id": "eos"
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
`PUT api/v1/issues/{issue}`

`PATCH api/v1/issues/{issue}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | 
    title | string |  optional  | Maximum: `225`
    description | string |  optional  | 
    election_id | string |  required  | Valid election election_id

<!-- END_c2d860897e39e888ec9725c44fd1aa1c -->

<!-- START_9127185b87682f8ff0064fac1272a80c -->
## Remove the specified Issue resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/issues/{issue}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/issues/{issue}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/issues/{issue}`


<!-- END_9127185b87682f8ff0064fac1272a80c -->

#IssuePosition

IssuePosition CRUD Resource and ...
<!-- START_89630927e77f061f6fcdf69ac8a8f377 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/issuePositions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/issuePositions",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/api\/v1\/issuePositions?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v1\/issuePositions?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v1\/issuePositions",
    "per_page": 15,
    "prev_page_url": null,
    "to": null,
    "total": 0
}
```

### HTTP Request
`GET api/v1/issuePositions`


<!-- END_89630927e77f061f6fcdf69ac8a8f377 -->

<!-- START_b53d2f1b80961bf3ac23d35f55dfc22c -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/issuePositions/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/issuePositions/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/issuePositions/create`


<!-- END_b53d2f1b80961bf3ac23d35f55dfc22c -->

<!-- START_38cf2aacafba1eba5bf7102abe4e4fc6 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/issuePositions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/issuePositions",
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
`POST api/v1/issuePositions`


<!-- END_38cf2aacafba1eba5bf7102abe4e4fc6 -->

<!-- START_666147ef084151277a143a62fda6d044 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/issuePositions/{issuePosition}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/issuePositions/{issuePosition}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/issuePositions/{issuePosition}`


<!-- END_666147ef084151277a143a62fda6d044 -->

<!-- START_0e371a655588212590a7aafda3f38d1a -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/issuePositions/{issuePosition}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/issuePositions/{issuePosition}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/issuePositions/{issuePosition}/edit`


<!-- END_0e371a655588212590a7aafda3f38d1a -->

<!-- START_424fc72bdb1d20febe2f3452fd43911f -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/issuePositions/{issuePosition}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/issuePositions/{issuePosition}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/issuePositions/{issuePosition}`

`PATCH api/v1/issuePositions/{issuePosition}`


<!-- END_424fc72bdb1d20febe2f3452fd43911f -->

<!-- START_86502cc21c955fa84343d2bfe8326aa6 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/issuePositions/{issuePosition}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/issuePositions/{issuePosition}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/issuePositions/{issuePosition}`


<!-- END_86502cc21c955fa84343d2bfe8326aa6 -->

#Membership

Membership CRUD Resource and ...
<!-- START_2d342eface274147fc61616c7631aea3 -->
## Display a listing of the Membership resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/memberships" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/memberships",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/api\/v1\/memberships?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v1\/memberships?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v1\/memberships",
    "per_page": 15,
    "prev_page_url": null,
    "to": null,
    "total": 0
}
```

### HTTP Request
`GET api/v1/memberships`


<!-- END_2d342eface274147fc61616c7631aea3 -->

<!-- START_eab994ee0ed599821452fac8616eb2d2 -->
## Show the form for creating a new Membership resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/memberships/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/memberships/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/memberships/create`


<!-- END_eab994ee0ed599821452fac8616eb2d2 -->

<!-- START_e353a444a3f8e0db7c63f8d97cd46116 -->
## Store a newly created Membership resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/memberships" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/memberships",
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
`POST api/v1/memberships`


<!-- END_e353a444a3f8e0db7c63f8d97cd46116 -->

<!-- START_4f12e514b117014725f58a6abe92411b -->
## Display the specified Membership resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/memberships/{membership}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/memberships/{membership}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/memberships/{membership}`


<!-- END_4f12e514b117014725f58a6abe92411b -->

<!-- START_0b9ea174acd86a434b8587f3b10f7828 -->
## Show the form for editing the specified Membership resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/memberships/{membership}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/memberships/{membership}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/memberships/{membership}/edit`


<!-- END_0b9ea174acd86a434b8587f3b10f7828 -->

<!-- START_e570c052175c91264019087b5d836007 -->
## Update the specified Membership resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/memberships/{membership}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/memberships/{membership}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/memberships/{membership}`

`PATCH api/v1/memberships/{membership}`


<!-- END_e570c052175c91264019087b5d836007 -->

<!-- START_f92720722d4a7bcebbd68ac33e0c7dab -->
## Remove the specified Membership resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/memberships/{membership}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/memberships/{membership}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/memberships/{membership}`


<!-- END_f92720722d4a7bcebbd68ac33e0c7dab -->

#Office

Office CRUD Resource and ...
<!-- START_e0fdf3b324de0a26f7ab2a109561d9f0 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/offices" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/offices",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/api\/v1\/offices?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v1\/offices?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v1\/offices",
    "per_page": 15,
    "prev_page_url": null,
    "to": null,
    "total": 0
}
```

### HTTP Request
`GET api/v1/offices`


<!-- END_e0fdf3b324de0a26f7ab2a109561d9f0 -->

<!-- START_af9f2e25ea13d88666d92af37b3f4398 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/offices/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/offices/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/offices/create`


<!-- END_af9f2e25ea13d88666d92af37b3f4398 -->

<!-- START_fd04e03b14de6c9023cc1344dca029a3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/offices" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/offices",
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
`POST api/v1/offices`


<!-- END_fd04e03b14de6c9023cc1344dca029a3 -->

<!-- START_9693401d05dd07994b96340e69e0a736 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/offices/{office}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/offices/{office}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/offices/{office}`


<!-- END_9693401d05dd07994b96340e69e0a736 -->

<!-- START_97a2a14fd980614a996fc15de4f15346 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/offices/{office}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/offices/{office}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/offices/{office}/edit`


<!-- END_97a2a14fd980614a996fc15de4f15346 -->

<!-- START_ff57b906bbf30f24a2e5e8b4e64bd687 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/offices/{office}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/offices/{office}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/offices/{office}`

`PATCH api/v1/offices/{office}`


<!-- END_ff57b906bbf30f24a2e5e8b4e64bd687 -->

<!-- START_7591a33c7aec69f21c94ea8208cca238 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/offices/{office}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/offices/{office}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/offices/{office}`


<!-- END_7591a33c7aec69f21c94ea8208cca238 -->

#OfficeType

OfficeType CRUD Resource and ...
<!-- START_e7c2eca9faca13ed73eb481eb271b7b9 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/office-types" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/office-types",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/api\/v1\/office-types?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v1\/office-types?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v1\/office-types",
    "per_page": 15,
    "prev_page_url": null,
    "to": null,
    "total": 0
}
```

### HTTP Request
`GET api/v1/office-types`


<!-- END_e7c2eca9faca13ed73eb481eb271b7b9 -->

<!-- START_026dad414377f712ad72be4fb588c2f4 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/office-types/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/office-types/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/office-types/create`


<!-- END_026dad414377f712ad72be4fb588c2f4 -->

<!-- START_42816a1bfbf8d5d18dcd4b552125415c -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/office-types" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/office-types",
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
`POST api/v1/office-types`


<!-- END_42816a1bfbf8d5d18dcd4b552125415c -->

<!-- START_9af253477de08bae38b0e40a598b4905 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/office-types/{office_type}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/office-types/{office_type}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/office-types/{office_type}`


<!-- END_9af253477de08bae38b0e40a598b4905 -->

<!-- START_71a9bb686096762ec033e63b45dfc516 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/office-types/{office_type}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/office-types/{office_type}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/office-types/{office_type}/edit`


<!-- END_71a9bb686096762ec033e63b45dfc516 -->

<!-- START_198dc3187e6c4dca4ecd1bc7b22e397a -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/office-types/{office_type}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/office-types/{office_type}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/office-types/{office_type}`

`PATCH api/v1/office-types/{office_type}`


<!-- END_198dc3187e6c4dca4ecd1bc7b22e397a -->

<!-- START_236b228ce7a0f9fec59cc03adc16a4a3 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/office-types/{office_type}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/office-types/{office_type}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/office-types/{office_type}`


<!-- END_236b228ce7a0f9fec59cc03adc16a4a3 -->

#Politician

Politician CRUD Resource and ...
<!-- START_fc7fb7e2ec5f70bb12fb7408ef7db5d2 -->
## Display a listing of the Politician resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/politicians" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/politicians",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/api\/v1\/politicians?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v1\/politicians?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v1\/politicians",
    "per_page": 15,
    "prev_page_url": null,
    "to": null,
    "total": 0
}
```

### HTTP Request
`GET api/v1/politicians`


<!-- END_fc7fb7e2ec5f70bb12fb7408ef7db5d2 -->

<!-- START_d5bed3305524cabd9078fd6c9c0a53a2 -->
## Show the form for creating a new Politician resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/politicians/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/politicians/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/politicians/create`


<!-- END_d5bed3305524cabd9078fd6c9c0a53a2 -->

<!-- START_62953582be5e1229b7449c3251bc376b -->
## Store a newly created Politician resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/politicians" \
-H "Accept: application/json" \
    -d "title"="quia" \
    -d "name"="quia" \
    -d "other_names"="[&quot;foo&quot;,&quot;bar&quot;,&quot;baz&quot;]" \
    -d "email"="hessel.claire@example.com" \
    -d "gender"="male" \
    -d "birth-date"="1976-01-26" \
    -d "death-date"="1976-01-26" \
    -d "image"="http://hessel.com/" \
    -d "cover-image"="http://hessel.com/" \
    -d "summary"="quia" \
    -d "biography"="quia" \
    -d "national_identity"="quia" \
    -d "contact_details"="[&quot;foo&quot;,&quot;bar&quot;,&quot;baz&quot;]" \
    -d "links"="[&quot;foo&quot;,&quot;bar&quot;,&quot;baz&quot;]" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/politicians",
    "method": "POST",
    "data": {
        "title": "quia",
        "name": "quia",
        "other_names": "[\"foo\",\"bar\",\"baz\"]",
        "email": "hessel.claire@example.com",
        "gender": "male",
        "birth-date": "1976-01-26",
        "death-date": "1976-01-26",
        "image": "http:\/\/hessel.com\/",
        "cover-image": "http:\/\/hessel.com\/",
        "summary": "quia",
        "biography": "quia",
        "national_identity": "quia",
        "contact_details": "[\"foo\",\"bar\",\"baz\"]",
        "links": "[\"foo\",\"bar\",\"baz\"]"
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
`POST api/v1/politicians`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | Maximum: `25`
    name | string |  required  | Maximum: `25`
    other_names | string |  optional  | Must be a valid JSON string.
    email | email |  required  | 
    gender | string |  required  | `male` or `female`
    birth-date | date |  optional  | 
    death-date | date |  optional  | 
    image | url |  optional  | 
    cover-image | url |  optional  | 
    summary | string |  optional  | 
    biography | string |  optional  | 
    national_identity | string |  optional  | 
    contact_details | string |  optional  | Must be a valid JSON string.
    links | string |  optional  | Must be a valid JSON string.

<!-- END_62953582be5e1229b7449c3251bc376b -->

<!-- START_b01589c790008dac98af6119817dc217 -->
## Display the specified Politician resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/politicians/{politician}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/politicians/{politician}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/politicians/{politician}`


<!-- END_b01589c790008dac98af6119817dc217 -->

<!-- START_64940f1520e6fb42c8f27702dd6442a0 -->
## Show the form for editing the specified Politician resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/politicians/{politician}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/politicians/{politician}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/politicians/{politician}/edit`


<!-- END_64940f1520e6fb42c8f27702dd6442a0 -->

<!-- START_415f1426227981a109e7ae15839d0374 -->
## Update the specified Politician resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/politicians/{politician}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/politicians/{politician}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/politicians/{politician}`

`PATCH api/v1/politicians/{politician}`


<!-- END_415f1426227981a109e7ae15839d0374 -->

<!-- START_9f8ca189b8e710a661a8dba53f9a9575 -->
## Remove the specified Politician resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/politicians/{politician}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/politicians/{politician}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/politicians/{politician}`


<!-- END_9f8ca189b8e710a661a8dba53f9a9575 -->

#Position

Position CRUD Resource and ...
<!-- START_6caa5bf56397ec8b3e3f066edf54d9ac -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/positions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/positions",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/api\/v1\/positions?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v1\/positions?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v1\/positions",
    "per_page": 15,
    "prev_page_url": null,
    "to": null,
    "total": 0
}
```

### HTTP Request
`GET api/v1/positions`


<!-- END_6caa5bf56397ec8b3e3f066edf54d9ac -->

<!-- START_371289ff51ce1b9934f3dcec5f9ea97a -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/positions/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/positions/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/positions/create`


<!-- END_371289ff51ce1b9934f3dcec5f9ea97a -->

<!-- START_9a521774646247b1e29363355b3410b9 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/positions" \
-H "Accept: application/json" \
    -d "role"="id" \
    -d "political_party_id"="id" \
    -d "position"="id" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/positions",
    "method": "POST",
    "data": {
        "role": "id",
        "political_party_id": "id",
        "position": "id"
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
`POST api/v1/positions`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    role | string |  optional  | 
    political_party_id | string |  required  | 
    position | string |  required  | 

<!-- END_9a521774646247b1e29363355b3410b9 -->

<!-- START_a624cd1ace79089cd1da7bea75fd8cf2 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/positions/{position}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/positions/{position}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET api/v1/positions/{position}`


<!-- END_a624cd1ace79089cd1da7bea75fd8cf2 -->

<!-- START_0bbaed13d8e7cb3c761344bd3228c051 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/positions/{position}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/positions/{position}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/positions/{position}/edit`


<!-- END_0bbaed13d8e7cb3c761344bd3228c051 -->

<!-- START_912c914c317a2a1924f07de84914becd -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/positions/{position}" \
-H "Accept: application/json" \
    -d "id"="91867" \
    -d "role"="qui" \
    -d "political_party_id"="qui" \
    -d "position"="qui" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/positions/{position}",
    "method": "PUT",
    "data": {
        "id": 91867,
        "role": "qui",
        "political_party_id": "qui",
        "position": "qui"
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
`PUT api/v1/positions/{position}`

`PATCH api/v1/positions/{position}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  optional  | 
    role | string |  optional  | 
    political_party_id | string |  required  | 
    position | string |  required  | 

<!-- END_912c914c317a2a1924f07de84914becd -->

<!-- START_d79eb75a14cd5d294d386c60a99c0889 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/positions/{position}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/positions/{position}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/positions/{position}`


<!-- END_d79eb75a14cd5d294d386c60a99c0889 -->

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
    -d "id"="95552243" \
    -d "first_name"="dolor" \
    -d "last_name"="dolor" \
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
        "id": 95552243,
        "first_name": "dolor",
        "last_name": "dolor",
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
    id | integer |  required  | 
    first_name | string |  required  | 
    last_name | string |  required  | 
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

