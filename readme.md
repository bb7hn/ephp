# E-PHP
- E-PHP means easy php. 
- It is just a basic rest api framework
- created for personal usage and can be buggy
## Important Notes
- don't forget to run composer install
- editing files in /.core/ will cause issues on updates
- if you want to create an helper done it in helpers folder whole sub directories will be included automatically.
- editing helpers.php is not suggested too.
## How to guide
- there is nothing yet i will append sth. after i completed

# DEFAULT VALUES
    DEFAULT DB HOST = 'db' // can define in env as DB_HOST
    DEFAULT DB USER = 'root' // can define in env as DB_USER
    DEFAULT DB PASSWORD = '' // can define in env as DB_PASS
    DEFAULT TABLE = 'test' // can define in env as DB_TABLE
    DEFAULT DB PORT = 3306// can define in env as DB_PORT
    DEFAULT CHAR SET = 'utf8mb4' // can define in env as DB_CHAR_SET
    DEFAULT MODE FETCH MODE = \PDO::FETCH_OBJ // can define in env as  DB_DEFAULT_FETCH_MODE for FETCH_OBJ should define 5
    DEFAULT ERROR MODE  = \PDO::ERRMODE_EXCEPTION // can define in env as DB_ERRMODE for ERRMODE_EXCEPTION should define 2
    