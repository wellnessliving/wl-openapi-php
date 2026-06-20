<?php
namespace WlSdk\Wl\Integration\Autymate;

class ReportGetRequest
{
    /**
     * List of payment methods to filter out in the report.
     * Each element is one of the {@link \WlSdk\RsPayMethodSid} constants.
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

    public function params(): array
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
