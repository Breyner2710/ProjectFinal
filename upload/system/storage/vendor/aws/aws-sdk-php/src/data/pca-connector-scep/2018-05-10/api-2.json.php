<?php
// This file was auto-generated from sdk-root/src/data/pca-connector-scep/2018-05-10/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-05-10', 'endpointPrefix' => 'pca-connector-scep', 'protocol' => 'rest-json', 'protocols' => [ 'rest-json', ], 'serviceFullName' => 'Private CA Connector for SCEP', 'serviceId' => 'Pca Connector Scep', 'signatureVersion' => 'v4', 'signingName' => 'pca-connector-scep', 'uid' => 'pca-connector-scep-2018-05-10', ], 'operations' => [ 'CreateChallenge' => [ 'name' => 'CreateChallenge', 'http' => [ 'method' => 'POST', 'requestUri' => '/challenges', 'responseCode' => 202, ], 'input' => [ 'shape' => 'CreateChallengeRequest', ], 'output' => [ 'shape' => 'CreateChallengeResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'CreateConnector' => [ 'name' => 'CreateConnector', 'http' => [ 'method' => 'POST', 'requestUri' => '/connectors', 'responseCode' => 202, ], 'input' => [ 'shape' => 'CreateConnectorRequest', ], 'output' => [ 'shape' => 'CreateConnectorResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'DeleteChallenge' => [ 'name' => 'DeleteChallenge', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/challenges/{ChallengeArn}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeleteChallengeRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ConflictException', ], ], 'idempotent' => true, ], 'DeleteConnector' => [ 'name' => 'DeleteConnector', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/connectors/{ConnectorArn}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeleteConnectorRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ConflictException', ], ], 'idempotent' => true, ], 'GetChallengeMetadata' => [ 'name' => 'GetChallengeMetadata', 'http' => [ 'method' => 'GET', 'requestUri' => '/challengeMetadata/{ChallengeArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetChallengeMetadataRequest', ], 'output' => [ 'shape' => 'GetChallengeMetadataResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'GetChallengePassword' => [ 'name' => 'GetChallengePassword', 'http' => [ 'method' => 'GET', 'requestUri' => '/challengePasswords/{ChallengeArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetChallengePasswordRequest', ], 'output' => [ 'shape' => 'GetChallengePasswordResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'GetConnector' => [ 'name' => 'GetConnector', 'http' => [ 'method' => 'GET', 'requestUri' => '/connectors/{ConnectorArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetConnectorRequest', ], 'output' => [ 'shape' => 'GetConnectorResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListChallengeMetadata' => [ 'name' => 'ListChallengeMetadata', 'http' => [ 'method' => 'GET', 'requestUri' => '/challengeMetadata', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListChallengeMetadataRequest', ], 'output' => [ 'shape' => 'ListChallengeMetadataResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListConnectors' => [ 'name' => 'ListConnectors', 'http' => [ 'method' => 'GET', 'requestUri' => '/connectors', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListConnectorsRequest', ], 'output' => [ 'shape' => 'ListConnectorsResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{ResourceArn}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'AzureApplicationId' => [ 'type' => 'string', 'max' => 100, 'min' => 15, 'pattern' => '[a-zA-Z0-9]{2,15}-[a-zA-Z0-9]{2,15}-[a-zA-Z0-9]{2,15}-[a-zA-Z0-9]{2,15}-[a-zA-Z0-9]{2,15}', ], 'AzureDomain' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '[a-zA-Z0-9._-]+', ], 'BadRequestException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'CertificateAuthorityArn' => [ 'type' => 'string', 'max' => 200, 'min' => 5, 'pattern' => 'arn:aws(-[a-z]+)*:acm-pca:[a-z]+(-[a-z]+)+-[1-9]\\d*:\\d{12}:certificate-authority\\/[0-9a-f]{8}(-[0-9a-f]{4}){3}-[0-9a-f]{12}', ], 'Challenge' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'ChallengeArn', ], 'ConnectorArn' => [ 'shape' => 'ConnectorArn', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'UpdatedAt' => [ 'shape' => 'Timestamp', ], 'Password' => [ 'shape' => 'SensitiveString', ], ], ], 'ChallengeArn' => [ 'type' => 'string', 'max' => 200, 'min' => 5, 'pattern' => 'arn:aws(-[a-z]+)*:pca-connector-scep:[a-z]+(-[a-z]+)+-[1-9]\\d*:\\d{12}:connector\\/[0-9a-f]{8}(-[0-9a-f]{4}){3}-[0-9a-f]{12}\\/challenge\\/[0-9a-f]{8}(-[0-9a-f]{4}){3}-[0-9a-f]{12}', ], 'ChallengeMetadata' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'ChallengeArn', ], 'ConnectorArn' => [ 'shape' => 'ConnectorArn', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'UpdatedAt' => [ 'shape' => 'Timestamp', ], ], ], 'ChallengeMetadataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ChallengeMetadataSummary', ], ], 'ChallengeMetadataSummary' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'ChallengeArn', ], 'ConnectorArn' => [ 'shape' => 'ConnectorArn', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'UpdatedAt' => [ 'shape' => 'Timestamp', ], ], ], 'ClientToken' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[!-~]+', ], 'ConflictException' => [ 'type' => 'structure', 'required' => [ 'Message', 'ResourceId', 'ResourceType', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], 'ResourceId' => [ 'shape' => 'String', ], 'ResourceType' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'Connector' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'ConnectorArn', ], 'CertificateAuthorityArn' => [ 'shape' => 'CertificateAuthorityArn', ], 'Type' => [ 'shape' => 'ConnectorType', ], 'MobileDeviceManagement' => [ 'shape' => 'MobileDeviceManagement', ], 'OpenIdConfiguration' => [ 'shape' => 'OpenIdConfiguration', ], 'Status' => [ 'shape' => 'ConnectorStatus', ], 'StatusReason' => [ 'shape' => 'ConnectorStatusReason', ], 'Endpoint' => [ 'shape' => 'String', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'UpdatedAt' => [ 'shape' => 'Timestamp', ], ], ], 'ConnectorArn' => [ 'type' => 'string', 'max' => 200, 'min' => 5, 'pattern' => 'arn:aws(-[a-z]+)*:pca-connector-scep:[a-z]+(-[a-z]+)+-[1-9]\\d*:\\d{12}:connector\\/[0-9a-f]{8}(-[0-9a-f]{4}){3}-[0-9a-f]{12}', ], 'ConnectorList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConnectorSummary', ], ], 'ConnectorStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'ACTIVE', 'DELETING', 'FAILED', ], ], 'ConnectorStatusReason' => [ 'type' => 'string', 'enum' => [ 'INTERNAL_FAILURE', 'PRIVATECA_ACCESS_DENIED', 'PRIVATECA_INVALID_STATE', 'PRIVATECA_RESOURCE_NOT_FOUND', ], ], 'ConnectorSummary' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'ConnectorArn', ], 'CertificateAuthorityArn' => [ 'shape' => 'CertificateAuthorityArn', ], 'Type' => [ 'shape' => 'ConnectorType', ], 'MobileDeviceManagement' => [ 'shape' => 'MobileDeviceManagement', ], 'OpenIdConfiguration' => [ 'shape' => 'OpenIdConfiguration', ], 'Status' => [ 'shape' => 'ConnectorStatus', ], 'StatusReason' => [ 'shape' => 'ConnectorStatusReason', ], 'Endpoint' => [ 'shape' => 'String', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'UpdatedAt' => [ 'shape' => 'Timestamp', ], ], ], 'ConnectorType' => [ 'type' => 'string', 'enum' => [ 'GENERAL_PURPOSE', 'INTUNE', ], ], 'CreateChallengeRequest' => [ 'type' => 'structure', 'required' => [ 'ConnectorArn', ], 'members' => [ 'ConnectorArn' => [ 'shape' => 'ConnectorArn', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'Tags' => [ 'shape' => 'Tags', ], ], ], 'CreateChallengeResponse' => [ 'type' => 'structure', 'members' => [ 'Challenge' => [ 'shape' => 'Challenge', ], ], ], 'CreateConnectorRequest' => [ 'type' => 'structure', 'required' => [ 'CertificateAuthorityArn', ], 'members' => [ 'CertificateAuthorityArn' => [ 'shape' => 'CertificateAuthorityArn', ], 'MobileDeviceManagement' => [ 'shape' => 'MobileDeviceManagement', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'Tags' => [ 'shape' => 'Tags', ], ], ], 'CreateConnectorResponse' => [ 'type' => 'structure', 'members' => [ 'ConnectorArn' => [ 'shape' => 'ConnectorArn', ], ], ], 'DeleteChallengeRequest' => [ 'type' => 'structure', 'required' => [ 'ChallengeArn', ], 'members' => [ 'ChallengeArn' => [ 'shape' => 'ChallengeArn', 'location' => 'uri', 'locationName' => 'ChallengeArn', ], ], ], 'DeleteConnectorRequest' => [ 'type' => 'structure', 'required' => [ 'ConnectorArn', ], 'members' => [ 'ConnectorArn' => [ 'shape' => 'ConnectorArn', 'location' => 'uri', 'locationName' => 'ConnectorArn', ], ], ], 'GetChallengeMetadataRequest' => [ 'type' => 'structure', 'required' => [ 'ChallengeArn', ], 'members' => [ 'ChallengeArn' => [ 'shape' => 'ChallengeArn', 'location' => 'uri', 'locationName' => 'ChallengeArn', ], ], ], 'GetChallengeMetadataResponse' => [ 'type' => 'structure', 'members' => [ 'ChallengeMetadata' => [ 'shape' => 'ChallengeMetadata', ], ], ], 'GetChallengePasswordRequest' => [ 'type' => 'structure', 'required' => [ 'ChallengeArn', ], 'members' => [ 'ChallengeArn' => [ 'shape' => 'ChallengeArn', 'location' => 'uri', 'locationName' => 'ChallengeArn', ], ], ], 'GetChallengePasswordResponse' => [ 'type' => 'structure', 'members' => [ 'Password' => [ 'shape' => 'SensitiveString', ], ], ], 'GetConnectorRequest' => [ 'type' => 'structure', 'required' => [ 'ConnectorArn', ], 'members' => [ 'ConnectorArn' => [ 'shape' => 'ConnectorArn', 'location' => 'uri', 'locationName' => 'ConnectorArn', ], ], ], 'GetConnectorResponse' => [ 'type' => 'structure', 'members' => [ 'Connector' => [ 'shape' => 'Connector', ], ], ], 'InternalServerException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, 'retryable' => [ 'throttling' => false, ], ], 'IntuneConfiguration' => [ 'type' => 'structure', 'required' => [ 'AzureApplicationId', 'Domain', ], 'members' => [ 'AzureApplicationId' => [ 'shape' => 'AzureApplicationId', ], 'Domain' => [ 'shape' => 'AzureDomain', ], ], ], 'ListChallengeMetadataRequest' => [ 'type' => 'structure', 'required' => [ 'ConnectorArn', ], 'members' => [ 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'NextToken', ], 'ConnectorArn' => [ 'shape' => 'ConnectorArn', 'location' => 'querystring', 'locationName' => 'ConnectorArn', ], ], ], 'ListChallengeMetadataResponse' => [ 'type' => 'structure', 'members' => [ 'Challenges' => [ 'shape' => 'ChallengeMetadataList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListConnectorsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'NextToken', ], ], ], 'ListConnectorsResponse' => [ 'type' => 'structure', 'members' => [ 'Connectors' => [ 'shape' => 'ConnectorList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'ResourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'Tags', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 1000, 'min' => 1, ], 'MobileDeviceManagement' => [ 'type' => 'structure', 'members' => [ 'Intune' => [ 'shape' => 'IntuneConfiguration', ], ], 'union' => true, ], 'NextToken' => [ 'type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '(?:[A-Za-z0-9_-]{4})*(?:[A-Za-z0-9_-]{2}==|[A-Za-z0-9_-]{3}=)?', ], 'OpenIdConfiguration' => [ 'type' => 'structure', 'members' => [ 'Issuer' => [ 'shape' => 'String', ], 'Subject' => [ 'shape' => 'String', ], 'Audience' => [ 'shape' => 'String', ], ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'required' => [ 'Message', 'ResourceId', 'ResourceType', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], 'ResourceId' => [ 'shape' => 'String', ], 'ResourceType' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'SensitiveString' => [ 'type' => 'string', 'sensitive' => true, ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'required' => [ 'Message', 'ResourceType', 'ServiceCode', 'QuotaCode', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], 'ResourceType' => [ 'shape' => 'String', ], 'ServiceCode' => [ 'shape' => 'String', ], 'QuotaCode' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 402, 'senderFault' => true, ], 'exception' => true, ], 'String' => [ 'type' => 'string', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'Tags', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'ResourceArn', ], 'Tags' => [ 'shape' => 'Tags', ], ], ], 'Tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, 'retryable' => [ 'throttling' => true, ], ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'TagKeys', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'ResourceArn', ], 'TagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], 'Reason' => [ 'shape' => 'ValidationExceptionReason', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ValidationExceptionReason' => [ 'type' => 'string', 'enum' => [ 'CA_CERT_VALIDITY_TOO_SHORT', 'INVALID_CA_USAGE_MODE', 'INVALID_CONNECTOR_TYPE', 'INVALID_STATE', 'NO_CLIENT_TOKEN', 'UNKNOWN_OPERATION', 'OTHER', ], ], ],];
