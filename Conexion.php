<? php


require_once  ' vendor / autoload.php ' ;

use  GraphAware \ Neo4j \ Client \ ClientBuilder ;

$client = ClientBuilder::create()
    ->addConnection('MySpa', 'http://neo4j:12345@localhost:7474') // Example for HTTP connection configuration (port is optional)
    ->build();




?>