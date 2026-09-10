<?php

namespace WlSdk\Wl\Visit\Pay;

use WlSdk\WlSdkClient;

/**
 * Returns data to change visit pay option.
 */
class PayChange
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns data to change visit pay option.
     *
     * Loads the visit and returns the list of purchase options available for it, marking the
     *  option that is currently applied. Guest visits without a client have no purchase options.
     *
     * @return PayChangeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PayChangeGetRequest $request): PayChangeGetResponse
    {
        return new PayChangeGetResponse($this->client->request('/Wl/Visit/Pay/PayChange.json', $request->params(), 'GET'));
    }

    /**
     * Saves user's promotion for certain attendance.
     *
     * Applies the selected promotion or session pass to the visit. Does nothing if the selected
     *  option is already applied to the visit. Verifies that the caller has access to the visit
     *  and that the selected promotion belongs to the visit's client before saving the change.
     *
     * @return PayChangePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PayChangePostRequest $request): PayChangePostResponse
    {
        return new PayChangePostResponse($this->client->request('/Wl/Visit/Pay/PayChange.json', $request->params(), 'POST'));
    }
}
