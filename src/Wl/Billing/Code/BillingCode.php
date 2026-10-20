<?php

namespace WlSdk\Wl\Billing\Code;

use WlSdk\WlSdkClient;

/**
 * Returns a single custom billing code of the business.
 */
class BillingCode
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a single custom billing code of the business.
     *
     * A removed code is returned as well, with {@link \WlSdk\Wl\Billing\Code\BillingCodeGetResponse::$is_remove}
     * set - it is still shown on the
     * receipts it has been applied to.
     *
     * @return BillingCodeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BillingCodeGetRequest $request): BillingCodeGetResponse
    {
        return new BillingCodeGetResponse($this->client->request('/Wl/Billing/Code/BillingCode.json', $request->params(), 'GET'));
    }

    /**
     * Edits the value and the description of a custom billing code of the business.
     *
     * The new value applies going forward only - every receipt and invoice that has already been generated with
     * the
     * old value keeps it.
     *
     * @return BillingCodePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BillingCodePostRequest $request): BillingCodePostResponse
    {
        return new BillingCodePostResponse($this->client->request('/Wl/Billing/Code/BillingCode.json', $request->params(), 'POST'));
    }

    /**
     * Adds a custom billing code to the central list of the business.
     *
     * If the business has removed a code with this value before, that code is brought back with the new
     * description
     * instead of a second code with the same value being created, and {@link
     * \WlSdk\Wl\Billing\Code\BillingCodePutResponse::$k_code} returns the key
     * of that very code.
     *
     * @return BillingCodePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(BillingCodePutRequest $request): BillingCodePutResponse
    {
        return new BillingCodePutResponse($this->client->request('/Wl/Billing/Code/BillingCode.json', $request->params(), 'PUT'));
    }

    /**
     * Removes a custom billing code from the central list of the business.
     *
     * The code is not deleted - it stays on every receipt and invoice it has already been used on, and it keeps
     * its
     * value occupied. Adding the same value again brings this very code back, see `put()`.
     * Removing a code that is removed already does nothing.
     *
     * @return BillingCodeDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(BillingCodeDeleteRequest $request): BillingCodeDeleteResponse
    {
        return new BillingCodeDeleteResponse($this->client->request('/Wl/Billing/Code/BillingCode.json', $request->params(), 'DELETE'));
    }
}
