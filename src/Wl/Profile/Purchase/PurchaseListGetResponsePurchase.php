<?php

namespace WlSdk\Wl\Profile\Purchase;

class PurchaseListGetResponsePurchase
{
    /**
     * The value of `a_purchase['is_active']`. For packages, this also contains the values of
     * `a_purchase['is_active']` of every component.
     *
     * @var bool[]|null
     */
    public ?array $a_active = null;

    /**
     * The value of `a_purchase['id_sale']`. For packages, this also contains the values of `a_purchase['id_sale']`
     * of every component.
     *
     * @var int[]|null
     */
    public ?array $a_sale = null;

    /**
     * The date that the purchase was added.
     *
     * @var string|null
     */
    public ?string $dt_add = null;

    /**
     * The ID of the purchase type. One of the constants {@link \WlSdk\RsPurchaseItemSid}.
     *
     * @var int|null
     */
    public ?int $id_purchase_item = null;

    /**
     * The ID of the sale category in the store. One of the constants {@link \WlSdk\RsSaleSid}.
     *
     * @var int|null
     */
    public ?int $id_sale = null;

    /**
     * If `true`, then the purchase item is active. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * If `true`, then the purchase item is a package component. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_component = null;

    /**
     * If `true`, then the purchase item is a package, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_package = null;

    /**
     * Appointment key.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * The redemption code key that was used to make a purchase.
     * This is used only if `k_login_promotion` and `k_purchase` are empty.
     *
     * @var string|null
     */
    public ?string $k_code = null;

    /**
     * The key of an event that requires clients to book every session at once.
     * This is used only if the event is part of a package.
     *
     * @var string|null
     */
    public ?string $k_enrollment_book = null;

    /**
     * The key of the purchase type referring to different types of keys depending on the value of `id_sale`.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The key of the purchased product.
     * This is used only if the event is part of a package.
     *
     * @var string|null
     */
    public ?string $k_login_product = null;

    /**
     * The key of the user's existing purchase options.
     * This is used only if `k_code` and `k_purchase` are empty.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The key of a purchase where no special case rules are in effect.
     * This is used only used if `k_code` is empty.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    /**
     * The key of a purchase item where no special case rules are in effect.
     * This is used only if `k_code` is empty.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * Service key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * In certain cases a session can be canceled and makeup sessions can be granted to a client in lieu of
     * other compensation. This is the key of one of the makeup sessions used to attend an event. This is also
     * present for a repeat purchase of an event.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    /**
     * The name of the purchase item.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * The ID of the purchase owner.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_active = isset($data['a_active']) ? (array)$data['a_active'] : null;
        $this->a_sale = isset($data['a_sale']) ? (array)$data['a_sale'] : null;
        $this->dt_add = isset($data['dt_add']) ? (string)$data['dt_add'] : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->id_sale = isset($data['id_sale']) ? (int)$data['id_sale'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_component = isset($data['is_component']) ? (bool)$data['is_component'] : null;
        $this->is_package = isset($data['is_package']) ? (bool)$data['is_package'] : null;
        $this->k_appointment = isset($data['k_appointment']) ? (string)$data['k_appointment'] : null;
        $this->k_code = isset($data['k_code']) ? (string)$data['k_code'] : null;
        $this->k_enrollment_book = isset($data['k_enrollment_book']) ? (string)$data['k_enrollment_book'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->k_login_product = isset($data['k_login_product']) ? (string)$data['k_login_product'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->k_purchase = isset($data['k_purchase']) ? (string)$data['k_purchase'] : null;
        $this->k_purchase_item = isset($data['k_purchase_item']) ? (string)$data['k_purchase_item'] : null;
        $this->k_service = isset($data['k_service']) ? (string)$data['k_service'] : null;
        $this->k_session_pass = isset($data['k_session_pass']) ? (string)$data['k_session_pass'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
