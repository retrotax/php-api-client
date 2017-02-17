<?php
/**
 * EmployeeResponseFoodstampsRecipientInfo
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
 * EmployeeResponseFoodstampsRecipientInfo Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     RetroTax
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EmployeeResponseFoodstampsRecipientInfo implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EmployeeResponse_foodstamps_recipient_info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'city_received' => 'string',
        'county_received' => 'string',
        'name' => 'string',
        'relationship' => 'string',
        'state_received' => 'string'
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
        'city_received' => 'city_received',
        'county_received' => 'county_received',
        'name' => 'name',
        'relationship' => 'relationship',
        'state_received' => 'state_received'
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
        'city_received' => 'setCityReceived',
        'county_received' => 'setCountyReceived',
        'name' => 'setName',
        'relationship' => 'setRelationship',
        'state_received' => 'setStateReceived'
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
        'city_received' => 'getCityReceived',
        'county_received' => 'getCountyReceived',
        'name' => 'getName',
        'relationship' => 'getRelationship',
        'state_received' => 'getStateReceived'
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
        $this->container['city_received'] = isset($data['city_received']) ? $data['city_received'] : null;
        $this->container['county_received'] = isset($data['county_received']) ? $data['county_received'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['relationship'] = isset($data['relationship']) ? $data['relationship'] : null;
        $this->container['state_received'] = isset($data['state_received']) ? $data['state_received'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets city_received
     * @return string
     */
    public function getCityReceived()
    {
        return $this->container['city_received'];
    }

    /**
     * Sets city_received
     * @param string $city_received City where benefits received.
     * @return $this
     */
    public function setCityReceived($city_received)
    {
        $this->container['city_received'] = $city_received;

        return $this;
    }

    /**
     * Gets county_received
     * @return string
     */
    public function getCountyReceived()
    {
        return $this->container['county_received'];
    }

    /**
     * Sets county_received
     * @param string $county_received County where benefits received
     * @return $this
     */
    public function setCountyReceived($county_received)
    {
        $this->container['county_received'] = $county_received;

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
     * @param string $name Recipient?s name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets relationship
     * @return string
     */
    public function getRelationship()
    {
        return $this->container['relationship'];
    }

    /**
     * Sets relationship
     * @param string $relationship Recipient relationship to employee
     * @return $this
     */
    public function setRelationship($relationship)
    {
        $this->container['relationship'] = $relationship;

        return $this;
    }

    /**
     * Gets state_received
     * @return string
     */
    public function getStateReceived()
    {
        return $this->container['state_received'];
    }

    /**
     * Sets state_received
     * @param string $state_received State where benefits received. 2 letter state abbreviation.
     * @return $this
     */
    public function setStateReceived($state_received)
    {
        $this->container['state_received'] = $state_received;

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

