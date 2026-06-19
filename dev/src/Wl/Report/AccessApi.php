<?php
namespace WlSdk\Wl\Report;

use WlSdk\WlSdkClient;

/**
 * Checks access to given report.
 */
class AccessApi
{
    /**
     * Report CID.
     * 
     * It's used mostly for second generation reports.
     * For first generation reports use `id_report` instead.
     * 
     * Only one of these two fields should be sent, but not both.
     *
     * @var int|null
     */
    public ?int $cid_report = null;

    /**
     * Report ID.
     * 
     * It's used mostly for first generation reports.
     * For second generation reports use `cid_report` instead.
     * 
     * Only one of these two fields should be sent, but not both.
     *
     * @var int|null
     */
    public ?int $id_report = null;

    /**
     * ID of business for which access must be checked.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks access to given report.
     *
     * Accepts either `id_report` (first-generation reports) or `cid_report` (second-generation reports), but not
     * both,
     * and returns `has_access` indicating whether the current user may view the report in the given business.
     *
     * @return AccessApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AccessApiGetResponse
    {
        return new AccessApiGetResponse($this->client->request('/Wl/Report/Access.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'cid_report' => $this->cid_report,
            'id_report' => $this->id_report,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
