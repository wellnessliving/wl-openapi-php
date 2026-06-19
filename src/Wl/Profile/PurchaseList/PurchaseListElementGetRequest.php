<?php
namespace WlSdk\Wl\Profile\PurchaseList;

class PurchaseListElementGetRequest
{
    /**
     * Image Height in pixels. Please specify this value if you need purchase image to be returned in specific
     * size.
     * In case this value is not specified returned image will have default purchase size.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * Image Width in pixels. Please specify this value if you need purchase image to be returned in specific size.
     * In case this value is not specified returned image will have default purchase size.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

    /**
     * The business key. Used with `k_session_pass` variable and
     * also with gift card components.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The ID of the redemption code used to obtain the item. This should be specified only for items obtained via
     * redemption code (not for ordinary purchases or for purchased promotions without purchases).
     * This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_code = null;

    /**
     * The key of an entirely booked event. This must be specified if the purchased item is a whole event
     * and part of a package.
     *
     * @var string|null
     */
    public ?string $k_enrollment_book = null;

    /**
     * The key of a purchased product. This must be specified if the purchased item is a product and part of a
     * package.
     *
     * @var string|null
     */
    public ?string $k_login_product = null;

    /**
     * The key of the user's promotion. This should only be specified for promotions given without a purchase.
     * This isn't for ordinary purchases or for promotions obtained via redemption codes. This will be `null` if
     * not set yet.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The key of the purchased item. This should be specified only for ordinary purchases
     * and not for purchases obtained via redemption codes or as a result of an old import.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * The ID of the makeup session used to attend an event.
     * 
     * This must be specified if the purchase item is a component of a package and a whole event booking.
     * And only for items which aren't components of package.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    public function params(): array
    {
        return array_filter(
            [
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
