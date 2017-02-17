<?php
/**
 * Esign
 *
 * PHP version 5
 *
 * @category Class
 * @package  RetroTax
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Retrotax TCID
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2016-12-19T14:06:08Z
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RetroTax;

use \ArrayAccess;

/**
 * Esign Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     RetroTax
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Esign implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Esign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'esign' => 'bool',
        'authorization' => 'bool',
        'name' => 'string',
        'title' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'esign' => 'esign',
        'authorization' => 'authorization',
        'name' => 'name',
        'title' => 'title'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'esign' => 'setEsign',
        'authorization' => 'setAuthorization',
        'name' => 'setName',
        'title' => 'setTitle'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'esign' => 'getEsign',
        'authorization' => 'getAuthorization',
        'name' => 'getName',
        'title' => 'getTitle'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['esign'] = isset($data['esign']) ? $data['esign'] : true;
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : true;
        $this->container['name'] = isset($data['name']) ? $data['name'] : 'Oliver Queen';
        $this->container['title'] = isset($data['title']) ? $data['title'] : 'Senior Hiring Manager';
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['esign'] === null) {
            $invalid_properties[] = "'esign' can't be null";
        }
        if ($this->container['authorization'] === null) {
            $invalid_properties[] = "'authorization' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['esign'] === null) {
            return false;
        }
        if ($this->container['authorization'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets esign
     * @return bool
     */
    public function getEsign()
    {
        return $this->container['esign'];
    }

    /**
     * Sets esign
     * @param bool $esign Whether or not the user has acknowledged and agreed to the following statement: \"Under penalties of perjury, I declare that I gave the above information to the employer on or before the day I was offered a job, and it is, to the best of my knowledge, true, correct, and complete. I hereby authorize any agency, organization Social Security Administration, Department of Veteran Affaris, or individuals to supply such verification of information as may be needed to determine tax credit elibility to my employer, employer representative (Associated Consultants, Inc. dba RetroTax), or the Deptartment of Labor.\"
     * @return $this
     */
    public function setEsign($esign)
    {
        $this->container['esign'] = $esign;

        return $this;
    }

    /**
     * Gets authorization
     * @return bool
     */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
     * Sets authorization
     * @param bool $authorization Whether or not the employe has read, acknowledged, and agreed to the following statement, \"I hereby authorize any agency, organization Social Security Administration, Department of Veteran Affairs, or individuals to supply such verification or information as may be needed to determine tax credit eligibility to my employer, employer representative RetroTax®, or the Department of Labor.\"
     * @return $this
     */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name If the hiring manager is esigning the application, then this field should have the hiring manager name who is esigning. If the employee is esigning, this field does not need to be sent. The system understands that it is being signed by the employee itself.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title If the hiring manager is esigning the application, then this field should have the hiring manager title who is esigning. If the employee is esigning, this field does not need to be sent. The system understands that it is being signed by the employee itself.
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\RetroTax\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\RetroTax\ObjectSerializer::sanitizeForSerialization($this));
    }
}

