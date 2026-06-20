<?php
namespace WlSdk\Wl\Holiday;

/**
 * Response from GET
 */
class HolidayGetResponse
{
    /**
     * A list of the location's closed day titles by location keys on the date `dl_work`.
     * 
     * Keys are location keys. Values are holiday title strings.
     *
     * @var string[]|null
     */
    public ?array $a_location_holiday = null;

    /**
     * `true` if the business has a closed day on the date `dl_work`, `false` if otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_business_holiday = null;

    /**
     * The message used for the business's closed day on the date `dl_work`.
     *
     * @var string|null
     */
    public ?string $text_business_title = null;

    public function __construct(array $data)
    {
        $this->a_location_holiday = isset($data['a_location_holiday']) ? (array)$data['a_location_holiday'] : null;
        $this->is_business_holiday = isset($data['is_business_holiday']) ? (bool)$data['is_business_holiday'] : null;
        $this->text_business_title = isset($data['text_business_title']) ? (string)$data['text_business_title'] : null;
    }
}
