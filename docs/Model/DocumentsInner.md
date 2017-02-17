# DocumentsInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The document code used by the API. This field is used to identify the type of document and shall be used while uploading the document using the POST method. | [optional] [default to 'FORM A']
**description** | **string** | The description of the document which details what is expected for this document. | [optional] [default to 'New Employee Form A']
**status** | **string** | The status of the document for this employee. There will be three possible statuses. missing | pending | approved. Status missing indicates that the document is not yet uploaded. Pending indicates that the document has been uploaded by the hiring manager/employee and is under review by the Retrotax Staff. Approved indicates that the document has been uploaded by the hiring manager/employee and approved by the Retrotax Staff | [optional] [default to 'missing']
**document_url** | **string** | The link to access the uploaded document. If the status is missing, then this field shall be null. | [optional] [default to '']
**thumbnail_urls** | [**\RetroTax\DocumentsInnerThumbnailUrls**](DocumentsInnerThumbnailUrls.md) |  | [optional] 
**pdf_sample** | **string** | Link to the PDF Sample of the document. | [optional] [default to '']
**image_sample** | **string** | Link to the Image Sample of the document. | [optional] [default to '']
**client_help_text** | **string** | The help section for the client to make understable about document. | [optional] [default to '']

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


