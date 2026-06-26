<?php

namespace WlSdk\Wl\Contact\Type;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Contact/Type/ContactTypeList.json
 */
class ContactTypeList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Contact/Type/ContactTypeList.json.
     *
     * @return ContactTypeListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ContactTypeListGetRequest $request): ContactTypeListGetResponse
    {
        return new ContactTypeListGetResponse($this->client->request('/Wl/Contact/Type/ContactTypeList.json', $request->params(), 'GET'));
    }
}
