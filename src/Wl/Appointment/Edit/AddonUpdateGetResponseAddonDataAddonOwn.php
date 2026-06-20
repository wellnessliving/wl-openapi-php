<?php
namespace WlSdk\Wl\Appointment\Edit;

class AddonUpdateGetResponseAddonDataAddonOwn
{
    /**
     * Formatted HTML price of the addon.
     *
     * @var string|null
     */
    public ?string $html_amount = null;

    /**
     * HTML-escaped duration text.
     *
     * @var string|null
     */
    public ?string $html_duration = null;

    /**
     * HTML-escaped addon title.
     *
     * @var string|null
     */
    public ?string $html_title = null;

    /**
     * Pre-purchased units the client has; at least 0.
     *
     * @var int|null
     */
    public ?int $i_count_banked = null;

    /**
     * Paid units in the current appointment.
     *
     * @var int|null
     */
    public ?int $i_count_paid = null;

    /**
     * Unpaid units in the current appointment.
     *
     * @var int|null
     */
    public ?int $i_count_unpaid = null;

    /**
     * Used units in the current appointment.
     *
     * @var int|null
     */
    public ?int $i_count_use = null;

    /**
     * Total product count for this appointment: `i_count_paid` plus `i_count_unpaid`.
     *
     * @var int|null
     */
    public ?int $i_product = null;

    /**
     * `true` when the addon has no products or is not active.
     *
     * @var bool|null
     */
    public ?bool $is_disable = null;

    public function __construct(array $data)
    {
        $this->html_amount = isset($data['html_amount']) ? (string)$data['html_amount'] : null;
        $this->html_duration = isset($data['html_duration']) ? (string)$data['html_duration'] : null;
        $this->html_title = isset($data['html_title']) ? (string)$data['html_title'] : null;
        $this->i_count_banked = isset($data['i_count_banked']) ? (int)$data['i_count_banked'] : null;
        $this->i_count_paid = isset($data['i_count_paid']) ? (int)$data['i_count_paid'] : null;
        $this->i_count_unpaid = isset($data['i_count_unpaid']) ? (int)$data['i_count_unpaid'] : null;
        $this->i_count_use = isset($data['i_count_use']) ? (int)$data['i_count_use'] : null;
        $this->i_product = isset($data['i_product']) ? (int)$data['i_product'] : null;
        $this->is_disable = isset($data['is_disable']) ? (bool)$data['is_disable'] : null;
    }
}
