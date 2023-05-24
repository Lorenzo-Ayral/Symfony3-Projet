# Symfony3-Projet

## Tables :

Table "users" :
id (primary key, integer)
name (string)
first_name (string)
email (string)
password (encrypted, string)
created_at (datetime)
last_login (datetime)

Table "publications" :
id (primary key, integer)
user_id (foreign key to table "users", integer)
content (text)
created_at (datetime)

Table "friends" :
id (primary key, integer)
user_id (foreign key to table "users", integer)
friend_id (foreign key to table "users", integer)

Table "comments" :
id (primary key, integer)
user_id (foreign key to table "users", integer)
publication_id (foreign key to table "publications", integer)
content (text)
created_at (datetime)

Table "likes" :
id (primary key, integer)
user_id (foreign key to table "users", integer)
publication_id (foreign key to table "publications", integer)