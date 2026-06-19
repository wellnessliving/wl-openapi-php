<?php
namespace WlSdk\Wl\Profile\PurchaseList;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about 1 purchase item.
 */
class PurchaseListElementApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * Image Height in pixels. Please specify this value if you need purchase image to be returned in specific size.
In case this value is not specified returned image will have default purchase size.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * Image Width in pixels. Please specify this value if you need purchase image to be returned in specific size.
In case this value is not specified returned image will have default purchase size.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

    /**
     * The business key. Used with `k_session_pass` variable and
also with gift card components.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The ID of the redemption code used to obtain the item. This should be specified only for items obtained via
redemption code (not for ordinary purchases or for purchased promotions without purchases).
This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_code = null;

    /**
     * The key of an entirely booked event. This must be specified if the purchased item is a whole event
and part of a package.
     *
     * @var string|null
     */
    public ?string $k_enrollment_book = null;

    /**
     * The key of a purchased product. This must be specified if the purchased item is a product and part of a package.
     *
     * @var string|null
     */
    public ?string $k_login_product = null;

    /**
     * The key of the user's promotion. This should only be specified for promotions given without a purchase.
This isn't for ordinary purchases or for promotions obtained via redemption codes. This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The key of the purchased item. This should be specified only for ordinary purchases
and not for purchases obtained via redemption codes or as a result of an old import.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * The ID of the makeup session used to attend an event.

This must be specified if the purchase item is a component of a package and a whole event booking.
And only for items which aren't components of package.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about 1 purchase item.
     *
     * Loads the full details of a single purchase item for display on the client profile, including
     *  pricing, discounts, taxes, refunds, and current status. The item can be identified by
     *  purchase item key, redemption code, or login promotion key.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_component: No description.
     *   - array[] a_logo: No description.
     *   - array[] a_restrict: No description.
     *   - array[] a_tax: No description.
     *   - bool can_renew: This is `true` only if the purchased item is a promotion and the user can control the renewal of the promotion.
Otherwise, this will be `false`.
     *   - string dl_cancel: The cancellation date of the promotion. Only available if the item is a promotion and has been canceled.
     *   - string dl_end: The expiration date of the promotion. Only available if the item is a promotion.
     *   - string dl_purchase: The local date of the purchase in MySQL format.
     *   - string dl_send: The local date in MySQL format when mail about purchasing was sent (or will be sent) to the user.
This won't be empty only for gift cards.
     *   - string dl_start: The start date of the promotion. Only available if the item is a promotion.
     *   - string dt_cancel: The local date of cancellation in MySQL format. Only available if the item is a membership.
     *   - string dt_hold_end: The end date of the promotion hold. This is used only for promotions on hold.
This value may be empty if the hold is eternal.
     *   - string dt_hold_start: The start date of the promotion hold. Only available if the item is a promotion and on hold.
     *   - string dt_purchase: The purchase date of the purchased item. This is given in UTC in MySQL format.
     *   - string dt_redeem: The date in MySQL format when gift card was redeemed. Only available if the item is a gift card.
     *   - float f_discount_login_type_percent: The percentage value of the discount for the client type. This will be empty if a discount wasn't applied.
     *   - string html_description: The description of the purchased item.
     *   - int i_book: The number of sessions remaining for a promotion. This value is used only for promotions. This value will be `0` if
the purchased item isn't a promotion or if there are no remaining sessions.
     *   - int i_book_duration: Displays the number of minutes of sessions that were booked by this promotion. This isn't `0` only for promotions.
     *   - int i_buy: The number of purchased items bought at the time of purchase.
This will be `0` for purchase items obtained via a redemption code or as a result of an import.
     *   - int i_client_cancel_notice_days: The number of days notice before the client is able to set cancel date.
     *   - int i_discount_count: The percentage value of the discount given by a reward prize. This will be `0` if a discount wasn't applied.
     *   - int i_duration: The duration of the promotion. The measurement unit is `id_duration`. This field is only added for promotions.
     *   - int i_left: The number of bookings left with this promotion. This value is used only for non-sequential promotions.
     *   - int i_limit: The number of visits that can be made with this promotion. This value is used only for promotions.
     *   - int i_payment_period: The interval duration of the regular payments. This value is used only for membership-type promotions.
     *   - int i_remain: The number of remaining bookings for the promotion. This is used only for promotions.
     *   - int i_remain_duration: The number of minutes remaining for the promotion.
This is used only for promotions that work with a limited number of minutes.
     *   - int i_renew: Displays how many times promotion was updated. This isn't `0` only for promotions.
     *   - int i_use: The number of visits that were attended for the promotion. This is used only for promotions.
     *   - int i_use_duration: The number of minutes the user has already used with this purchase of this promotion. This isn't `0` only for promotions.
     *   - int id_activation: The activation mode. One of the [RsActivationSid](#/components/schemas/RsActivationSid) constants. This field is only added for promotions.
     *   - int id_discount_commission_type: The type of discount given via a reward prize. One of the [RsCommissionTypeSid](#/components/schemas/RsCommissionTypeSid) constants. This will be empty
if this discount wasn't applied.
     *   - int id_duration: The type of duration for the promotion. This is used only for membership-type promotions. This determines
whether the promotion lasts indefinitely, has a fixed duration, or ends on a specific date. The measurement unit
for key `i_payment_period`. One of the [RsDurationTypeSid](#/components/schemas/RsDurationTypeSid) constants.
     *   - int id_program_type: The ID of the promotion program. This is used only for promotions.
The measurement unit for key `i_payment_period`. The ID of promotion program type.
One of the [RsProgramTypeSid](#/components/schemas/RsProgramTypeSid) constants.
     *   - int id_purchase_item: The ID of the purchase item type. The measurement unit for key `i_payment_period`.
The ID of purchase item type. One of the [RsPurchaseItemSid](#/components/schemas/RsPurchaseItemSid) constants.
     *   - int id_sale: The ID of the sale category. One of the constants [RsSaleSid](#/components/schemas/RsSaleSid).
     *   - bool is_active: If `true`, then the purchase item is active. If `false`, then the purchase item isn't active.
     *   - bool is_asset: Whether the purchase item is asset.
     *   - bool is_cancel_pending: If `true`, then a promotion is pending cancellation. Otherwise, this will be `false`.
     *   - bool is_client_cancel_allow: If `true`, then a promotion can be canceled by a client. Otherwise, this will be `false`.
     *   - bool is_component: If `true`, then the purchased item is a component of another purchase item, as is the case of a package.
If `false`, then the purchased item isn't a component of another purchase item.
     *   - bool is_convert: If `true`, then this promotion will be converted to a different promotion after it expires. If `false`, then the
promotion won't be converted to a different promotion after it expires. This can only be true for certain
promotions.
     *   - bool is_event: `true` if the purchase item is an event; `false` otherwise.
     *   - bool is_expire: This is `true` only if the purchased item is a promotion that has expired. Otherwise, this will be `false`
in all other cases.
     *   - bool is_hold: This is `true` only if the purchased item is a promotion and has been placed on hold.
Otherwise, this is `false` in all other cases.
     *   - bool is_limit: If `true`, then the usage of this purchased item is disabled.
If `false`, then the usage of this purchased item is enabled.
     *   - bool is_login_type_member: If `true`, then the discount was applied for the member type.
If `false`, then the discount was applied for the pass holder type.
If `null`, then the discount was applied for the prospect type. This won't be `null` only if a discount based
on a client type was applied.
     *   - bool is_mail: If `true`, then the gift card email notification will be sent to the receiver. This is `true` only if the
purchased item is a gift card. Otherwise, this will be `false` in all other cases.
     *   - bool is_past: If `true`, then the gift card email notification has been sent. This can only be `true` if the purchased item
is a gift card. Otherwise, this will be `false` in all other cases.
     *   - bool is_redeem: This is `true` if the gift card has been redeemed.
This can only be `true` if the purchased item is a gift card. Otherwise, this will be `false` in all other cases.
     *   - bool is_renew: This is `true` if the promotion is auto-renewable. This can only be `true` if the purchased item is a promotion.
Otherwise, this will be `false` in all other cases.
     *   - bool is_transfer: This is `true` if the promotion has been transferred. This can only be true if the purchased item is a promotion.
This is `false` if the promotion hasn't been transferred or in all other cases.
     *   - string k_code_result: The key of the redemption code. This value will not be `0` if the purchased item is obtained via a redemption
code or if it's a component of a package obtained via a redemption code.
     *   - string k_currency: The key of the currency used to make the purchase.
     *   - string k_id: The key of the item. This can correspond to one of many values depending on `id_sale`.
     *   - string k_login_promotion_result: The key of the purchased promotion. This won't be `0` only for promotions.
     *   - string k_purchase_result: The key of the whole purchase, including the given purchased item.
     *   - string m_cost_item: The cost of the purchased item.
     *   - string m_cost_total: The total cost of the purchase, including taxes and fees.
     *   - string m_discount_amount: The amount of the discount via prize. This will be empty if this discount wasn't applied.
     *   - string m_discount_login_type_amount: The amount of the discount for the client type. This value will be empty if the discount wasn't applied.
     *   - string m_discount_manual: The amount of the manual discount. This will be empty if this discount wasn't applied.
     *   - string m_period_price: The amount to pay for each payment period. This is used only for promotions with the membership program type.
     *   - string m_price: The source price of item.
     *   - string m_refund: The amount refunded. This will be `0` if there are no refunds.
     *   - string m_terminate_fee: Cancellation fee amount.

`null` if no need charge fee.
     *   - string s_code: The redemption code. This value is used only if the purchase is bought via a redemption code.
     *   - string s_gift_code: The code to redeem the gift card. This isn't empty only for gift cards.

This can be auto-generated or custom (entered manually by the staff member during purchase).
The max length is 20 characters, including numbers and letters.
     *   - string s_gift_recipient: The name of gift recipient. This isn't empty only for gift cards.
     *   - string s_limit_actor: The name of the staff member who disabled the usage of the purchased item.
This will be empty if the purchased item is enabled.
     *   - string s_mail: The email address to which the gift card was sent. This is used only for gift cards.
     *   - string s_message: The test of the message sent to the gift card recipient. This is used only for gift cards.
This will be empty if an email notification shouldn't be sent.
     *   - string s_payer: The name of the user who paid for this purchase.
     *   - string s_promotion_convert: The title of the converted promotion. This value is used only for promotions that must be converted to another
promotion after expiration.
     *   - string s_purchase: The purchase ID number as it appears on the receipt. This value will also include the leading 0s for the ID number.
     *   - string s_recipient: The name of the user who paid for this purchase.
     *   - string s_sender: The name of the sender. This value is used only for gift cards.
     *   - string s_title: The name of the purchased item.
     *   - string sid_value: The string ID of the purchased item. This ID may be used to change the view of the purchased item.
     *   - string text_expire: Expire conditions for the purchased item (only for promotion).
     *   - string text_guest_pass: Text describing guest passes available for the purchased promotion.
     *   - string uid_payer: The key of the user who paid for this purchase.
`null` in a case when there was no money transaction.
     *   - string uid_recipient: The key of the user who paid for this purchase.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Profile/PurchaseList/PurchaseListElement.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'k_business' => $this->k_business,
            'k_code' => $this->k_code,
            'k_enrollment_book' => $this->k_enrollment_book,
            'k_login_product' => $this->k_login_product,
            'k_login_promotion' => $this->k_login_promotion,
            'k_purchase_item' => $this->k_purchase_item,
            'k_session_pass' => $this->k_session_pass,
            ],
            static fn($v) => $v !== null
        );
    }
}
