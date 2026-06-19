<?php
namespace WlSdk\Thoth\WlPay\Transaction\Report;

use WlSdk\WlSdkClient;

/**
 * Gets the daily transaction data.
 */
class TransactionAllPaymentApi
{
    /**
     * The end date in local time to retrieve transactions for.
     *
     * @var string|null
     */
    public ?string $dl_date_end = null;

    /**
     * The end date in local time to retrieve transactions for.
     *
     * @var string|null
     */
    public ?string $dl_date_start = null;

    /**
     * The page of the report, starting from 0.
     * Each page will contain a maximum of `LIMIT` rows.
     *
     * @var int|null
     */
    public ?int $i_page = null;

    /**
     * Determines whether the report should be refreshed.
     * 
     * If `true`, this report should be refreshed. A report refresh can't be requested while the report is being
     * generated.
     * Otherwise, `false` to only return contents of the report.
     * 
     * If the report hasn't yet been generated, it will automatically start generating in the background.
     *
     * @var bool|null
     */
    public ?bool $is_refresh = null;

    /**
     * The key of the business for which report should be generated.
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
     * Gets the daily transaction data.
     *
     * @return TransactionAllPaymentApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): TransactionAllPaymentApiGetResponse
    {
        return new TransactionAllPaymentApiGetResponse($this->client->request('/Thoth/WlPay/Transaction/Report/TransactionAllPayment.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dl_date_end' => $this->dl_date_end,
            'dl_date_start' => $this->dl_date_start,
            'i_page' => $this->i_page,
            'is_refresh' => $this->is_refresh,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
