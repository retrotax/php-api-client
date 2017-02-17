<?php
/**
 * EmployeesResponseList
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
 * EmployeesResponseList Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     RetroTax
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EmployeesResponseList implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EmployeesResponse_list';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'employee_info' => '\RetroTax\EmployeeResponseEmployeeInfo',
        'application_status' => '\RetroTax\EmployeeResponseApplicationStatus',
        'qualifications' => '\RetroTax\EmployeeResponseQualifications[]',
        'hiring_manager_info' => '\RetroTax\EmployeeResponseHiringManagerInfo',
        'questionnaire' => '\RetroTax\EmployeeResponseQuestionnaire',
        'voc_rehab_info' => '\RetroTax\EmployeeResponseVocRehabInfo',
        'felon_info' => '\RetroTax\EmployeeResponseFelonInfo',
        'veteran_info' => '\RetroTax\EmployeeResponseVeteranInfo',
        'foodstamps_recipient_info' => '\RetroTax\EmployeeResponseFoodstampsRecipientInfo',
        'afdc_recipient_info' => '\RetroTax\EmployeeResponseFoodstampsRecipientInfo',
        'unemployment_info' => '\RetroTax\EmployeeResponseUnemploymentInfo'
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
        'employee_info' => 'employee_info',
        'application_status' => 'application_status',
        'qualifications' => 'qualifications',
        'hiring_manager_info' => 'hiring_manager_info',
        'questionnaire' => 'questionnaire',
        'voc_rehab_info' => 'voc_rehab_info',
        'felon_info' => 'felon_info',
        'veteran_info' => 'veteran_info',
        'foodstamps_recipient_info' => 'foodstamps_recipient_info',
        'afdc_recipient_info' => 'afdc_recipient_info',
        'unemployment_info' => 'unemployment_info'
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
        'employee_info' => 'setEmployeeInfo',
        'application_status' => 'setApplicationStatus',
        'qualifications' => 'setQualifications',
        'hiring_manager_info' => 'setHiringManagerInfo',
        'questionnaire' => 'setQuestionnaire',
        'voc_rehab_info' => 'setVocRehabInfo',
        'felon_info' => 'setFelonInfo',
        'veteran_info' => 'setVeteranInfo',
        'foodstamps_recipient_info' => 'setFoodstampsRecipientInfo',
        'afdc_recipient_info' => 'setAfdcRecipientInfo',
        'unemployment_info' => 'setUnemploymentInfo'
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
        'employee_info' => 'getEmployeeInfo',
        'application_status' => 'getApplicationStatus',
        'qualifications' => 'getQualifications',
        'hiring_manager_info' => 'getHiringManagerInfo',
        'questionnaire' => 'getQuestionnaire',
        'voc_rehab_info' => 'getVocRehabInfo',
        'felon_info' => 'getFelonInfo',
        'veteran_info' => 'getVeteranInfo',
        'foodstamps_recipient_info' => 'getFoodstampsRecipientInfo',
        'afdc_recipient_info' => 'getAfdcRecipientInfo',
        'unemployment_info' => 'getUnemploymentInfo'
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
        $this->container['employee_info'] = isset($data['employee_info']) ? $data['employee_info'] : null;
        $this->container['application_status'] = isset($data['application_status']) ? $data['application_status'] : null;
        $this->container['qualifications'] = isset($data['qualifications']) ? $data['qualifications'] : null;
        $this->container['hiring_manager_info'] = isset($data['hiring_manager_info']) ? $data['hiring_manager_info'] : null;
        $this->container['questionnaire'] = isset($data['questionnaire']) ? $data['questionnaire'] : null;
        $this->container['voc_rehab_info'] = isset($data['voc_rehab_info']) ? $data['voc_rehab_info'] : null;
        $this->container['felon_info'] = isset($data['felon_info']) ? $data['felon_info'] : null;
        $this->container['veteran_info'] = isset($data['veteran_info']) ? $data['veteran_info'] : null;
        $this->container['foodstamps_recipient_info'] = isset($data['foodstamps_recipient_info']) ? $data['foodstamps_recipient_info'] : null;
        $this->container['afdc_recipient_info'] = isset($data['afdc_recipient_info']) ? $data['afdc_recipient_info'] : null;
        $this->container['unemployment_info'] = isset($data['unemployment_info']) ? $data['unemployment_info'] : null;
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
     * Gets employee_info
     * @return \RetroTax\EmployeeResponseEmployeeInfo
     */
    public function getEmployeeInfo()
    {
        return $this->container['employee_info'];
    }

    /**
     * Sets employee_info
     * @param \RetroTax\EmployeeResponseEmployeeInfo $employee_info
     * @return $this
     */
    public function setEmployeeInfo($employee_info)
    {
        $this->container['employee_info'] = $employee_info;

        return $this;
    }

    /**
     * Gets application_status
     * @return \RetroTax\EmployeeResponseApplicationStatus
     */
    public function getApplicationStatus()
    {
        return $this->container['application_status'];
    }

    /**
     * Sets application_status
     * @param \RetroTax\EmployeeResponseApplicationStatus $application_status
     * @return $this
     */
    public function setApplicationStatus($application_status)
    {
        $this->container['application_status'] = $application_status;

        return $this;
    }

    /**
     * Gets qualifications
     * @return \RetroTax\EmployeeResponseQualifications[]
     */
    public function getQualifications()
    {
        return $this->container['qualifications'];
    }

    /**
     * Sets qualifications
     * @param \RetroTax\EmployeeResponseQualifications[] $qualifications
     * @return $this
     */
    public function setQualifications($qualifications)
    {
        $this->container['qualifications'] = $qualifications;

        return $this;
    }

    /**
     * Gets hiring_manager_info
     * @return \RetroTax\EmployeeResponseHiringManagerInfo
     */
    public function getHiringManagerInfo()
    {
        return $this->container['hiring_manager_info'];
    }

    /**
     * Sets hiring_manager_info
     * @param \RetroTax\EmployeeResponseHiringManagerInfo $hiring_manager_info
     * @return $this
     */
    public function setHiringManagerInfo($hiring_manager_info)
    {
        $this->container['hiring_manager_info'] = $hiring_manager_info;

        return $this;
    }

    /**
     * Gets questionnaire
     * @return \RetroTax\EmployeeResponseQuestionnaire
     */
    public function getQuestionnaire()
    {
        return $this->container['questionnaire'];
    }

    /**
     * Sets questionnaire
     * @param \RetroTax\EmployeeResponseQuestionnaire $questionnaire
     * @return $this
     */
    public function setQuestionnaire($questionnaire)
    {
        $this->container['questionnaire'] = $questionnaire;

        return $this;
    }

    /**
     * Gets voc_rehab_info
     * @return \RetroTax\EmployeeResponseVocRehabInfo
     */
    public function getVocRehabInfo()
    {
        return $this->container['voc_rehab_info'];
    }

    /**
     * Sets voc_rehab_info
     * @param \RetroTax\EmployeeResponseVocRehabInfo $voc_rehab_info
     * @return $this
     */
    public function setVocRehabInfo($voc_rehab_info)
    {
        $this->container['voc_rehab_info'] = $voc_rehab_info;

        return $this;
    }

    /**
     * Gets felon_info
     * @return \RetroTax\EmployeeResponseFelonInfo
     */
    public function getFelonInfo()
    {
        return $this->container['felon_info'];
    }

    /**
     * Sets felon_info
     * @param \RetroTax\EmployeeResponseFelonInfo $felon_info
     * @return $this
     */
    public function setFelonInfo($felon_info)
    {
        $this->container['felon_info'] = $felon_info;

        return $this;
    }

    /**
     * Gets veteran_info
     * @return \RetroTax\EmployeeResponseVeteranInfo
     */
    public function getVeteranInfo()
    {
        return $this->container['veteran_info'];
    }

    /**
     * Sets veteran_info
     * @param \RetroTax\EmployeeResponseVeteranInfo $veteran_info
     * @return $this
     */
    public function setVeteranInfo($veteran_info)
    {
        $this->container['veteran_info'] = $veteran_info;

        return $this;
    }

    /**
     * Gets foodstamps_recipient_info
     * @return \RetroTax\EmployeeResponseFoodstampsRecipientInfo
     */
    public function getFoodstampsRecipientInfo()
    {
        return $this->container['foodstamps_recipient_info'];
    }

    /**
     * Sets foodstamps_recipient_info
     * @param \RetroTax\EmployeeResponseFoodstampsRecipientInfo $foodstamps_recipient_info
     * @return $this
     */
    public function setFoodstampsRecipientInfo($foodstamps_recipient_info)
    {
        $this->container['foodstamps_recipient_info'] = $foodstamps_recipient_info;

        return $this;
    }

    /**
     * Gets afdc_recipient_info
     * @return \RetroTax\EmployeeResponseFoodstampsRecipientInfo
     */
    public function getAfdcRecipientInfo()
    {
        return $this->container['afdc_recipient_info'];
    }

    /**
     * Sets afdc_recipient_info
     * @param \RetroTax\EmployeeResponseFoodstampsRecipientInfo $afdc_recipient_info
     * @return $this
     */
    public function setAfdcRecipientInfo($afdc_recipient_info)
    {
        $this->container['afdc_recipient_info'] = $afdc_recipient_info;

        return $this;
    }

    /**
     * Gets unemployment_info
     * @return \RetroTax\EmployeeResponseUnemploymentInfo
     */
    public function getUnemploymentInfo()
    {
        return $this->container['unemployment_info'];
    }

    /**
     * Sets unemployment_info
     * @param \RetroTax\EmployeeResponseUnemploymentInfo $unemployment_info
     * @return $this
     */
    public function setUnemploymentInfo($unemployment_info)
    {
        $this->container['unemployment_info'] = $unemployment_info;

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


