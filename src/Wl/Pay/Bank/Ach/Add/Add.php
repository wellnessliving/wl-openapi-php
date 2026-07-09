<?php

namespace WlSdk\Wl\Pay\Bank\Ach\Add;

use WlSdk\WlSdkClient;

/**
 * Gets widget for ACH account add.
 */
class Add
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets widget for ACH account add.
     *
     * Validates the locale, business, and pay owner, then determines whether to use Direct Entry (Australia and
     * New
     *  Zealand) or ACH as the payment method. Returns the rendered widget HTML and the processor ID for the
     *  resolved merchant.
     *
     * @return AddGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AddGetRequest $request): AddGetResponse
    {
        return new AddGetResponse($this->client->request('/Wl/Pay/Bank/Ach/Add/Add.json', $request->params(), 'GET'));
    }

    /**
     * Saves new ACH pay method.
     *
     * Processes the submitted ACH widget data, saves the bank account under the given pay owner and business,
     *  and optionally marks it as the default payment method. Returns the saved account details including billing
     *  address information.
     *
     * @return AddPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AddPostRequest $request): AddPostResponse
    {
        return new AddPostResponse($this->client->request('/Wl/Pay/Bank/Ach/Add/Add.json', $request->params(), 'POST'));
    }

    /**
     * Deletes saved ACH.
     *
     * Removes the ACH bank account identified by `k_pay_bank` from the pay owner's saved payment methods
     *  for the given business.
     *
     * @return AddDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AddDeleteRequest $request): AddDeleteResponse
    {
        return new AddDeleteResponse($this->client->request('/Wl/Pay/Bank/Ach/Add/Add.json', $request->params(), 'DELETE'));
    }
}
