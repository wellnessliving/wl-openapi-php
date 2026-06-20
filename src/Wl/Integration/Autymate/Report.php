<?php
namespace WlSdk\Wl\Integration\Autymate;

use WlSdk\WlSdkClient;

/**
 * Gets the daily transaction data.
 */
class Report
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets the daily transaction data.
     *
     * Authenticates the request using the business GUID, runs the All Transactions report for the specified date,
     * and returns paginated rows augmented with Autymate-specific columns such as tax details, location address,
     * batch number, and payment method information.
     *
     * @return ReportGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReportGetRequest $request): ReportGetResponse
    {
        return new ReportGetResponse($this->client->request('/Wl/Integration/Autymate/Report.json', $request->params(), 'GET'));
    }
}
