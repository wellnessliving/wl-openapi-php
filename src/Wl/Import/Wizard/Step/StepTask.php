<?php

namespace WlSdk\Wl\Import\Wizard\Step;

use WlSdk\WlSdkClient;

/**
 * Returns count of the rows that are left to be imported via additional tasks.
 */
class StepTask
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns count of the rows that are left to be imported via additional tasks.
     *
     * @return StepTaskGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StepTaskGetRequest $request): StepTaskGetResponse
    {
        return new StepTaskGetResponse($this->client->request('/Wl/Import/Wizard/Step/StepTask.json', $request->params(), 'GET'));
    }

    /**
     * Cancels active rows that are left to be imported.
     *
     * @return StepTaskPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StepTaskPostRequest $request): StepTaskPostResponse
    {
        return new StepTaskPostResponse($this->client->request('/Wl/Import/Wizard/Step/StepTask.json', $request->params(), 'POST'));
    }
}
