<?php

namespace WlSdk\Wl\Visit\Kiosk;

use WlSdk\WlSdkClient;

/**
 * Evaluates a gym check-in of the client.
 */
class Evaluate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Evaluates a gym check-in of the client.
     *
     * Finds the gym visit of the client on the local day of the location (at any location of the business), the
     * first reason why the check-in would be refused, in the order of the check-in, and the reason why the pass of
     * the client would not pay for the visit. Fills the state of the profile: the balance, the unpaid visits, the
     * waiver, the contract, the required forms, the credit cards, the flag, the passes on hold and expired, and
     * the
     * passes that may pay for the visit. Only the first reason is given. Nothing is written: no visit and no
     * failed
     * attempt.
     *
     * @return EvaluateGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EvaluateGetRequest $request): EvaluateGetResponse
    {
        return new EvaluateGetResponse($this->client->request('/Wl/Visit/Kiosk/Evaluate.json', $request->params(), 'GET'));
    }
}
