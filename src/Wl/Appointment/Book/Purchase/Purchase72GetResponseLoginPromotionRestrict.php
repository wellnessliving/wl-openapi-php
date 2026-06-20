<?php
namespace WlSdk\Wl\Appointment\Book\Purchase;

class Purchase72GetResponseLoginPromotionRestrict
{
    /**
     * The limit of visits for the shortest restriction period.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The number of remaining visits for the shortest restriction period.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    /**
     * The description of the shortest restriction period. For example "this week" or "for a four-day period".
     *
     * @var string|null
     */
    public ?string $text_restriction = null;

    public function __construct(array $data)
    {
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_remain = isset($data['i_remain']) ? (int)$data['i_remain'] : null;
        $this->text_restriction = isset($data['text_restriction']) ? (string)$data['text_restriction'] : null;
    }
}
