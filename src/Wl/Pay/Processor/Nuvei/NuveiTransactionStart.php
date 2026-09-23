<?php

namespace WlSdk\Wl\Pay\Processor\Nuvei;

use WlSdk\WlSdkClient;

/**
 * Starts a `Nuvei` card authorization transaction for a purchase or a card verification.
 */
class NuveiTransactionStart
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Starts a `Nuvei` card authorization transaction for a purchase or a card verification.
     *
     * Validates the submitted card form (either a new card or a previously stored one), creates a
     *  pending pay transaction, obtains a `Nuvei` session token, and requests the card
     *  authorization or, when only verifying the card, a zero-amount authorization. On success,
     *  stores a `Nuvei` 3-D Secure payment session for a possible follow-up step and schedules a
     *  task to void the transaction automatically if it is never completed. The transaction is
     *  finalized with the processor result regardless of the outcome.
     *
     * @deprecated Use {@link \Thoth\PayProcessor\Nuvei\NuveiOpenOrderApi} instead.
     *
     * @return NuveiTransactionStartPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NuveiTransactionStartPostRequest $request): NuveiTransactionStartPostResponse
    {
        return new NuveiTransactionStartPostResponse($this->client->request('/Wl/Pay/Processor/Nuvei/NuveiTransactionStart.json', $request->params(), 'POST'));
    }
}
