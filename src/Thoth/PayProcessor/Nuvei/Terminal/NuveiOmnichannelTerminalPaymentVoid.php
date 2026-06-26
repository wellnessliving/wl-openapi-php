<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei\Terminal;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/Nuvei/Terminal/NuveiOmnichannelTerminalPaymentVoid.json
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
     * Calls POST /Thoth/PayProcessor/Nuvei/Terminal/NuveiOmnichannelTerminalPaymentVoid.json.
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
