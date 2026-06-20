<?php
namespace WlSdk\Wl\Appointment\Book\Purchase;

class Purchase72GetResponseSessionPass
{
    /**
     * Number of remaining visits on session pass.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    /**
     * Session pass key.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    /**
     * Type of the session pass purchase. One of {@link \WlSdk\RsPurchaseItemSid} constants.
     *
     * @var int|null
     */
    public ?int $id_purchase_item = null;

    /**
     * Session pass title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->i_remain = isset($data['i_remain']) ? (int)$data['i_remain'] : null;
        $this->k_session_pass = isset($data['k_session_pass']) ? (string)$data['k_session_pass'] : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
