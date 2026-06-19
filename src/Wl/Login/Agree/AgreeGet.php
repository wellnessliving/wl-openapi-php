<?php
namespace WlSdk\Wl\Login\Agree;

use WlSdk\WlSdkClient;

/**
 * Returns text of business liability release if business has liability release and if user did not agree to this
 * liability release.
 */
class AgreeGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns text of business liability release if business has liability release and if user did not agree to this liability release.
     *
     * Accepts the business key and the user key, validates both, and returns the rendered HTML of the liability
     * release
     * contract if one is configured and the user has not yet agreed to it. If the user has already agreed, the
     * response
     * will have an empty `html_contract` field.
     *
     * @return AgreeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AgreeGetRequest $request): AgreeGetResponse
    {
        return new AgreeGetResponse($this->client->request('/Wl/Login/Agree/Agree.json', $request->params(), 'GET'));
    }
}
