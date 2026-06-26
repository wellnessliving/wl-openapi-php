<?php

namespace WlSdk\Wl\Integration\Curves\Partner;

use WlSdk\WlSdkClient;

/**
 * Returns information about a partner.
 */
class PartnerEdit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about a partner.
     *
     * @return PartnerEditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PartnerEditGetRequest $request): PartnerEditGetResponse
    {
        return new PartnerEditGetResponse($this->client->request('/Wl/Integration/Curves/Partner/PartnerEdit.json', $request->params(), 'GET'));
    }

    /**
     * Saves a partner.
     *
     * @return PartnerEditPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PartnerEditPostRequest $request): PartnerEditPostResponse
    {
        return new PartnerEditPostResponse($this->client->request('/Wl/Integration/Curves/Partner/PartnerEdit.json', $request->params(), 'POST'));
    }

    /**
     * Deletes a partner.
     *
     * @return PartnerEditDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(PartnerEditDeleteRequest $request): PartnerEditDeleteResponse
    {
        return new PartnerEditDeleteResponse($this->client->request('/Wl/Integration/Curves/Partner/PartnerEdit.json', $request->params(), 'DELETE'));
    }
}
