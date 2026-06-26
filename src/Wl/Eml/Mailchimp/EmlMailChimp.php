<?php

namespace WlSdk\Wl\Eml\Mailchimp;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Eml/Mailchimp/EmlMailChimp.json
 */
class EmlMailChimp
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Eml/Mailchimp/EmlMailChimp.json.
     *
     * @return EmlMailChimpGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EmlMailChimpGetRequest $request): EmlMailChimpGetResponse
    {
        return new EmlMailChimpGetResponse($this->client->request('/Wl/Eml/Mailchimp/EmlMailChimp.json', $request->params(), 'GET'));
    }

    /**
     * Outside api. Mailchimp calls this method.
     *
     * @return EmlMailChimpPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EmlMailChimpPostRequest $request): EmlMailChimpPostResponse
    {
        return new EmlMailChimpPostResponse($this->client->request('/Wl/Eml/Mailchimp/EmlMailChimp.json', $request->params(), 'POST'));
    }
}
