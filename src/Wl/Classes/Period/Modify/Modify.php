<?php

namespace WlSdk\Wl\Classes\Period\Modify;

use WlSdk\WlSdkClient;

/**
 * Gets data for step in wizard.
 */
class Modify
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets data for step in wizard.
     *
     * Used by the class modification wizard (edit, cancel, reschedule) to load the data for a specific
     * wizard step. Each step has a different data shape driven by `id_step`; the response feeds directly
     * into the step's form.
     *
     * @return ModifyGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ModifyGetRequest $request): ModifyGetResponse
    {
        return new ModifyGetResponse($this->client->request('/Wl/Classes/Period/Modify/Modify.json', $request->params(), 'GET'));
    }

    /**
     * Makes step in wizard.
     *
     * Used by the class modification wizard to submit a completed step and advance to the next. The wizard
     * tracks state server-side; this call validates the step input, persists it, and returns the next step
     * the UI should render.
     *
     * @return ModifyPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ModifyPostRequest $request): ModifyPostResponse
    {
        return new ModifyPostResponse($this->client->request('/Wl/Classes/Period/Modify/Modify.json', $request->params(), 'POST'));
    }
}
