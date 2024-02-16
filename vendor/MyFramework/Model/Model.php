<?php

namespace MyFramework\Model;

abstract class Model
{
    protected $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function insert($objectTable)
    {
        $table = str_replace("app\\models\\", "", strtolower(get_class($objectTable)));
        $columns = $this->getColumns($objectTable);
        $values = implode(', ', array_fill(0, $this->getValuesLength($objectTable), '?'));
        
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        $stmt = $this->db->prepare($sql);
        $stmt->execute($this->getValues($objectTable));
        return $this->db->lastInsertId();
    }

    public function getColumns($objectTable)
    {
        $reflectionClass = new \ReflectionClass(get_class($objectTable));
        $attributes = $reflectionClass->getProperties(\ReflectionProperty::IS_PRIVATE);

        $attributesNames = [];
        foreach ($attributes as $attribute) {
            $attributesNames[] = $attribute->getName();
        }

        $stringAttributes = implode(', ', $attributesNames);

        return $stringAttributes;
    }

    public function getValuesLength($objectTable)
    {
        $reflectionClass = new \ReflectionClass(get_class($objectTable));
        $attributes = $reflectionClass->getProperties(\ReflectionProperty::IS_PRIVATE);

        $attributesValuesLength = 0;
        foreach ($attributes as $attribute) {
            $attributesValuesLength++;
        }

        return $attributesValuesLength;
    }

    public function getValues($objectTable)
    {
        $reflectionClass = new \ReflectionClass(get_class($objectTable));
        $attributes = $reflectionClass->getProperties(\ReflectionProperty::IS_PRIVATE);

        $attributesValues = [];
        foreach ($attributes as $attribute) {
            $attribute->setAccessible(true);
            $attributesValues[] = $attribute->getValue($objectTable);
        }

        return $attributesValues;
    }
}

?>