<?php

namespace WlSdk\Wl\Profile\Purchase;

class PurchaseElementGetRequest
{
    /**
     * The business key. Currently used only with `k_session_pass` variable.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the redemption code used to obtain some goods.
     * This should be specified only for items obtained via redemption code (not for ordinary purchases or for
     * purchased
     * promotions without purchases). This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_code = null;

    /**
     * The key of an entirely booked event.
     * This must be specified if the purchased item is a whole event and a component of a package.
     *
     * @var string|null
     */
    public ?string $k_enrollment_book = null;

    /**
     * The key of a purchased product.
     * This must be specified if the purchased item is a product and a component of a package.
     *
     * @var string|null
     */
    public ?string $k_login_product = null;

    /**
     * The key of the user's promotion.
     * This should only be specified for promotions given without a purchase. This isn't for ordinary purchases or
     * for
     * promotions obtained via redemption codes. This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The key of the purchased item. This should be specified only for ordinary purchases, not for those obtained
     * via
     * redemption codes or as a result of an old import.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * The key of the make-up session used to attend an event.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_code' => $this->k_code,
            'k_enrollment_book' => $this->k_enrollment_book,
            'k_login_product' => $this->k_login_product,
            'k_login_promotion' => $this->k_login_promotion,
            'k_purchase_item' => $this->k_purchase_item,
            'k_session_pass' => $this->k_session_pass,
            ],
            static fn ($v) => $v !== null
        );
    }
}
