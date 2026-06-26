<?php

namespace WlSdk\Wl\Import\Custom\Upload;

use WlSdk\WlSdkClient;

/**
 * Returns count of rows that are left to be imported.
 */
class CustomUploadValidate
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
     * @return CustomUploadValidatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CustomUploadValidatePostRequest $request): CustomUploadValidatePostResponse
    {
        return new CustomUploadValidatePostResponse($this->client->request('/Wl/Import/Custom/Upload/CustomUploadValidate.json', $request->params(), 'POST'));
    }
}
