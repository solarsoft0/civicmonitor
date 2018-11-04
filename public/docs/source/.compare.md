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
<!-- START_9c68d1ebd8a35a27bacb5d2394a90d04 -->
## Get a Candidate Issue Positions.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/candidates/{candidate}/issue-positions" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/candidates/{candidate}/issue-positions",
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
[
    {
        "id": 5,
        "election_id": 1,
        "election_type_id": 3,
        "office_id": 1,
        "membership_id": 2,
        "created_at": "2018-11-02 08:28:46",
        "updated_at": "2018-11-02 08:28:46",
        "issue_positions": [
            {
                "id": 1,
                "issue_id": 1,
                "candidate_id": 5,
                "title": "MY position on this issue",
                "body": "<div><em>“Our economy has witnessed serious macroeconomic distortions and dislocations over the years. Spiraling inflation, unemployment, gross capacity under-utilization in our industries, and the over-dependence on oil revenues have remained with us for a very long time now. To address these central problems which underline other economic difficulties we covenant to diversity the National Economy by encouraging development in non-petroleum producing sectors in order to reduce dependence on oil a main source of our National income as follows:&nbsp;<\/em><\/div><div><em>&nbsp;Increase efficiency and productivity in agriculture, mining, and manufacturing sector.&nbsp;<\/em><\/div><div><em>Embark on gas development, conversion and utilization programmes.&nbsp;<\/em><\/div><div><em>Promote exports through various incentives. Support massive applied scientific research and development for production of necessary goods for economic emancipation.&nbsp;<\/em><\/div><div><em>Encourage the establishment and development of ‘small medium scale enterprises as engines of; economic growth.<\/em><\/div><div><em>Create a suitable environment for foreign investment to flow into the, country.&nbsp;<\/em><\/div><div><em>Strengthen the Naira so that it may freely find its true value in the international currency market.&nbsp;<\/em><\/div><div><em>Formulate and implement disciplined, budget, fiscal and monetary policies.<\/em><\/div><div><em>Work assiduously, to eradicate corruption, fraud, embezzlement and the so-called “Nigerian Way” and to enthrone a new culture of integrity, Transparency and Accountability.&nbsp;<\/em><\/div><ul><li><em>Put the organized private sector into more confidence so that they can be genuinely involved in the revamping and management of the national economy.&nbsp;<\/em><\/li><\/ul><div><em>Turn the abundant arable land of this country to be the food basket of Africa and oven the world.<\/em><\/div><div><em>Encourage industrialists to develop local substitutes for important raw materials and to use the raw materials front put enhanced agricultural production the catalyst for our industrial revolution.<\/em><\/div><div><em>Cut out waste in public finance.<\/em><\/div><div><em>Set out targets for growth rates in the economic.&nbsp;<\/em><\/div><div><em>Enlist the interest of labour unions in all activities so that peaceful relations can be created in the country.<\/em><\/div><div><em>Put in place an energy policy that will ensure efficient exploitation, distribution and&nbsp;<\/em><\/div><div><br><br><\/div>",
                "audio": null,
                "infographic": null,
                "sources": "{\"source_link\":null}",
                "created_at": "2018-11-02 09:16:53",
                "updated_at": "2018-11-02 09:16:53",
                "issue": {
                    "id": 1,
                    "title": "Economy + inclusive growth",
                    "description": "More Description",
                    "election_id": 1,
                    "created_at": "2018-11-02 09:15:05",
                    "updated_at": "2018-11-02 09:15:05"
                }
            }
        ]
    }
]
```

### HTTP Request
`GET api/v2/candidates/{candidate}/issue-positions`


<!-- END_9c68d1ebd8a35a27bacb5d2394a90d04 -->

<!-- START_cf2ff0457f9e9033cd4b4cfe645a18a9 -->
## Get a Candidate Political Parties.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/candidates/{candidate}/political-parties" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/candidates/{candidate}/political-parties",
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
    "id": 1,
    "name": "All Progressives Congress",
    "description": "The All Progressives Congress is a political party in Nigeria, formed on 6 February 2013 in anticipation of the 2015 elections.",
    "acronym": "APC",
    "logo": "lZoBTYud5VqjBxYQNkPR8a1zti1ysZTTNFUGVLta.jpeg",
    "founded_date": "2013-02-06 00:00:00",
    "created_at": "2018-11-01 15:49:27",
    "updated_at": "2018-11-01 15:49:27"
}
```

### HTTP Request
`GET api/v2/candidates/{candidate}/political-parties`


<!-- END_cf2ff0457f9e9033cd4b4cfe645a18a9 -->

<!-- START_ebf67d75cab0b506c333d4e3de7075d6 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/candidates" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/candidates",
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
    "data": [
        {
            "id": 5,
            "election_id": 1,
            "election_type_id": 3,
            "office_id": 1,
            "membership_id": 2,
            "created_at": "2018-11-02 08:28:46",
            "updated_at": "2018-11-02 08:28:46"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v2\/candidates?page=1",
        "last": "http:\/\/localhost\/api\/v2\/candidates?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/v2\/candidates",
        "per_page": 15,
        "to": 1,
        "total": 1
    }
}
```

### HTTP Request
`GET api/v2/candidates`


<!-- END_ebf67d75cab0b506c333d4e3de7075d6 -->

<!-- START_6e6184fca7716c8d5047fe9e500f12a0 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/candidates/{candidate}" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/candidates/{candidate}",
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
`GET api/v2/candidates/{candidate}`


<!-- END_6e6184fca7716c8d5047fe9e500f12a0 -->

#Education

Education CRUD Resource and ...
<!-- START_b58a47a36f9cee893f2dc9a67c31c1a3 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/educations" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/educations",
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
`GET api/v2/educations`


<!-- END_b58a47a36f9cee893f2dc9a67c31c1a3 -->

<!-- START_53649b5a334694beb186850ee55f760e -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/educations/{education}" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/educations/{education}",
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
`GET api/v2/educations/{education}`


<!-- END_53649b5a334694beb186850ee55f760e -->

#Election

Election CRUD Resource and ...
<!-- START_f63aec21faf9cbb1021a8ad6383e9d84 -->
## Display a listing of the election resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/elections" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/elections",
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
    "data": [
        {
            "id": 1,
            "name": "Election 2019",
            "year": 2019
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/v2\/elections?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v2\/elections?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v2\/elections",
    "per_page": 15,
    "prev_page_url": null,
    "to": 1,
    "total": 1
}
```

### HTTP Request
`GET api/v2/elections`


<!-- END_f63aec21faf9cbb1021a8ad6383e9d84 -->

<!-- START_974114326a84e3e47c4f2f0e5aa2bfad -->
## Display the specified election resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/elections/{election}" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/elections/{election}",
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
`GET api/v2/elections/{election}`


<!-- END_974114326a84e3e47c4f2f0e5aa2bfad -->

#ElectionType

ElectionType CRUD Resource and ...
<!-- START_f5ebe33c98725bfda6f17536790d9209 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/election-types" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/election-types",
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
    "data": [
        {
            "id": 3,
            "name": "General Election"
        },
        {
            "id": 4,
            "name": "Primary Election"
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/v2\/election-types?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v2\/election-types?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v2\/election-types",
    "per_page": 15,
    "prev_page_url": null,
    "to": 2,
    "total": 2
}
```

### HTTP Request
`GET api/v2/election-types`


<!-- END_f5ebe33c98725bfda6f17536790d9209 -->

<!-- START_e3f5ebc940f9832def5e8632a27533e7 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/election-types/{election_type}" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/election-types/{election_type}",
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
`GET api/v2/election-types/{election_type}`


<!-- END_e3f5ebc940f9832def5e8632a27533e7 -->

#Issue

Issue CRUD Resource and ...
<!-- START_bb464e2c36d52508cb7d0e5057e0b137 -->
## Display a listing of the Issue resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/issues" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/issues",
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
[
    {
        "id": 1,
        "title": "Economy + inclusive growth",
        "description": "More Description",
        "election_id": 1,
        "created_at": "2018-11-02 09:15:05",
        "updated_at": "2018-11-02 09:15:05"
    }
]
```

### HTTP Request
`GET api/v2/issues`


<!-- END_bb464e2c36d52508cb7d0e5057e0b137 -->

<!-- START_f3fb293673f07c874bf475272972af20 -->
## Display the specified Issue resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/issues/{issue}" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/issues/{issue}",
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
`GET api/v2/issues/{issue}`


<!-- END_f3fb293673f07c874bf475272972af20 -->

#IssuePosition

IssuePosition CRUD Resource and ...
<!-- START_36cd17a426c1cc0f13c45eba0407c7b1 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/issuePositions" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/issuePositions",
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
    "data": [
        {
            "id": 1,
            "issue_id": 1,
            "candidate_id": 5,
            "title": "MY position on this issue",
            "body": "<div><em>“Our economy has witnessed serious macroeconomic distortions and dislocations over the years. Spiraling inflation, unemployment, gross capacity under-utilization in our industries, and the over-dependence on oil revenues have remained with us for a very long time now. To address these central problems which underline other economic difficulties we covenant to diversity the National Economy by encouraging development in non-petroleum producing sectors in order to reduce dependence on oil a main source of our National income as follows:&nbsp;<\/em><\/div><div><em>&nbsp;Increase efficiency and productivity in agriculture, mining, and manufacturing sector.&nbsp;<\/em><\/div><div><em>Embark on gas development, conversion and utilization programmes.&nbsp;<\/em><\/div><div><em>Promote exports through various incentives. Support massive applied scientific research and development for production of necessary goods for economic emancipation.&nbsp;<\/em><\/div><div><em>Encourage the establishment and development of ‘small medium scale enterprises as engines of; economic growth.<\/em><\/div><div><em>Create a suitable environment for foreign investment to flow into the, country.&nbsp;<\/em><\/div><div><em>Strengthen the Naira so that it may freely find its true value in the international currency market.&nbsp;<\/em><\/div><div><em>Formulate and implement disciplined, budget, fiscal and monetary policies.<\/em><\/div><div><em>Work assiduously, to eradicate corruption, fraud, embezzlement and the so-called “Nigerian Way” and to enthrone a new culture of integrity, Transparency and Accountability.&nbsp;<\/em><\/div><ul><li><em>Put the organized private sector into more confidence so that they can be genuinely involved in the revamping and management of the national economy.&nbsp;<\/em><\/li><\/ul><div><em>Turn the abundant arable land of this country to be the food basket of Africa and oven the world.<\/em><\/div><div><em>Encourage industrialists to develop local substitutes for important raw materials and to use the raw materials front put enhanced agricultural production the catalyst for our industrial revolution.<\/em><\/div><div><em>Cut out waste in public finance.<\/em><\/div><div><em>Set out targets for growth rates in the economic.&nbsp;<\/em><\/div><div><em>Enlist the interest of labour unions in all activities so that peaceful relations can be created in the country.<\/em><\/div><div><em>Put in place an energy policy that will ensure efficient exploitation, distribution and&nbsp;<\/em><\/div><div><br><br><\/div>",
            "audio": null,
            "infographic": null,
            "sources": "{\"source_link\":null}",
            "created_at": "2018-11-02 09:16:53",
            "updated_at": "2018-11-02 09:16:53"
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/v2\/issuePositions?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v2\/issuePositions?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v2\/issuePositions",
    "per_page": 15,
    "prev_page_url": null,
    "to": 1,
    "total": 1
}
```

### HTTP Request
`GET api/v2/issuePositions`


<!-- END_36cd17a426c1cc0f13c45eba0407c7b1 -->

<!-- START_d455ebadcf02d7dbbf3c580b81ea406c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/issuePositions/{issuePosition}" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/issuePositions/{issuePosition}",
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
`GET api/v2/issuePositions/{issuePosition}`


<!-- END_d455ebadcf02d7dbbf3c580b81ea406c -->

#Membership

Membership CRUD Resource and ...
<!-- START_31001777264b7e2a5e915b8970b90f88 -->
## Display a listing of the Membership resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/memberships" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/memberships",
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
    "data": [
        {
            "id": 1,
            "politician_id": 1,
            "political_party_id": 1,
            "position_id": 2,
            "start_date": "2018-11-15 00:00:00",
            "end_date": null,
            "created_at": "2018-11-01 16:51:45",
            "updated_at": "2018-11-01 16:51:45"
        },
        {
            "id": 2,
            "politician_id": 2,
            "political_party_id": 1,
            "position_id": 1,
            "start_date": "2018-11-24 00:00:00",
            "end_date": null,
            "created_at": "2018-11-02 07:28:38",
            "updated_at": "2018-11-02 07:28:38"
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/v2\/memberships?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v2\/memberships?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v2\/memberships",
    "per_page": 15,
    "prev_page_url": null,
    "to": 2,
    "total": 2
}
```

### HTTP Request
`GET api/v2/memberships`


<!-- END_31001777264b7e2a5e915b8970b90f88 -->

<!-- START_dd19c9942865ac53c511261bf3afa0ee -->
## Display the specified Membership resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/memberships/{membership}" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/memberships/{membership}",
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
`GET api/v2/memberships/{membership}`


<!-- END_dd19c9942865ac53c511261bf3afa0ee -->

#Office

Office CRUD Resource and ...
<!-- START_30dd107bce3240f5cf3d1aaf2d67de5b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/offices" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/offices",
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
    "data": [
        {
            "id": 1,
            "office_type_id": 2,
            "name": "President of Nigeria",
            "meta": "{\"state\":null,\"local_goverment\":null,\"other_information\":null}",
            "created_at": "2018-11-02 08:18:57",
            "updated_at": "2018-11-02 08:18:57"
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/v2\/offices?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v2\/offices?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v2\/offices",
    "per_page": 15,
    "prev_page_url": null,
    "to": 1,
    "total": 1
}
```

### HTTP Request
`GET api/v2/offices`


<!-- END_30dd107bce3240f5cf3d1aaf2d67de5b -->

<!-- START_e245d680fd971ac9e4f51f5d5172e32e -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/offices/{office}" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/offices/{office}",
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
`GET api/v2/offices/{office}`


<!-- END_e245d680fd971ac9e4f51f5d5172e32e -->

#OfficeType

OfficeType CRUD Resource and ...
<!-- START_424fbcf5d9d92477ff6456ddccef5375 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/office-types" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/office-types",
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
    "data": [
        {
            "id": 2,
            "name": "Presidential Offfice",
            "description": "office of the president",
            "created_at": "2018-11-02 08:17:55",
            "updated_at": "2018-11-02 08:17:55"
        },
        {
            "id": 3,
            "name": "Governorship Office",
            "description": "Office of the Governors",
            "created_at": "2018-11-02 08:18:30",
            "updated_at": "2018-11-02 08:18:30"
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/v2\/office-types?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v2\/office-types?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v2\/office-types",
    "per_page": 15,
    "prev_page_url": null,
    "to": 2,
    "total": 2
}
```

### HTTP Request
`GET api/v2/office-types`


<!-- END_424fbcf5d9d92477ff6456ddccef5375 -->

<!-- START_1915c4f14f706caa7a183eca839306ee -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/office-types/{office_type}" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/office-types/{office_type}",
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
`GET api/v2/office-types/{office_type}`


<!-- END_1915c4f14f706caa7a183eca839306ee -->

#Politician

Politician CRUD Resource and ...
<!-- START_bde99f77b5455a62e1dacc20eb89b1dd -->
## Display a listing of the Politician resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/politicians" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/politicians",
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
    "data": [
        {
            "id": 1,
            "title": "Mr",
            "name": "Okanlawon Emmanuel",
            "other_names": "{\"name\":\"ayodele\",\"start_date\":null,\"end_date\":null,\"note\":null}",
            "email": "okanlawonemmanuel41@gmail.com",
            "gender": "Okanlawon Emmanuel",
            "birth_date": "2018-11-28 00:00:00",
            "death_date": "2018-11-07 00:00:00",
            "image": "JmCGiyeQHtWzyJ97mwuYsyEZVtcB9PQQoxabDR9j.jpeg",
            "cover_image": "25lcoL3cOXMR0NjjXp5FL2LSrmhTDjywDPx6xVws.jpeg",
            "summary": "this is a summary",
            "biography": "<div>okanlawon emmanuel<\/div>",
            "national_identity": "Nigerian",
            "contact_details": "{\"contact_detail_1\":\"Contact Detail 1\",\"contact_detail_2\":\"Contact Detail 2\"}",
            "links": "{\"website\":\"www.facebook.com\",\"social\":null}",
            "created_at": "2018-11-01 15:33:02",
            "updated_at": "2018-11-01 15:38:06",
            "candidates": [],
            "memberships": [
                {
                    "id": 1,
                    "politician_id": 1,
                    "political_party_id": 1,
                    "position_id": 2,
                    "start_date": "2018-11-15 00:00:00",
                    "end_date": null,
                    "created_at": "2018-11-01 16:51:45",
                    "updated_at": "2018-11-01 16:51:45"
                }
            ]
        },
        {
            "id": 2,
            "title": "Mr",
            "name": "Faith Kalu",
            "other_names": "{\"name\":\"Isick\",\"start_date\":null,\"end_date\":null,\"note\":null}",
            "email": "obigtechnologies@gmail.com",
            "gender": "Male",
            "birth_date": "2018-11-22 00:00:00",
            "death_date": "2018-11-23 00:00:00",
            "image": "4h0GuiirdJMRNCfTGXXjylmV6qo0cUD5GSiqnEI2.png",
            "cover_image": "C5gTf9znuUjoWQQw99jD52pLo4wKgOOMkLgc0iuo.jpeg",
            "summary": "This is another Politician",
            "biography": "<div>This is another Politician biography<\/div>",
            "national_identity": "Nigerian",
            "contact_details": "{\"contact_detail_1\":\"Contact Detail 1\",\"contact_detail_2\":\"ontact Detail 2\"}",
            "links": "{\"website\":null,\"social-media\":null}",
            "created_at": "2018-11-02 07:28:16",
            "updated_at": "2018-11-02 07:28:16",
            "candidates": [
                {
                    "id": 5,
                    "election_id": 1,
                    "election_type_id": 3,
                    "office_id": 1,
                    "membership_id": 2,
                    "created_at": "2018-11-02 08:28:46",
                    "updated_at": "2018-11-02 08:28:46",
                    "politician_id": 2
                }
            ],
            "memberships": [
                {
                    "id": 2,
                    "politician_id": 2,
                    "political_party_id": 1,
                    "position_id": 1,
                    "start_date": "2018-11-24 00:00:00",
                    "end_date": null,
                    "created_at": "2018-11-02 07:28:38",
                    "updated_at": "2018-11-02 07:28:38"
                }
            ]
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/v2\/politicians?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v2\/politicians?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v2\/politicians",
    "per_page": 15,
    "prev_page_url": null,
    "to": 2,
    "total": 2
}
```

### HTTP Request
`GET api/v2/politicians`


<!-- END_bde99f77b5455a62e1dacc20eb89b1dd -->

<!-- START_92c3c96ec46f0cf250f3794ced81f6ba -->
## Display the specified Politician resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/politicians/{politician}" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/politicians/{politician}",
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
`GET api/v2/politicians/{politician}`


<!-- END_92c3c96ec46f0cf250f3794ced81f6ba -->

#Position

Position CRUD Resource and ...
<!-- START_fd1df2fcd43f75d8e4ab6e54f1e55454 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/positions" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/positions",
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
    "data": [
        {
            "id": 1,
            "position": "Member",
            "role_description": "A member of a Party",
            "created_at": "2018-11-01 16:48:13",
            "updated_at": "2018-11-01 16:48:13"
        },
        {
            "id": 2,
            "position": "Chairman",
            "role_description": "Chairman of the Party",
            "created_at": "2018-11-01 16:48:44",
            "updated_at": "2018-11-01 16:48:44"
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/v2\/positions?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/v2\/positions?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/v2\/positions",
    "per_page": 15,
    "prev_page_url": null,
    "to": 2,
    "total": 2
}
```

### HTTP Request
`GET api/v2/positions`


<!-- END_fd1df2fcd43f75d8e4ab6e54f1e55454 -->

<!-- START_ff6718600b3d1c16140813fe374e8be9 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v2/positions/{position}" \
    -H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v2/positions/{position}",
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
`GET api/v2/positions/{position}`


<!-- END_ff6718600b3d1c16140813fe374e8be9 -->


