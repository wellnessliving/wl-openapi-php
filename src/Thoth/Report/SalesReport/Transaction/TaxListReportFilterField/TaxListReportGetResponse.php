<?php

namespace WlSdk\Thoth\Report\SalesReport\Transaction\TaxListReportFilterField;

/**
 * Response from GET
 */
class TaxListReportGetResponse
{
    /**
     * A list of taxes.
     *
     * Each element has the following structure:
     *
     * @var TaxListReportGetResponseList[]|null
     */
    public ?array $a_list = null;

    /**
     * Whether a business has hidden.
     * `true` if business franchisor has franchisee with taxes.
     *
     * @var bool|null
     */
    public ?bool $is_hidden_tax = null;

    /**
     * Whether a business has removed taxes.
     * `true` if business has removed tax.
     *
     * @var bool|null
     */
    public ?bool $is_removed_tax = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn ($item) => new TaxListReportGetResponseList((array)$item), (array)$data['a_list']) : null;
        $this->is_hidden_tax = isset($data['is_hidden_tax']) ? (bool)$data['is_hidden_tax'] : null;
        $this->is_removed_tax = isset($data['is_removed_tax']) ? (bool)$data['is_removed_tax'] : null;
    }
}
