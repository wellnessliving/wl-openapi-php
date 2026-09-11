<?php

namespace WlSdk\Wl\Hardware\StripeCom;

use WlSdk\WlSdkClient;

/**
 * Fetch terminal information.
 */
class StripeComHardwareElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Fetch terminal information.
     *
     * Validates the business, the terminal key, and the current user's access to hardware management, then
     * returns the current terminal data for the payment processor.
     *
     * @return StripeComHardwareElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StripeComHardwareElementGetRequest $request): StripeComHardwareElementGetResponse
    {
        return new StripeComHardwareElementGetResponse($this->client->request('/Wl/Hardware/StripeCom/StripeComHardwareElement.json', $request->params(), 'GET'));
    }

    /**
     * Creates terminal.
     *
     * Creates a new `stripe.com` terminal reader when no terminal key is provided, or updates the status,
     * terminal ID, and label of an existing terminal identified by the terminal key.
     *
     * @return StripeComHardwareElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StripeComHardwareElementPostRequest $request): StripeComHardwareElementPostResponse
    {
        return new StripeComHardwareElementPostResponse($this->client->request('/Wl/Hardware/StripeCom/StripeComHardwareElement.json', $request->params(), 'POST'));
    }

    /**
     * Removes terminal.
     *
     * Validates the business, the terminal key, and the current user's access to hardware management, then
     * permanently removes the terminal record for the payment processor.
     *
     * @return StripeComHardwareElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(StripeComHardwareElementDeleteRequest $request): StripeComHardwareElementDeleteResponse
    {
        return new StripeComHardwareElementDeleteResponse($this->client->request('/Wl/Hardware/StripeCom/StripeComHardwareElement.json', $request->params(), 'DELETE'));
    }
}
