<?php

namespace Kazoo\Api\Resource;
use Kazoo\Api\AbstractResource;

/**
 * 
 */
class Agents extends AbstractResource {
    
    protected static $_entity_class = "Kazoo\\Api\\Data\\Entity\\Agent";
    protected static $_entity_collection_class = "Kazoo\\Api\\Data\\Collection\\AgentCollection";
    protected static $_schema_name = "callflows.json";
    
    public function __construct(\Kazoo\Client $client, $uri) {
        parent::__construct($client, $uri);
    }
    
}
