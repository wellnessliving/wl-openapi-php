<?php

namespace WlSdk\Wl\Promotion\Editor\List;

class ListGetResponsePromotion
{
    /**
     * With the column {@link \WlSdk\Wl\Promotion\Editor\List\ListColumnEnum}. The titles of the client groups that
     * the Purchase
     * Option is only for. Empty if it is not restricted to groups.
     *
     * @var string[]|null
     */
    public ?array $a_client_group = null;

    /**
     * With the column {@link \WlSdk\Wl\Promotion\Editor\List\ListColumnEnum}. The titles of the client types that
     * the Purchase
     * Option is only for. Empty if it is not restricted to types.
     *
     * @var string[]|null
     */
    public ?array $a_client_type = null;

    /**
     * With the column {@link \WlSdk\Wl\Promotion\Editor\List\ListColumnEnum}. The titles of the locations where
     * the Purchase Option is
     * sold, in alphabetical order. Empty if it is sold in every location. A package is sold where its components
     * are.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * With the column {@link \WlSdk\Wl\Promotion\Editor\List\ListColumnEnum}. The titles of the store categories
     * of the Purchase
     * Option, in alphabetical order. Empty if it is in none.
     *
     * @var string[]|null
     */
    public ?array $a_shop_category = null;

    /**
     * With the column {@link \WlSdk\Wl\Promotion\Editor\List\ListColumnEnum}. The date when the Purchase Option is
     * planned to be switched
     * off. `null` if none is planned.
     *
     * @var string|null
     */
    public ?string $dl_terminate = null;

    /**
     * With the column {@link \WlSdk\Wl\Promotion\Editor\List\ListColumnEnum}. The date and time when the Purchase
     * Option is published,
     * local to the business. `null` if it is published at once.
     *
     * @var string|null
     */
    public ?string $dtl_publish = null;

    /**
     * With the column {@link \WlSdk\Wl\Promotion\Editor\List\ListColumnEnum}. The date and time when the Purchase
     * Option is
     * unpublished, local to the business. `null` if it is published until it is removed.
     *
     * @var string|null
     */
    public ?string $dtl_unpublish = null;

    /**
     * The number of the clients who use the Purchase Option. A client counts once however many purchases they
     * have, the purchases that are finished or cancelled do not count, and the purchases of the copies of the
     * Purchase Option made for one client count under the Purchase Option itself.
     *
     * @var int|null
     */
    public ?int $i_client = null;

    /**
     * With the column {@link \WlSdk\Wl\Promotion\Editor\List\ListColumnEnum}. How many times one client can buy
     * the Purchase Option.
     * `null` if there is no limit.
     *
     * @var int|null
     */
    public ?int $i_quantity_limit = null;

    /**
     * The program of the Purchase Option. One of the {@link \WlSdk\RsProgramSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsProgramSid
     */
    public ?int $id_program = null;

    /**
     * The type of the Purchase Option. One of the {@link \WlSdk\RsProgramTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsProgramTypeSid
     */
    public ?int $id_program_type = null;

    /**
     * Whether the Purchase Option is active now: it is switched on and has not expired.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Whether the Purchase Option is an introductory offer.
     *
     * @var bool|null
     */
    public ?bool $is_introductory = null;

    /**
     * With the column {@link \WlSdk\Wl\Promotion\Editor\List\ListColumnEnum}. Whether the Purchase Option is sold
     * in every location of
     * the business.
     *
     * @var bool|null
     */
    public ?bool $is_location_all = null;

    /**
     * Whether clients can buy the Purchase Option online. `false` if only the staff can sell it.
     *
     * @var bool|null
     */
    public ?bool $is_online_sell = null;

    /**
     * With the column {@link \WlSdk\Wl\Promotion\Editor\List\ListColumnEnum}. Whether the Purchase Option renews
     * itself.
     *
     * @var bool|null
     */
    public ?bool $is_renew = null;

    /**
     * The key of the Purchase Option.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * With the column {@link \WlSdk\Wl\Promotion\Editor\List\ListColumnEnum}. Who created the Purchase Option: the
     * word for the
     * franchisor, for an admin, or the public name of a staff member of the business. Empty for anybody else.
     *
     * @var string|null
     */
    public ?string $text_create_by = null;

    /**
     * With the column {@link \WlSdk\Wl\Promotion\Editor\List\ListColumnEnum}. When the Purchase Option was
     * created, in the time zone and
     * the format of the business.
     *
     * @var string|null
     */
    public ?string $text_create_date = null;

    /**
     * With the column {@link \WlSdk\Wl\Promotion\Editor\List\ListColumnEnum}. Who changed the Purchase Option
     * last, named as the creator,
     * or the words for an option that nobody changed.
     *
     * @var string|null
     */
    public ?string $text_edit_by = null;

    /**
     * With the column {@link \WlSdk\Wl\Promotion\Editor\List\ListColumnEnum}. When the Purchase Option was changed
     * last, or the words for
     * an option that nobody changed.
     *
     * @var string|null
     */
    public ?string $text_edit_date = null;

    /**
     * How long the Purchase Option lasts: the number of periods, the last date or the word for no end. Empty if
     * it has no length, as a guest pass.
     *
     * @var string|null
     */
    public ?string $text_length = null;

    /**
     * The price in the currency of the Purchase Option, or the word for a free one.
     *
     * @var string|null
     */
    public ?string $text_price = null;

    /**
     * The period that the price of a membership is paid for. Empty for the other types.
     *
     * @var string|null
     */
    public ?string $text_price_period = null;

    /**
     * The title of the type of the Purchase Option.
     *
     * @var string|null
     */
    public ?string $text_program_type = null;

    /**
     * The titles of the service categories of the Purchase Option, those of its components for a package.
     *
     * @var string|null
     */
    public ?string $text_service_category = null;

    /**
     * The title of the Purchase Option in the language of the business.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * The visits that the Purchase Option includes, with the attending restriction, or the word for no limit.
     *
     * @var string|null
     */
    public ?string $text_visit = null;

    /**
     * The link to the page where the Purchase Option is edited.
     *
     * @var string|null
     */
    public ?string $url_edit = null;

    /**
     * The link to the small image of the Purchase Option. Empty if it has no image.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    public function __construct(array $data)
    {
        $this->a_client_group = isset($data['a_client_group']) ? (array)$data['a_client_group'] : null;
        $this->a_client_type = isset($data['a_client_type']) ? (array)$data['a_client_type'] : null;
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->a_shop_category = isset($data['a_shop_category']) ? (array)$data['a_shop_category'] : null;
        $this->dl_terminate = isset($data['dl_terminate']) ? (string)$data['dl_terminate'] : null;
        $this->dtl_publish = isset($data['dtl_publish']) ? (string)$data['dtl_publish'] : null;
        $this->dtl_unpublish = isset($data['dtl_unpublish']) ? (string)$data['dtl_unpublish'] : null;
        $this->i_client = isset($data['i_client']) ? (int)$data['i_client'] : null;
        $this->i_quantity_limit = isset($data['i_quantity_limit']) ? (int)$data['i_quantity_limit'] : null;
        $this->id_program = isset($data['id_program']) ? (int)$data['id_program'] : null;
        $this->id_program_type = isset($data['id_program_type']) ? (int)$data['id_program_type'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_introductory = isset($data['is_introductory']) ? (bool)$data['is_introductory'] : null;
        $this->is_location_all = isset($data['is_location_all']) ? (bool)$data['is_location_all'] : null;
        $this->is_online_sell = isset($data['is_online_sell']) ? (bool)$data['is_online_sell'] : null;
        $this->is_renew = isset($data['is_renew']) ? (bool)$data['is_renew'] : null;
        $this->k_promotion = isset($data['k_promotion']) ? (string)$data['k_promotion'] : null;
        $this->text_create_by = isset($data['text_create_by']) ? (string)$data['text_create_by'] : null;
        $this->text_create_date = isset($data['text_create_date']) ? (string)$data['text_create_date'] : null;
        $this->text_edit_by = isset($data['text_edit_by']) ? (string)$data['text_edit_by'] : null;
        $this->text_edit_date = isset($data['text_edit_date']) ? (string)$data['text_edit_date'] : null;
        $this->text_length = isset($data['text_length']) ? (string)$data['text_length'] : null;
        $this->text_price = isset($data['text_price']) ? (string)$data['text_price'] : null;
        $this->text_price_period = isset($data['text_price_period']) ? (string)$data['text_price_period'] : null;
        $this->text_program_type = isset($data['text_program_type']) ? (string)$data['text_program_type'] : null;
        $this->text_service_category = isset($data['text_service_category']) ? (string)$data['text_service_category'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->text_visit = isset($data['text_visit']) ? (string)$data['text_visit'] : null;
        $this->url_edit = isset($data['url_edit']) ? (string)$data['url_edit'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
    }
}
