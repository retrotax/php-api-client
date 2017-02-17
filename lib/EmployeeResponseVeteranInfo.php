<?php
/**
 * EmployeeResponseVeteranInfo
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
 * EmployeeResponseVeteranInfo Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     RetroTax
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EmployeeResponseVeteranInfo implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EmployeeResponse_veteran_info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'disabled' => 'bool',
        'branch' => 'string',
        'service_start' => '\DateTime',
        'service_stop' => '\DateTime'
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
        'disabled' => 'disabled',
        'branch' => 'branch',
        'service_start' => 'service_start',
        'service_stop' => 'service_stop'
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
        'disabled' => 'setDisabled',
        'branch' => 'setBranch',
        'service_start' => 'setServiceStart',
        'service_stop' => 'setServiceStop'
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
        'disabled' => 'getDisabled',
        'branch' => 'getBranch',
        'service_start' => 'getServiceStart',
        'service_stop' => 'getServiceStop'
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
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['service_start'] = isset($data['service_start']) ? $data['service_start'] : null;
        $this->container['service_stop'] = isset($data['service_stop']) ? $data['service_stop'] : null;
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
     * Gets disabled
     * @return bool
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     * @param bool $disabled Whether or not the veteran is classified as a Disabled Veteran.
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets branch
     * @return string
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     * @param string $branch Please look at the branches resource for the complete list of branches. Possible Options: Army, Army Reserve, Army National Guard, Marine Corps, Marine Corps Reserve, Navy, Navy Reserve, Air Force, Air Force Reserve, Air Guard, Coast Guard, Coast Guard Reserve.
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets service_start
     * @return \DateTime
     */
    public function getServiceStart()
    {
        return $this->container['service_start'];
    }

    /**
     * Sets service_start
     * @param \DateTime $service_start Military service from date. U.S. date formats only.
     * @return $this
     */
    public function setServiceStart($service_start)
    {
        $this->container['service_start'] = $service_start;

        return $this;
    }

    /**
     * Gets service_stop
     * @return \DateTime
     */
    public function getServiceStop()
    {
        return $this->container['service_stop'];
    }

    /**
     * Sets service_stop
     * @param \DateTime $service_stop Military service to date. U.S. date formats only.
     * @return $this
     */
    public function setServiceStop($service_stop)
    {
        $this->container['service_stop'] = $service_stop;

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

