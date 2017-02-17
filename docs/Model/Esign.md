# Esign

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**esign** | **bool** | Whether or not the user has acknowledged and agreed to the following statement: \&quot;Under penalties of perjury, I declare that I gave the above information to the employer on or before the day I was offered a job, and it is, to the best of my knowledge, true, correct, and complete. I hereby authorize any agency, organization Social Security Administration, Department of Veteran Affaris, or individuals to supply such verification of information as may be needed to determine tax credit elibility to my employer, employer representative (Associated Consultants, Inc. dba RetroTax), or the Deptartment of Labor.\&quot; | [default to true]
**authorization** | **bool** | Whether or not the employe has read, acknowledged, and agreed to the following statement, \&quot;I hereby authorize any agency, organization Social Security Administration, Department of Veteran Affairs, or individuals to supply such verification or information as may be needed to determine tax credit eligibility to my employer, employer representative RetroTax®, or the Department of Labor.\&quot; | [default to true]
**name** | **string** | If the hiring manager is esigning the application, then this field should have the hiring manager name who is esigning. If the employee is esigning, this field does not need to be sent. The system understands that it is being signed by the employee itself. | [optional] [default to 'Oliver Queen']
**title** | **string** | If the hiring manager is esigning the application, then this field should have the hiring manager title who is esigning. If the employee is esigning, this field does not need to be sent. The system understands that it is being signed by the employee itself. | [optional] [default to 'Senior Hiring Manager']

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


