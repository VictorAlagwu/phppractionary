<?php

$config = require 'config.php';

require 'core/Router.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

 /*                                                    Create an instant of PDO Connection                  
 */                                                    

$pdo = Connection::make($config['database']);
return $database = new QueryBuilder($pdo);

