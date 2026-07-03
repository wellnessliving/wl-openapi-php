<?php

namespace WlSdk\Wl\Profile\PurchaseList;

/**
 * Response from GET
 */
class PurchaseListElementGetResponse
{
    /**
     * A list of components. This won't be empty if this purchase element is a package or a coupon.
     * In the case of a package, every element has keys:
     *
     * @var PurchaseListElementGetResponseComponentA[]|PurchaseListElementGetResponseComponentB[]|null
     */
    public ?array $a_component = null;

    /**
     * An array containing information about the image of the purchased item. Every element has the following keys:
     *
     * `null` in a case when the item has no logo.
     *
     * @var PurchaseListElementGetResponseLogo|null
     */
    public ?PurchaseListElementGetResponseLogo $a_logo = null;

    /**
     * This field is used only for promotions. It contains restrictions that will apply to bookings made with
     * this promotion. Every element has the following keys:
     * This will be an empty array for other purchased items.
     *
     * @var PurchaseListElementGetResponseRestrict[]|null
     */
    public ?array $a_restrict = null;

    /**
     * The list of taxes paid for the purchased item. Every element has the following fields:
     *
     * @var PurchaseListElementGetResponseTax[]|null
     */
    public ?array $a_tax = null;

    /**
     * This is `true` only if the purchased item is a promotion and the user can control the renewal of the
     * promotion.
     * Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $can_renew = null;

    /**
     * The cancellation date of the promotion. Only available if the item is a promotion and has been canceled.
     *
     * @var string|null
     */
    public ?string $dl_cancel = null;

    /**
     * The expiration date of the promotion. Only available if the item is a promotion.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * The local date of the purchase in MySQL format.
     *
     * @var string|null
     */
    public ?string $dl_purchase = null;

    /**
     * The local date in MySQL format when mail about purchasing was sent (or will be sent) to the user.
     * This won't be empty only for gift cards.
     *
     * @var string|null
     */
    public ?string $dl_send = null;

    /**
     * The start date of the promotion. Only available if the item is a promotion.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * The local date of cancellation in MySQL format. Only available if the item is a membership.
     *
     * @var string|null
     */
    public ?string $dt_cancel = null;

    /**
     * The end date of the promotion hold. This is used only for promotions on hold.
     * This value may be empty if the hold is eternal.
     *
     * @var string|null
     */
    public ?string $dt_hold_end = null;

    /**
     * The start date of the promotion hold. Only available if the item is a promotion and on hold.
     *
     * @var string|null
     */
    public ?string $dt_hold_start = null;

    /**
     * The purchase date of the purchased item. This is given in UTC in MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_purchase = null;

    /**
     * The date in MySQL format when gift card was redeemed. Only available if the item is a gift card.
     *
     * @var string|null
     */
    public ?string $dt_redeem = null;

    /**
     * The percentage value of the discount for the client type. This will be empty if a discount wasn't applied.
     *
     * @var float|null
     */
    public ?float $f_discount_login_type_percent = null;

    /**
     * The description of the purchased item.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * The number of sessions remaining for a promotion. This value is used only for promotions. This value will be
     * `0` if
     * the purchased item isn't a promotion or if there are no remaining sessions.
     *
     * @var int|null
     */
    public ?int $i_book = null;

    /**
     * Displays the number of minutes of sessions that were booked by this promotion. This isn't `0` only for
     * promotions.
     *
     * @var int|null
     */
    public ?int $i_book_duration = null;

    /**
     * The number of purchased items bought at the time of purchase.
     * This will be `0` for purchase items obtained via a redemption code or as a result of an import.
     *
     * @var int|null
     */
    public ?int $i_buy = null;

    /**
     * The number of days notice before the client is able to set cancel date.
     *
     * @var int|null
     */
    public ?int $i_client_cancel_notice_days = null;

    /**
     * The percentage value of the discount given by a reward prize. This will be `0` if a discount wasn't applied.
     *
     * @var int|null
     */
    public ?int $i_discount_count = null;

    /**
     * The duration of the promotion. The measurement unit is `id_duration`. This field is only added for
     * promotions.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * The number of bookings left with this promotion. This value is used only for non-sequential promotions.
     *
     * @var int|null
     */
    public ?int $i_left = null;

    /**
     * The number of visits that can be made with this promotion. This value is used only for promotions.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The interval duration of the regular payments. This value is used only for membership-type promotions.
     *
     * @var int|null
     */
    public ?int $i_payment_period = null;

    /**
     * The number of remaining bookings for the promotion. This is used only for promotions.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    /**
     * The number of minutes remaining for the promotion.
     * This is used only for promotions that work with a limited number of minutes.
     *
     * @var int|null
     */
    public ?int $i_remain_duration = null;

    /**
     * Displays how many times promotion was updated. This isn't `0` only for promotions.
     *
     * @var int|null
     */
    public ?int $i_renew = null;

    /**
     * The number of visits that were attended for the promotion. This is used only for promotions.
     *
     * @var int|null
     */
    public ?int $i_use = null;

    /**
     * The number of minutes the user has already used with this purchase of this promotion. This isn't `0` only
     * for promotions.
     *
     * @var int|null
     */
    public ?int $i_use_duration = null;

    /**
     * The activation mode. One of the {@link \WlSdk\RsActivationSid} constants. This field is only added for
     * promotions.
     *
     * @var int|null
     * @see \WlSdk\RsActivationSid
     */
    public ?int $id_activation = null;

    /**
     * The type of discount given via a reward prize. One of the {@link \WlSdk\RsCommissionTypeSid} constants. This
     * will be empty
     * if this discount wasn't applied.
     *
     * @var int|null
     * @see \WlSdk\RsCommissionTypeSid
     */
    public ?int $id_discount_commission_type = null;

    /**
     * The type of duration for the promotion. This is used only for membership-type promotions. This determines
     * whether the promotion lasts indefinitely, has a fixed duration, or ends on a specific date. The measurement
     * unit
     * for key `i_payment_period`. One of the {@link \WlSdk\RsDurationTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsDurationTypeSid
     */
    public ?int $id_duration = null;

    /**
     * The ID of the promotion program. This is used only for promotions.
     * The measurement unit for key `i_payment_period`. The ID of promotion program type.
     * One of the {@link \WlSdk\RsProgramTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsProgramTypeSid
     */
    public ?int $id_program_type = null;

    /**
     * The ID of the purchase item type. The measurement unit for key `i_payment_period`.
     * The ID of purchase item type. One of the {@link \WlSdk\RsPurchaseItemSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPurchaseItemSid
     */
    public ?int $id_purchase_item = null;

    /**
     * The ID of the sale category. One of the constants {@link \WlSdk\RsSaleSid}.
     *
     * @var int|null
     * @see \WlSdk\RsSaleSid
     */
    public ?int $id_sale = null;

    /**
     * If `true`, then the purchase item is active. If `false`, then the purchase item isn't active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Whether the purchase item is asset.
     *
     * @var bool|null
     */
    public ?bool $is_asset = null;

    /**
     * If `true`, then a promotion is pending cancellation. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_cancel_pending = null;

    /**
     * If `true`, then a promotion can be canceled by a client. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_client_cancel_allow = null;

    /**
     * If `true`, then the purchased item is a component of another purchase item, as is the case of a package.
     * If `false`, then the purchased item isn't a component of another purchase item.
     *
     * @var bool|null
     */
    public ?bool $is_component = null;

    /**
     * If `true`, then this promotion will be converted to a different promotion after it expires. If `false`, then
     * the
     * promotion won't be converted to a different promotion after it expires. This can only be true for certain
     * promotions.
     *
     * @var bool|null
     */
    public ?bool $is_convert = null;

    /**
     * `true` if the purchase item is an event; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * This is `true` only if the purchased item is a promotion that has expired. Otherwise, this will be `false`
     * in all other cases.
     *
     * @var bool|null
     */
    public ?bool $is_expire = null;

    /**
     * This is `true` only if the purchased item is a promotion and has been placed on hold.
     * Otherwise, this is `false` in all other cases.
     *
     * @var bool|null
     */
    public ?bool $is_hold = null;

    /**
     * If `true`, then the usage of this purchased item is disabled.
     * If `false`, then the usage of this purchased item is enabled.
     *
     * @var bool|null
     */
    public ?bool $is_limit = null;

    /**
     * If `true`, then the discount was applied for the member type.
     * If `false`, then the discount was applied for the pass holder type.
     * If `null`, then the discount was applied for the prospect type. This won't be `null` only if a discount
     * based
     * on a client type was applied.
     *
     * @var bool|null
     */
    public ?bool $is_login_type_member = null;

    /**
     * If `true`, then the gift card email notification will be sent to the receiver. This is `true` only if the
     * purchased item is a gift card. Otherwise, this will be `false` in all other cases.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * If `true`, then the gift card email notification has been sent. This can only be `true` if the purchased
     * item
     * is a gift card. Otherwise, this will be `false` in all other cases.
     *
     * @var bool|null
     */
    public ?bool $is_past = null;

    /**
     * This is `true` if the gift card has been redeemed.
     * This can only be `true` if the purchased item is a gift card. Otherwise, this will be `false` in all other
     * cases.
     *
     * @var bool|null
     */
    public ?bool $is_redeem = null;

    /**
     * This is `true` if the promotion is auto-renewable. This can only be `true` if the purchased item is a
     * promotion.
     * Otherwise, this will be `false` in all other cases.
     *
     * @var bool|null
     */
    public ?bool $is_renew = null;

    /**
     * This is `true` if the promotion has been transferred. This can only be true if the purchased item is a
     * promotion.
     * This is `false` if the promotion hasn't been transferred or in all other cases.
     *
     * @var bool|null
     */
    public ?bool $is_transfer = null;

    /**
     * The key of the redemption code. This value will not be `0` if the purchased item is obtained via a
     * redemption
     * code or if it's a component of a package obtained via a redemption code.
     *
     * @var string|null
     */
    public ?string $k_code_result = null;

    /**
     * The key of the currency used to make the purchase.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * The key of the item. This can correspond to one of many values depending on {@link
     * \WlSdk\Wl\Profile\PurchaseList\PurchaseListElementGetResponse::$id_sale}.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The key of the purchased promotion. This won't be `0` only for promotions.
     *
     * @var string|null
     */
    public ?string $k_login_promotion_result = null;

    /**
     * The key of the whole purchase, including the given purchased item.
     *
     * @var string|null
     */
    public ?string $k_purchase_result = null;

    /**
     * The cost of the purchased item.
     *
     * @var string|null
     */
    public ?string $m_cost_item = null;

    /**
     * The total cost of the purchase, including taxes and fees.
     *
     * @var string|null
     */
    public ?string $m_cost_total = null;

    /**
     * The amount of the discount via prize. This will be empty if this discount wasn't applied.
     *
     * @var string|null
     */
    public ?string $m_discount_amount = null;

    /**
     * The amount of the discount for the client type. This value will be empty if the discount wasn't applied.
     *
     * @var string|null
     */
    public ?string $m_discount_login_type_amount = null;

    /**
     * The amount of the manual discount. This will be empty if this discount wasn't applied.
     *
     * @var string|null
     */
    public ?string $m_discount_manual = null;

    /**
     * The amount to pay for each payment period. This is used only for promotions with the membership program
     * type.
     *
     * @var string|null
     */
    public ?string $m_period_price = null;

    /**
     * The source price of item.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The amount refunded. This will be `0` if there are no refunds.
     *
     * @var string|null
     */
    public ?string $m_refund = null;

    /**
     * Cancellation fee amount.
     *
     * `null` if no need charge fee.
     *
     * @var string|null
     */
    public ?string $m_terminate_fee = null;

    /**
     * The redemption code. This value is used only if the purchase is bought via a redemption code.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    /**
     * The code to redeem the gift card. This isn't empty only for gift cards.
     *
     * This can be auto-generated or custom (entered manually by the staff member during purchase).
     * The max length is 20 characters, including numbers and letters.
     *
     * @var string|null
     */
    public ?string $s_gift_code = null;

    /**
     * The name of gift recipient. This isn't empty only for gift cards.
     *
     * @var string|null
     */
    public ?string $s_gift_recipient = null;

    /**
     * The name of the staff member who disabled the usage of the purchased item.
     * This will be empty if the purchased item is enabled.
     *
     * @var string|null
     */
    public ?string $s_limit_actor = null;

    /**
     * The email address to which the gift card was sent. This is used only for gift cards.
     *
     * @var string|null
     */
    public ?string $s_mail = null;

    /**
     * The test of the message sent to the gift card recipient. This is used only for gift cards.
     * This will be empty if an email notification shouldn't be sent.
     *
     * @var string|null
     */
    public ?string $s_message = null;

    /**
     * The name of the user who paid for this purchase.
     *
     * @var string|null
     */
    public ?string $s_payer = null;

    /**
     * The title of the converted promotion. This value is used only for promotions that must be converted to
     * another
     * promotion after expiration.
     *
     * @var string|null
     */
    public ?string $s_promotion_convert = null;

    /**
     * The purchase ID number as it appears on the receipt. This value will also include the leading 0s for the ID
     * number.
     *
     * @var string|null
     */
    public ?string $s_purchase = null;

    /**
     * The name of the user who paid for this purchase.
     *
     * @var string|null
     */
    public ?string $s_recipient = null;

    /**
     * The name of the sender. This value is used only for gift cards.
     *
     * @var string|null
     */
    public ?string $s_sender = null;

    /**
     * The name of the purchased item.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * The string ID of the purchased item. This ID may be used to change the view of the purchased item.
     *
     * @var string|null
     */
    public ?string $sid_value = null;

    /**
     * Expire conditions for the purchased item (only for promotion).
     *
     * @var string|null
     */
    public ?string $text_expire = null;

    /**
     * Text describing guest passes available for the purchased promotion.
     *
     * @var string|null
     */
    public ?string $text_guest_pass = null;

    /**
     * The key of the user who paid for this purchase.
     * `null` in a case when there was no money transaction.
     *
     * @var string|null
     */
    public ?string $uid_payer = null;

    /**
     * The key of the user who paid for this purchase.
     *
     * @var string|null
     */
    public ?string $uid_recipient = null;

    public function __construct(array $data)
    {
        $this->a_component = $data['a_component'] ?? null;
        $this->a_logo = isset($data['a_logo']) ? new PurchaseListElementGetResponseLogo((array)$data['a_logo']) : null;
        $this->a_restrict = isset($data['a_restrict']) ? array_map(static fn ($item) => new PurchaseListElementGetResponseRestrict((array)$item), (array)$data['a_restrict']) : null;
        $this->a_tax = isset($data['a_tax']) ? array_map(static fn ($item) => new PurchaseListElementGetResponseTax((array)$item), (array)$data['a_tax']) : null;
        $this->can_renew = isset($data['can_renew']) ? (bool)$data['can_renew'] : null;
        $this->dl_cancel = isset($data['dl_cancel']) ? (string)$data['dl_cancel'] : null;
        $this->dl_end = isset($data['dl_end']) ? (string)$data['dl_end'] : null;
        $this->dl_purchase = isset($data['dl_purchase']) ? (string)$data['dl_purchase'] : null;
        $this->dl_send = isset($data['dl_send']) ? (string)$data['dl_send'] : null;
        $this->dl_start = isset($data['dl_start']) ? (string)$data['dl_start'] : null;
        $this->dt_cancel = isset($data['dt_cancel']) ? (string)$data['dt_cancel'] : null;
        $this->dt_hold_end = isset($data['dt_hold_end']) ? (string)$data['dt_hold_end'] : null;
        $this->dt_hold_start = isset($data['dt_hold_start']) ? (string)$data['dt_hold_start'] : null;
        $this->dt_purchase = isset($data['dt_purchase']) ? (string)$data['dt_purchase'] : null;
        $this->dt_redeem = isset($data['dt_redeem']) ? (string)$data['dt_redeem'] : null;
        $this->f_discount_login_type_percent = isset($data['f_discount_login_type_percent']) ? (float)$data['f_discount_login_type_percent'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->i_book = isset($data['i_book']) ? (int)$data['i_book'] : null;
        $this->i_book_duration = isset($data['i_book_duration']) ? (int)$data['i_book_duration'] : null;
        $this->i_buy = isset($data['i_buy']) ? (int)$data['i_buy'] : null;
        $this->i_client_cancel_notice_days = isset($data['i_client_cancel_notice_days']) ? (int)$data['i_client_cancel_notice_days'] : null;
        $this->i_discount_count = isset($data['i_discount_count']) ? (int)$data['i_discount_count'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_left = isset($data['i_left']) ? (int)$data['i_left'] : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_payment_period = isset($data['i_payment_period']) ? (int)$data['i_payment_period'] : null;
        $this->i_remain = isset($data['i_remain']) ? (int)$data['i_remain'] : null;
        $this->i_remain_duration = isset($data['i_remain_duration']) ? (int)$data['i_remain_duration'] : null;
        $this->i_renew = isset($data['i_renew']) ? (int)$data['i_renew'] : null;
        $this->i_use = isset($data['i_use']) ? (int)$data['i_use'] : null;
        $this->i_use_duration = isset($data['i_use_duration']) ? (int)$data['i_use_duration'] : null;
        $this->id_activation = isset($data['id_activation']) ? (int)$data['id_activation'] : null;
        $this->id_discount_commission_type = isset($data['id_discount_commission_type']) ? (int)$data['id_discount_commission_type'] : null;
        $this->id_duration = isset($data['id_duration']) ? (int)$data['id_duration'] : null;
        $this->id_program_type = isset($data['id_program_type']) ? (int)$data['id_program_type'] : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->id_sale = isset($data['id_sale']) ? (int)$data['id_sale'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_asset = isset($data['is_asset']) ? (bool)$data['is_asset'] : null;
        $this->is_cancel_pending = isset($data['is_cancel_pending']) ? (bool)$data['is_cancel_pending'] : null;
        $this->is_client_cancel_allow = isset($data['is_client_cancel_allow']) ? (bool)$data['is_client_cancel_allow'] : null;
        $this->is_component = isset($data['is_component']) ? (bool)$data['is_component'] : null;
        $this->is_convert = isset($data['is_convert']) ? (bool)$data['is_convert'] : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->is_expire = isset($data['is_expire']) ? (bool)$data['is_expire'] : null;
        $this->is_hold = isset($data['is_hold']) ? (bool)$data['is_hold'] : null;
        $this->is_limit = isset($data['is_limit']) ? (bool)$data['is_limit'] : null;
        $this->is_login_type_member = isset($data['is_login_type_member']) ? (bool)$data['is_login_type_member'] : null;
        $this->is_mail = isset($data['is_mail']) ? (bool)$data['is_mail'] : null;
        $this->is_past = isset($data['is_past']) ? (bool)$data['is_past'] : null;
        $this->is_redeem = isset($data['is_redeem']) ? (bool)$data['is_redeem'] : null;
        $this->is_renew = isset($data['is_renew']) ? (bool)$data['is_renew'] : null;
        $this->is_transfer = isset($data['is_transfer']) ? (bool)$data['is_transfer'] : null;
        $this->k_code_result = isset($data['k_code_result']) ? (string)$data['k_code_result'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->k_login_promotion_result = isset($data['k_login_promotion_result']) ? (string)$data['k_login_promotion_result'] : null;
        $this->k_purchase_result = isset($data['k_purchase_result']) ? (string)$data['k_purchase_result'] : null;
        $this->m_cost_item = isset($data['m_cost_item']) ? (string)$data['m_cost_item'] : null;
        $this->m_cost_total = isset($data['m_cost_total']) ? (string)$data['m_cost_total'] : null;
        $this->m_discount_amount = isset($data['m_discount_amount']) ? (string)$data['m_discount_amount'] : null;
        $this->m_discount_login_type_amount = isset($data['m_discount_login_type_amount']) ? (string)$data['m_discount_login_type_amount'] : null;
        $this->m_discount_manual = isset($data['m_discount_manual']) ? (string)$data['m_discount_manual'] : null;
        $this->m_period_price = isset($data['m_period_price']) ? (string)$data['m_period_price'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->m_refund = isset($data['m_refund']) ? (string)$data['m_refund'] : null;
        $this->m_terminate_fee = isset($data['m_terminate_fee']) ? (string)$data['m_terminate_fee'] : null;
        $this->s_code = isset($data['s_code']) ? (string)$data['s_code'] : null;
        $this->s_gift_code = isset($data['s_gift_code']) ? (string)$data['s_gift_code'] : null;
        $this->s_gift_recipient = isset($data['s_gift_recipient']) ? (string)$data['s_gift_recipient'] : null;
        $this->s_limit_actor = isset($data['s_limit_actor']) ? (string)$data['s_limit_actor'] : null;
        $this->s_mail = isset($data['s_mail']) ? (string)$data['s_mail'] : null;
        $this->s_message = isset($data['s_message']) ? (string)$data['s_message'] : null;
        $this->s_payer = isset($data['s_payer']) ? (string)$data['s_payer'] : null;
        $this->s_promotion_convert = isset($data['s_promotion_convert']) ? (string)$data['s_promotion_convert'] : null;
        $this->s_purchase = isset($data['s_purchase']) ? (string)$data['s_purchase'] : null;
        $this->s_recipient = isset($data['s_recipient']) ? (string)$data['s_recipient'] : null;
        $this->s_sender = isset($data['s_sender']) ? (string)$data['s_sender'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->sid_value = isset($data['sid_value']) ? (string)$data['sid_value'] : null;
        $this->text_expire = isset($data['text_expire']) ? (string)$data['text_expire'] : null;
        $this->text_guest_pass = isset($data['text_guest_pass']) ? (string)$data['text_guest_pass'] : null;
        $this->uid_payer = isset($data['uid_payer']) ? (string)$data['uid_payer'] : null;
        $this->uid_recipient = isset($data['uid_recipient']) ? (string)$data['uid_recipient'] : null;
    }
}
