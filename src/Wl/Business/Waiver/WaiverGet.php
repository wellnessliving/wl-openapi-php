<?php
namespace WlSdk\Wl\Business\Waiver;

use WlSdk\WlSdkClient;

/**
 * Returns the business waiver text rendered as HTML with user-specific variables substituted.
 */
class WaiverGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the business waiver text rendered as HTML with user-specific variables substituted.
     *
     * Used to display the waiver agreement to a client before they complete a purchase or check in.
     * Renders the waiver template with the client's name filled in. If the business has no waiver
     * configured, `has_waiver` is `false` and the waiver modal should not be shown.
     *
     * @return WaiverGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(WaiverGetRequest $request): WaiverGetResponse
    {
        return new WaiverGetResponse($this->client->request('/Wl/Business/Waiver/Waiver.json', $request->params(), 'GET'));
    }
}
