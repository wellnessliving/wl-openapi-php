<?php

namespace WlSdk\Wl\Business\Report;

use WlSdk\WlSdkClient;

/**
 * Saves default business report config, and overwrites all customized report configurations for the current user.
 */
class DefaultReportConfig
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves default business report config, and overwrites all customized report configurations for the current user.
     *
     * @return DefaultReportConfigPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DefaultReportConfigPostRequest $request): DefaultReportConfigPostResponse
    {
        return new DefaultReportConfigPostResponse($this->client->request('/Wl/Business/Report/DefaultReportConfig.json', $request->params(), 'POST'));
    }
}
