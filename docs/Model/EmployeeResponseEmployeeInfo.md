# EmployeeResponseEmployeeInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location_id** | **int** | The location id of the employee. The location id can be obtained for a company using the locations resource. | [optional] 
**first_name** | **string** | Employee&#39;s first name. | [optional] [default to 'Oliver']
**last_name** | **string** | Employee&#39;s last name. | [optional] [default to 'Queen']
**suffix** | **string** | Possible String Options: Jr., Sr.,II, III, IV. | [optional] [default to 'Jr.']
**address_line_1** | **string** | Employee&#39;s address line 1 | [optional] [default to '9000 Gennesse Avenue']
**address_line_2** | **string** | Employee&#39;s address line 2 | [optional] [default to 'University Townne Center']
**city** | **string** | Employee&#39;s city of residence. | [optional] [default to 'San Diego']
**zip** | **string** | Employee&#39;s zip code. 5 numerical digits and an optional 4 digit extension (e.g. 33706 or 46214-2524). | [optional] [default to '92122']
**state** | **string** | Employee&#39;s state of residence. 2 letter state abbreviation. | [optional] [default to 'CA']
**county_id** | **string** | Employee&#39;s county id. | [optional] [default to '12']
**ssn** | **int** | Employee&#39;s 9 digit Social Security Number with dashes. Format: XXX-XX-XXXX. Include leading zeroes if less than 9 digits. | [optional] 
**dob** | [**\DateTime**](Date.md) | Date of Birth. U.S. date formats only. | [optional] 
**rehire** | **bool** | Whether or not the employee has ever worked for this company before. | [optional] 
**is_applicant** | **bool** | This field indicates whether the record is employee OR applicant. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


