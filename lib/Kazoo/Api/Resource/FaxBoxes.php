<?php

namespace Kazoo\Api\Resource;
use Kazoo\Api\AbstractResource;

/**
 * 
 */
class FaxBoxes extends AbstractResource {
    
    protected static $_entity_class = "Kazoo\\Api\\Data\\Entity\\FaxBox";
    protected static $_entity_collection_class = "Kazoo\\Api\\Data\\Collection\\FaxBoxCollection";
    
}
