<?php

namespace WlSdk\Wl\Classes\Editor;

use WlSdk\WlSdkClient;

/**
 * Returns everything the class setup form needs besides the class itself.
 */
class Setup
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns everything the class setup form needs besides the class itself.
     *
     * The form is rendered by the client, so this endpoint answers with data: the lists the Book Now Tab, the
     * quick
     * search tag and the store category pickers are filled from, the business policies the Business policies
     * section
     * starts with, the send rules of the client reminder, the currency sign, whether the Administration section
     * may
     * be shown, the addresses of the pages the form links to and the markup of the blocks that have no template on
     * the client.
     *
     * @return SetupGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SetupGetRequest $request): SetupGetResponse
    {
        return new SetupGetResponse($this->client->request('/Wl/Classes/Editor/Setup.json', $request->params(), 'GET'));
    }
}
