<?php
namespace WlSdk\Wl\Book\Process\Store;

class StoreGroupPostResponsePurchaseItemDistribute
{
    /**
     * List of UIDs of owners who will share this promotion with this client.
     *   If empty, this client is the owner of the promotion.
     *   This only applies to the new promotions.
     *
     * @var string[]|null
     */
    public ?array $a_owner = null;

    /**
     * The number of sessions that this item can cover.
     *   The same as in `a_purchase_item_check`.
     *   `0` if not applicable.
     *
     * @var int|null
     */
    public ?int $i_session = null;

    /**
     * Login promotion key. 
     *   The same as in `a_login_promotion`.
     *   `null` if not applicable.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Session pass key. 
     *   The same as in `a_session_pass`.
     *   `null` if not applicable.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    /**
     * The unique identifier of the purchase item.
     *   The same as in `a_purchase_item_check`.
     *   `null` if not applicable.
     *
     * @var string|null
     */
    public ?string $s_value = null;

    /**
     * Error text if the purchase item cannot be applied to the current class or event for this client.
     *
     * @var string|null
     */
    public ?string $text_error = null;

    /**
     * Error code if the purchase item cannot be applied to the current class or event for this client.
     *
     * @var string|null
     */
    public ?string $text_error_code = null;

    public function __construct(array $data)
    {
        $this->a_owner = isset($data['a_owner']) ? (array)$data['a_owner'] : null;
        $this->i_session = isset($data['i_session']) ? (int)$data['i_session'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->k_session_pass = isset($data['k_session_pass']) ? (string)$data['k_session_pass'] : null;
        $this->s_value = isset($data['s_value']) ? (string)$data['s_value'] : null;
        $this->text_error = isset($data['text_error']) ? (string)$data['text_error'] : null;
        $this->text_error_code = isset($data['text_error_code']) ? (string)$data['text_error_code'] : null;
    }
}
