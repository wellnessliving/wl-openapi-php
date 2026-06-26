<?php

namespace WlSdk\Thoth\WlPay\Installment\Reschedule;

use WlSdk\WlSdkClient;

/**
 * Saves a list of client who a class session must be booked for into session.
 */
class InstallmentReschedule
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves a list of client who a class session must be booked for into session.
     *
     * @return InstallmentReschedulePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(InstallmentReschedulePostRequest $request): InstallmentReschedulePostResponse
    {
        return new InstallmentReschedulePostResponse($this->client->request('/Thoth/WlPay/Installment/Reschedule/InstallmentReschedule.json', $request->params(), 'POST'));
    }
}
