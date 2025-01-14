<?php

if (! function_exists('isRelationColumn')) {
    /**
     * Decides whether specified column is a relation table column.
     *
     * @param string Name of the column
     *
     * @return bool
     */
    function isRelationColumn($columnName)
    {
        return strpos($columnName, '.') !== false;
    }
}

if (! function_exists('getRelationDetails')) {
    /**
     * Returns the relation details from the specified column.
     *
     * @param string Name of the column
     *
     * @return array
     */
    function getRelationDetails($columnName)
    {
        $relationName = strtok($columnName, '.');
        $relationColumnName = strtok('.');

        return [$relationName, $relationColumnName];
    }
}

if (! function_exists('getRelationName')) {
    /**
     * Returns the name of the relation for the column specified.
     *
     * @param string Name of the column
     *
     * @return string
     */
    function getRelationName($columnName)
    {
        [$relationName, $relationColumnName] = getRelationDetails($columnName);

        return $relationName;
    }
}
