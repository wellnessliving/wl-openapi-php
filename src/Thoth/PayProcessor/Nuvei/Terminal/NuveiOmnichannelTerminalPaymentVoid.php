<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei\Terminal;

use WlSdk\WlSdkClient;

/**
 * Cancels a payment made through a `Nuvei` omnichannel terminal.
 */
class NuveiOmnichannelTerminalPaymentVoid
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Cancels a payment made through a `Nuvei` omnichannel terminal.
     *
     * Validates the business merchant and pay transaction, confirms the requesting user owns the
     *  terminal payment session, and verifies the transaction belongs to the specified business and
     *  merchant. Schedules an asynchronous task to void the unfinished transaction instead of voiding
     *  it immediately.
     *
     * @return NuveiOmnichannelTerminalPaymentVoidPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NuveiOmnichannelTerminalPaymentVoidPostRequest $request): NuveiOmnichannelTerminalPaymentVoidPostResponse
    {
        return new NuveiOmnichannelTerminalPaymentVoidPostResponse($this->client->request('/Thoth/PayProcessor/Nuvei/Terminal/NuveiOmnichannelTerminalPaymentVoid.json', $request->params(), 'POST'));
    }
}
