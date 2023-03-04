# API Based Notes App

## View : 
![alt text](_resources/images/view.png)
This Repo has only Backend codes for the notes app(Soon it'll be available as python app or android app) which follows OAuth 2.0, REST API Protocols.

## Login API

### Request
```
POST /auth/login
```

#### Form Data
| Attribute | Description |
| ------ | ------ |
| username | Can be username or email address of the registered user |
| password | Password provided by the user |

### Response
There are 3 type of responses each associated with a status code.
| Status Code | Description |
| ------ | ------ |
| 200 | Login ok, `token` should be returned in response. |
| 406 | Something is wrong. Check response for error message. |
| 400 | Bad request format or not all attributes are provided. |

### Note
To all the subsequent requests that perform CURD on Notes and Folder, you should pass the `access_token` over your header like the following

```
Authorization: Bearer <access_token>
```

##### Example:
```
Authorization: Bearer a.3f8f961077b54e0e76251dafd678qw34af00adf7d4418b2524bc2334fb1938f1
```

#### Response Examples
##### 200

```
{
    "message": "Login success",
    "tokens": {
        "access_token": "a.3f8f961077b54e0e76251dafd678qw34af00adf7d4418b2524bc2334fb1938f1",
        "valid_for": 7200,
        "refresh_token": "r.c7628b62bfbe5e19f101b2re893c27741dc504935527cf4d652aeaf28e8d178a",
        "reference_token": "auth_grant",
        "type": "api"
    }
}
```

##### 406

```
{
    "error": "Detailed error message"
}
```

##### 400

```
{
    "error": "Bad request"
}
```

## Refresh Access API

### Request
```
POST /auth/refresh
```

#### Form Data
| Attribute | Description |
| ------ | ------ |
| refresh_token | <refresh_token_acquired_during_login> |

### Response
There are 3 type of responses each associated with a status code.
| Status Code | Description |
| ------ | ------ |
| 200 | Refresh access is successful, `token` should be returned in response. |
| 406 | Something is wrong. Check response for error message. |
| 400 | Bad request format or not all attributes are provided. |

### Note
To check if an `access_token` is valid, you can use [Get Current User API](https://git.selfmade.ninja/sibidharan/api-development-course-apr-2021/-/wikis/Get-Current-User-API).

#### Examples
##### 200

```
{
    "message": "Refresh Success",
    "tokens": {
        "access_token": "a.fcd25683d077219e29ef990f79ddff8946495186a9773af1e4bee633a0b99a5b",
        "valid_for": 7200,
        "refresh_token": "d.cf03600e7e505af7c4e90120838a05a3",
        "reference_token": "r.786906ede70648bccc44af4d13a461f87e0331d080565fbe1fd2ac21ea2e524c",
        "type": "api"
    }
}
```

##### 406

```
{
    "error": "Detailed error message"
}
```

##### 400

```
{
    "error": "Bad request"
}
```

## Signup API

### Request
```
POST /auth/signup
```

#### Form Data
| Attribute | Description |
| ------ | ------ |
| `username` | Any username without space, and must be alpha numeric. Some symbols are allowed. |
| `password` | Any password greater than 8 characters |
| `email`   | Email address of the user to which verification is sent. Must be a valid one. |

### Response
There are 3 types of responses.
| Status Code | Description |
| ------ | ------ |
| 200 | Signup Success and verification email sent. |
| 400 | Bad Request Format or Not all attributes are available. |
| 409 | User already exists |

#### Examples
##### 200 OK
```
{
    "message": "Signup success",
    "userid": 41
}
```
##### 400 Bad Request
```
{
    "error": "Bad request"
}
```
##### 409 Conflict
```
{
    "error": "Unable to signup."
}
```
-------
-------
<br />
<br />

# Get Current User
Can be used to check the validity of the access token.

### Request
```
POST /auth/current
```

### Response
There are 3 types of responses.
| Status Code | Description |
| ------ | ------ |
| 200 | Name of the user will Display |
| 403 | unauthorized user |
| 400 | Bad request or Token expired |

#### Examples
##### 200 OK
```
{
   "username": "name of the user"
}
```
##### 403 Forbidden Error
```
{
    "error": "unauthorized user"
}
```
##### 400 Bad Request
```
{
   "error": "Expired token" or "error": "Bad request"
}
```

-------
-------
<br />
<br />

# Notes 

## Get a new Note

### Request
```
  POST /notes/get
  Authorization: Bearer <your_access_token>
```

#### Form Data
| Attribute | Description |
| ------ | ------ |
| `Token` | Need to provide the token which generated during the login |
| `id`   | Need to provide id of that paticular note. |

### Response
There are 3 types of responses.
| Status Code | Description |
| ------ | ------ |
| 200 | success, Notes related to that id will be displayed. |
| 403 | unauthorized user. |
| 400 | Bad Request Format or Not all attributes are available. |



#### Examples
##### 200 OK
```
{
   "title": "hello world"
   "body":  "hi hello world"
   "created": "1 day ago"
}
```
##### 400 Bad Request
```
{
    "error": "Bad request"
}
```

## Edit an existing note

...
### Request
```
POST /auth/Edit
```

#### Form Data
| Attribute | Description |
| ------ | ------ |
| `Note_search_Term` | Need of paticular NoteId (or) Title (or) Body |

| `Token` | Need to provide the token generated during login |

### Response
There are 3 types of responses.
| Status Code | Description |
| ------ | ------ |
| 200 | User can modify the existing data. |
| 403 | unauthorized user. |
| 400 | Bad Request Format or Not all attributes are available. |


#### Examples
##### 200 OK
```
{
    "id": "1"
    "name": "lahtp notes"
    "owner": "lahtp"
    "created_at": "1 day ago"
    "modified_at": "1 hour ago"

}
```
##### 400 Bad Request
```
{
    "error": "Bad request"
}
```

## Delete note

### Request
```
POST /auth/delete
```

#### Form Data
| Attribute | Description |
| ------ | ------ |
| `Note_search_Term` | Need of paticular NoteId (or) Title (or) Body |
| `Token` | Need to provide the token generated during login |

### Response
There are 3 types of responses.
| Status Code | Description |
| ------ | ------ |
| 200 | User can modify the existing data. |
| 403 | unauthorized user. |
| 400 | Bad Request Format . |


#### Examples
##### 200 OK
```
{
    "message": "success"
}
```
##### 400 Bad Request
```
{
    "error": "Bad request"
}
```

## get all notes 

### Request
```
POST /auth/get
```

#### Form Data
| Attribute | Description |
| ------ | ------ |
| `Note_search_Term` | Need of paticular NoteId (or) Title (or) Body |
| `Token` | Need to provide the token generated during login |

### Response
There are 3 types of responses.
| Status Code | Description |
| ------ | ------ |
| 200 | User can modify the existing data. |
| 403 | unauthorized user. |
| 400 | Bad Request Format . |


#### Examples
##### 200 OK
```
{
    id": "33",
    "title": "Dummy note 1",
    "body": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis convallis erat. Aenean 
             posuere condimentum efficitur.",
    "created": "21 minutes ago",
    "updated": "21 minutes ago"
}

{
    id": "34",
    "title": "Dummy note 2",
    "body": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis convallis erat. Aenean 
             posuere condimentum efficitur.",
    "created": "21 minutes ago",
    "updated": "21 minutes ago"
}
```
##### 400 Bad Request
```
{
    "error": "Bad request"
}
```
-------
-------
<br />
<br />

# Folders
## create a new folder
### Request
```
  POST /folder/new
  Authorization: Bearer <your_access_token>
```

#### Form Data
| Attribute | Description |
| ------ | ------ |
| `Token` | Need to provide the token which generated during the login |
| `Name`  | Need to provide the name of the folder. |

### Response
There are 3 types of responses.
| Status Code | Description |
| ------ | ------ |
| 200 | Folder created successfully. |
| 403 | unauthorized user. |
| 400 | Bad Request Format or Not all attributes are available. |


#### Examples
##### 200 OK
```
{
    "folder_id": 13
}
```
##### 400 Bad Request
```
{
    "error": "Bad request"
}
```

## Get all notes

### Request
```
POST /folder/get_all_notes
Authorization: Bearer <your_access_token>
```

#### Form Data
| Attribute | Description |
| ------ | ------ |
| `Token` | Need to provide the token generated during login |

### Response
There are 3 types of responses.
| Status Code | Description |
| ------ | ------ |
| 200 | success it will list all the notes |
| 403 | unauthorized user. |
| 400 | Bad Request Format or Not all attributes are available. |


#### Examples
##### 200 OK
```
{
    "count": "2",
    "notes": [
          "id": "1"
          "name": "lahtp notes"
          "owner": "lahtp"
          "created_at": "1 day ago"
          "modified_at": "1 hour ago"

          "id": "2"
          "name": "lahtp notes 2"
          "owner": "lahtp"
          "created_at": "1 day ago"
          "modified_at": "1 hour ago"


]
}
   
```
##### 400 Bad Request
```
{
    "error": "Bad request"
}
```

## Delete note

### Request
```
POST /auth/delete
Authorization: Bearer <your_access_token>
```

#### Form Data
| Attribute | Description |
| ------ | ------ |
| `Note_search_Term` | Need of particular folder Id (or) Title (or) Body |
| `Token` | Need to provide the token generated during login |

### Response
There are 3 types of responses.
| Status Code | Description |
| ------ | ------ |
| 200 | success data deleted. |
| 403 | unauthorized user. |
| 400 | Bad Request Format . |


#### Examples
##### 200 OK
```
{
    "message": "success"
}
```
##### 400 Bad Request
```
{
    "error": "Bad request"
}
```

## list 

### Request
```
GET /folder/get
Authorization: Bearer <your_access_token>
```

#### Form Data
| Attribute | Description |
| ------ | ------ |
| `id`    | need to provide the id of particular folder      |
| `Token` | Need to provide the token generated during login |

### Response
There are 3 types of responses.
| Status Code | Description |
| ------ | ------ |
| 200 | User can modify the existing data. |
| 403 | unauthorized user. |
| 400 | Bad Request Format . |


#### Examples
##### 200 OK
```
{[
    {
        "id": "12",
        "name": "Default Folder",
        "owner": "lahtp",
        "created_at": "2021-05-19 23:48:22",
        "created": "18 minutes ago",
        "count": "0"
    },
    {
        "id": "13",
        "name": "Personal Notes",
        "owner": "lahtp",
        "created_at": "2021-05-19 23:49:14",
        "created": "18 minutes ago",
        "count": "0"
    },
    {
        "id": "14",
        "name": "Personal Notes",
        "owner": "lahtp",
        "created_at": "2021-05-20 00:05:45",
        "created": "1 minute ago",
        "count": "0"
    }
]
  
}
```
##### 400 Bad Request
```
{
    "error": "Bad request"
}
```


## Rename

### Request
```
post /Folder/rename
Authorization: Bearer <your_access_token>
```

#### Form Data
| Attribute | Description |
| ------ | ------ |
| `id`    | need to provide the id of particular folder      |
| `Token` | Need to provide the token generated during login |

### Response
There are 3 types of responses.
| Status Code | Description |
| ------ | ------ |
| 200 | User can modify the existing data. |
| 403 | unauthorized user. |
| 400 | Bad Request Format . |


#### Examples
##### 200 OK
```
{

    "id": "1"
    "name": "lahtp notes"
    "owner": "lahtp"
    "created_at": "1 day ago"
    "modified_at": "1 hour ago"

 }
```
##### 400 Bad Request
```
{
    "error": "Bad request"
}
```

## Delete

### Request
```
post /Folder/delete
Authorization: Bearer <your_access_token>
```

#### Form Data
| Attribute | Description |
| ------ | ------ |
| `id`    | need to provide the id of particular folder      |
| `Token` | Need to provide the token generated during login |

### Response
There are 3 types of responses.
| Status Code | Description |
| ------ | ------ |
| 200 | operation successful |
| 403 | unauthorized user. |
| 400 | Bad Request Format . |


#### Examples
##### 200 OK
```
{
  "message": "success"
 }
```
##### 400 Bad Request
```
{
    "error": "Bad request"
}
```

