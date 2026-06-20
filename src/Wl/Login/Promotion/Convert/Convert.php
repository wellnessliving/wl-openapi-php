<?php

namespace WlSdk\Wl\Login\Promotion\Convert;

use WlSdk\WlSdkClient;

/**
 * Returns the current conversion configuration and the list of promotions available to convert to.
 */
class Convert
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the current conversion configuration and the list of promotions available to convert to.
     *
     * Returns the current conversion type, scheduled date, target promotion, hold period dates, next payment date,
     * expiration date, and the list of promotions available as conversion targets for the given purchased
     * promotion.
     *
     * @return ConvertGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ConvertGetRequest $request): ConvertGetResponse
    {
        return new ConvertGetResponse($this->client->request('/Wl/Login/Promotion/Convert/Convert.json', $request->params(), 'GET'));
    }

    /**
     * Creates or updates conversion form data for the login promotion.
Performs all necessary checks and apply changes.
     *
     * Validates access, the target promotion key, conversion type, conversion timing, and the optional scheduled
     * date,
     * then saves the conversion settings. Returns an error if the user is a debtor.
     *
     * @return ConvertPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ConvertPostRequest $request): ConvertPostResponse
    {
        return new ConvertPostResponse($this->client->request('/Wl/Login/Promotion/Convert/Convert.json', $request->params(), 'POST'));
    }

    /**
     * Removes conversion and reset the after expiration setting to previous state.
     *
     * Validates access, removes the scheduled conversion record for the given purchased promotion, restores the
     * previous auto-renew state, and reschedules the payment if the promotion is a membership type.
     *
     * @return ConvertDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ConvertDeleteRequest $request): ConvertDeleteResponse
    {
        return new ConvertDeleteResponse($this->client->request('/Wl/Login/Promotion/Convert/Convert.json', $request->params(), 'DELETE'));
    }
}
