<?php

namespace WlSdk\Wl\Business\Account\Expense;

use WlSdk\WlSdkClient;

/**
 * Removes scheduled expense payment.
 */
class ExpenseSchedule
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Removes scheduled expense payment.
     *
     * @return ExpenseScheduleDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ExpenseScheduleDeleteRequest $request): ExpenseScheduleDeleteResponse
    {
        return new ExpenseScheduleDeleteResponse($this->client->request('/Wl/Business/Account/Expense/ExpenseSchedule.json', $request->params(), 'DELETE'));
    }
}
