<?php
/**
 * Created by PhpStorm.
 * User: Maik
 * Date: 04/04/2019
 * Time: 00:29
 */

namespace Hcode;

class Model {

    private $values = [];

    public function __call($name, $args) {

        $method = substr($name, 0, 3);
        $fieldName = substr($name, 3, strlen($name));

        switch ($method)
        {
            case "get":
                return $this->values[$fieldName];
                break;

            case "set":
                $this->values[$fieldName] = $args[0];
                break;
        }
    }

    public function setData($data = array()) {

        foreach ($data as $key => $value) {
            $this->{"set".$key}($value);
        }
    }

    public function getValues() {
        return $this->values;
    }

}