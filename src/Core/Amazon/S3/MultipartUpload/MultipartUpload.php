<?php

namespace WlSdk\Core\Amazon\S3\MultipartUpload;

use WlSdk\WlSdkClient;

/**
 * Initiates a multipart upload.
 * Sets public properties for the client side of the uploader.
 */
class MultipartUpload
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Initiates a multipart upload.
Sets public properties for the client side of the uploader.
     *
     * @return MultipartUploadGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MultipartUploadGetRequest $request): MultipartUploadGetResponse
    {
        return new MultipartUploadGetResponse($this->client->request('/Core/Amazon/S3/MultipartUpload/MultipartUpload.json', $request->params(), 'GET'));
    }

    /**
     * Completes unloading part of the file.
Assembles a file into a single unit.
     *
     * @return MultipartUploadPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MultipartUploadPostRequest $request): MultipartUploadPostResponse
    {
        return new MultipartUploadPostResponse($this->client->request('/Core/Amazon/S3/MultipartUpload/MultipartUpload.json', $request->params(), 'POST'));
    }

    /**
     * Aborts uploading a file.
     *
     * @return MultipartUploadPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(MultipartUploadPutRequest $request): MultipartUploadPutResponse
    {
        return new MultipartUploadPutResponse($this->client->request('/Core/Amazon/S3/MultipartUpload/MultipartUpload.json', $request->params(), 'PUT'));
    }
}
