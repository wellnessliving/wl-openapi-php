<?php

namespace WlSdk\Wl\Member\Group\Edit;

use WlSdk\WlSdkClient;

/**
 * Adds or changes a lead conversion type for the client.
 */
class EditConversionType
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Adds or changes a lead conversion type for the client.
     *
     * @return EditConversionTypePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(EditConversionTypePutRequest $request): EditConversionTypePutResponse
    {
        return new EditConversionTypePutResponse($this->client->request('/Wl/Member/Group/Edit/EditConversionType.json', $request->params(), 'PUT'));
    }

    /**
     * Removes the lead conversion record.
     *
     * @return EditConversionTypeDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(EditConversionTypeDeleteRequest $request): EditConversionTypeDeleteResponse
    {
        return new EditConversionTypeDeleteResponse($this->client->request('/Wl/Member/Group/Edit/EditConversionType.json', $request->params(), 'DELETE'));
    }
}
