<?php
class CustomPK extends Doctrine_Entity {
    public static function initMetadata($class) {
        $class->setColumn('uid', 'integer',11, array('autoincrement' => true, 'primary' => true));
        $class->setColumn('name', 'string',255);
    }
}