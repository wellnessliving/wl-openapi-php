<?php
namespace WlSdk\Wl\Lead;

use WlSdk\WlSdkClient;

/**
 * Gets information necessary to display "Lead capture" widget.
 */
class LeadGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information necessary to display "Lead capture" widget.
     *
     * Returns the list of profile fields configured for the widget, skin styling data, captcha URL if required,
     * and whether a free promotion can be applied when a new lead is created.
     *
     * @return LeadGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LeadGetRequest $request): LeadGetResponse
    {
        return new LeadGetResponse($this->client->request('/Wl/Lead/Lead.json', $request->params(), 'GET'));
    }
}
