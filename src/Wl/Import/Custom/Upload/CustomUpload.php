<?php

namespace WlSdk\Wl\Import\Custom\Upload;

use WlSdk\WlSdkClient;

/**
 * Returns count of rows that are left to be imported.
 */
class CustomUpload
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns count of rows that are left to be imported.
     *
     * @return CustomUploadGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CustomUploadGetRequest $request): CustomUploadGetResponse
    {
        return new CustomUploadGetResponse($this->client->request('/Wl/Import/Custom/Upload/CustomUpload.json', $request->params(), 'GET'));
    }
}
