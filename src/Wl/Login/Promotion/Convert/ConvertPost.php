<?php
namespace WlSdk\Wl\Login\Promotion\Convert;

use WlSdk\WlSdkClient;

/**
 * Creates or updates conversion form data for the login promotion.
 * Performs all necessary checks and apply changes.
 */
class ConvertPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
}
