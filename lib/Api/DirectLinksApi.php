<?php
/**
 * DirectLinksApi
 * PHP version 7.3
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SUPLA Cloud API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 24.12-60-g8a642a3e7
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Supla\ApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Supla\ApiClient\ApiException;
use Supla\ApiClient\Configuration;
use Supla\ApiClient\HeaderSelector;
use Supla\ApiClient\ObjectSerializer;

/**
 * DirectLinksApi Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DirectLinksApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getDirectLink
     *
     * Get direct link
     *
     * @param  int $directLink ID (required)
     * @param  string[] $include List of extra fields to include in the response. (optional)
     *
     * @throws \Supla\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Supla\ApiClient\Model\DirectLink
     */
    public function getDirectLink($directLink, $include = null)
    {
        list($response) = $this->getDirectLinkWithHttpInfo($directLink, $include);
        return $response;
    }

    /**
     * Operation getDirectLinkWithHttpInfo
     *
     * Get direct link
     *
     * @param  int $directLink ID (required)
     * @param  string[] $include List of extra fields to include in the response. (optional)
     *
     * @throws \Supla\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Supla\ApiClient\Model\DirectLink, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDirectLinkWithHttpInfo($directLink, $include = null)
    {
        $request = $this->getDirectLinkRequest($directLink, $include);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Supla\ApiClient\Model\DirectLink' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Supla\ApiClient\Model\DirectLink', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Supla\ApiClient\Model\DirectLink';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Supla\ApiClient\Model\DirectLink',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getDirectLinkAsync
     *
     * Get direct link
     *
     * @param  int $directLink ID (required)
     * @param  string[] $include List of extra fields to include in the response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDirectLinkAsync($directLink, $include = null)
    {
        return $this->getDirectLinkAsyncWithHttpInfo($directLink, $include)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDirectLinkAsyncWithHttpInfo
     *
     * Get direct link
     *
     * @param  int $directLink ID (required)
     * @param  string[] $include List of extra fields to include in the response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDirectLinkAsyncWithHttpInfo($directLink, $include = null)
    {
        $returnType = '\Supla\ApiClient\Model\DirectLink';
        $request = $this->getDirectLinkRequest($directLink, $include);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getDirectLink'
     *
     * @param  int $directLink ID (required)
     * @param  string[] $include List of extra fields to include in the response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getDirectLinkRequest($directLink, $include = null)
    {
        // verify the required parameter 'directLink' is set
        if ($directLink === null || (is_array($directLink) && count($directLink) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $directLink when calling getDirectLink'
            );
        }

        $resourcePath = '/direct-links/{directLink}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($include)) {
            $include = ObjectSerializer::serializeCollection($include, 'form', true);
        }
        if ($include !== null) {
            $queryParams['include'] = $include;
        }


        // path params
        if ($directLink !== null) {
            $resourcePath = str_replace(
                '{' . 'directLink' . '}',
                ObjectSerializer::toPathValue($directLink),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getDirectLinks
     *
     * Get Direct Links
     *
     * @param  \Supla\ApiClient\Model\ActionableSubjectTypeNames $subjectType Return links only for particular subjectType. Must be used with subjectId. (optional)
     * @param  int $subjectId Return links only for particular subjectId. Must be used with subjectType. (optional)
     * @param  string[] $include List of extra fields to include in the response. (optional)
     *
     * @throws \Supla\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Supla\ApiClient\Model\DirectLink[]
     */
    public function getDirectLinks($subjectType = null, $subjectId = null, $include = null)
    {
        list($response) = $this->getDirectLinksWithHttpInfo($subjectType, $subjectId, $include);
        return $response;
    }

    /**
     * Operation getDirectLinksWithHttpInfo
     *
     * Get Direct Links
     *
     * @param  \Supla\ApiClient\Model\ActionableSubjectTypeNames $subjectType Return links only for particular subjectType. Must be used with subjectId. (optional)
     * @param  int $subjectId Return links only for particular subjectId. Must be used with subjectType. (optional)
     * @param  string[] $include List of extra fields to include in the response. (optional)
     *
     * @throws \Supla\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Supla\ApiClient\Model\DirectLink[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getDirectLinksWithHttpInfo($subjectType = null, $subjectId = null, $include = null)
    {
        $request = $this->getDirectLinksRequest($subjectType, $subjectId, $include);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Supla\ApiClient\Model\DirectLink[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Supla\ApiClient\Model\DirectLink[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Supla\ApiClient\Model\DirectLink[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Supla\ApiClient\Model\DirectLink[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getDirectLinksAsync
     *
     * Get Direct Links
     *
     * @param  \Supla\ApiClient\Model\ActionableSubjectTypeNames $subjectType Return links only for particular subjectType. Must be used with subjectId. (optional)
     * @param  int $subjectId Return links only for particular subjectId. Must be used with subjectType. (optional)
     * @param  string[] $include List of extra fields to include in the response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDirectLinksAsync($subjectType = null, $subjectId = null, $include = null)
    {
        return $this->getDirectLinksAsyncWithHttpInfo($subjectType, $subjectId, $include)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDirectLinksAsyncWithHttpInfo
     *
     * Get Direct Links
     *
     * @param  \Supla\ApiClient\Model\ActionableSubjectTypeNames $subjectType Return links only for particular subjectType. Must be used with subjectId. (optional)
     * @param  int $subjectId Return links only for particular subjectId. Must be used with subjectType. (optional)
     * @param  string[] $include List of extra fields to include in the response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDirectLinksAsyncWithHttpInfo($subjectType = null, $subjectId = null, $include = null)
    {
        $returnType = '\Supla\ApiClient\Model\DirectLink[]';
        $request = $this->getDirectLinksRequest($subjectType, $subjectId, $include);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getDirectLinks'
     *
     * @param  \Supla\ApiClient\Model\ActionableSubjectTypeNames $subjectType Return links only for particular subjectType. Must be used with subjectId. (optional)
     * @param  int $subjectId Return links only for particular subjectId. Must be used with subjectType. (optional)
     * @param  string[] $include List of extra fields to include in the response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getDirectLinksRequest($subjectType = null, $subjectId = null, $include = null)
    {

        $resourcePath = '/direct-links';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($subjectType !== null) {
            if('form' === 'form' && is_array($subjectType)) {
                foreach($subjectType as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['subjectType'] = $subjectType;
            }
        }
        // query params
        if ($subjectId !== null) {
            if('form' === 'form' && is_array($subjectId)) {
                foreach($subjectId as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['subjectId'] = $subjectId;
            }
        }
        // query params
        if (is_array($include)) {
            $include = ObjectSerializer::serializeCollection($include, 'form', true);
        }
        if ($include !== null) {
            $queryParams['include'] = $include;
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
