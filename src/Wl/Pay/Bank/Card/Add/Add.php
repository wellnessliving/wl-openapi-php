<?php

namespace WlSdk\Wl\Pay\Bank\Card\Add;

use WlSdk\WlSdkClient;

/**
 * Gets code of bank card widget.
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
     * Gets code of bank card widget.
     *
     * Returns an HTML snippet containing the card entry form rendered by the server-side widget for the given
     * payment owner. This method is deprecated; prefer building the card widget on the client side.
     *
     * @deprecated Make card widget in client side using `RsPayBankCardEditWidget` class.
     *
     * @return AddGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AddGetRequest $request): AddGetResponse
    {
        return new AddGetResponse($this->client->request('/Wl/Pay/Bank/Card/Add/Add.json', $request->params(), 'GET'));
    }

    /**
     * Saves new bank card.
     *
     * Validates the payment owner and business, then saves the new card details provided in `$a_card_detail`
     * and optionally sets the card as the default recurring payment source.
     *
     * @return AddPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AddPostRequest $request): AddPostResponse
    {
        return new AddPostResponse($this->client->request('/Wl/Pay/Bank/Card/Add/Add.json', $request->params(), 'POST'));
    }

    /**
     * Deletes saved card.
     *
     * Removes the payment card identified by `$k_pay_bank` from the specified business, permanently deleting
     * the stored card record.
     *
     * @return AddDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AddDeleteRequest $request): AddDeleteResponse
    {
        return new AddDeleteResponse($this->client->request('/Wl/Pay/Bank/Card/Add/Add.json', $request->params(), 'DELETE'));
    }
}
