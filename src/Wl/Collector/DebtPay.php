<?php
namespace WlSdk\Wl\Collector;

use WlSdk\WlSdkClient;

/**
 * Registers a debt payment made outside WellnessLiving and applies a credit to the client's account balance.
 */
class DebtPay
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Registers a debt payment made outside WellnessLiving and applies a credit to the client's account balance.
     *
     * Used by collectors to record cash or external payments against outstanding debts. The specified
     * amount is credited to the client's account and the debt status is updated accordingly.
     * Requires an active Collections subscription and the business privilege or emulation access.
     *
     * @return DebtPayPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DebtPayPostRequest $request): DebtPayPostResponse
    {
        return new DebtPayPostResponse($this->client->request('/Wl/Collector/DebtPay.json', $request->params(), 'POST'));
    }
}
