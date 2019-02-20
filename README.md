ToDoList
========
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/9c9445cf96a24777ab6e2d66800805be)](https://www.codacy.com/app/Julien-Butty/toDoList?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Julien-Butty/toDoList&amp;utm_campaign=Badge_Grade)

## Installation

- Clone the repository
- Install with composer (configure for Mysql)
`composer install`
- Create the database
`php bin/console doctrine:database:create`
- Create the schema
`php bin/console doctrine:schema:create`
- Install initial data set : CAUTION you have to change the user credentials for security reasons
`php bin/console doctrine:fixtures:load`

## Changing the user credentials
You can either:
- Modify the src/AppBundle/DataFixtures/ORM/definitions/users.yaml and then run
`php bin/console doctrine:fixtures:load`
- Access the user list via /users when logged in with role ROLE_ADMIN then edit the users

Your are all set !

## Contribute
Go here for instructions : [contribute](https://github.com/Julien-Butty/toDoList/blob/master/contributing.md)
