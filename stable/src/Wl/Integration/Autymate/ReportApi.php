<?php
namespace WlSdk\Wl\Integration\Autymate;

use WlSdk\WlSdkClient;

/**
 * Gets the daily transaction data.
 */
class ReportApi
{
    /**
     * List of payment methods to filter out in the report.
     * Each element is one of the [RsPayMethodSid](#/components/schemas/RsPayMethodSid) constants.
     *
     * @var int[]|null
     */
    public ?array $a_pay_method_remove = null;

    /**
     * The date in local time to retrieve transactions for.
     *
     * @var string|null
     */
    public ?string $dl_date = null;

    /**
     * The page of the report, starting from 0.
     * Each page will contain a maximum of `LIMIT` rows.
     *
     * @var int|null
     */
    public ?int $i_page = null;

    /**
     * Determines whether this report should be refreshed.
     * 
     * `true` to refresh this report if it's already generated.
     * Refreshing of the report may not be queried while report is being generated.
     * 
     * `false` to only return contents of the report.
     * If report isn't yet generated, it automatically starts the generation in the background.
     *
     * @var bool|null
     */
    public ?bool $is_refresh = null;

    /**
     * The key of the business for which the report must be generated.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The randomly generated 32 character string used to authenticate requests.
     *
     * @var string|null
     */
    public ?string $s_guid = null;

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
     * @return ReportApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ReportApiGetResponse
    {
        return new ReportApiGetResponse($this->client->request('/Wl/Integration/Autymate/Report.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_pay_method_remove' => $this->a_pay_method_remove,
            'dl_date' => $this->dl_date,
            'i_page' => $this->i_page,
            'is_refresh' => $this->is_refresh,
            'k_business' => $this->k_business,
            's_guid' => $this->s_guid,
            ],
            static fn($v) => $v !== null
        );
    }
}
