<?php

namespace WlSdk\Wl\Purchase\Receipt;

class PurchaseReceiptGetRequest
{
    /**
     * Whether {@link \WlSdk\Wl\Purchase\Receipt\PurchaseReceiptGetResponse::$url_print} and {@link
     * \WlSdk\Wl\Purchase\Receipt\PurchaseReceiptGetResponse::$url_print_receipt} require authentication.
     *
     * If `true`, the URL contains a token that allows temporary access to the page without logging in. If 'false',
     * the
     * page requires authentication.
     *
     * It makes no difference when the access to the purchase is granted by {@link
     * \WlSdk\Wl\Purchase\Receipt\PurchaseReceipt}:
     * the URLs then always contain that token.
     *
     * @var bool|null
     */
    public ?bool $is_url_public = null;

    /**
     * The key of the purchase.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    /**
     * The temporary token that gives access to the receipt without a login.
     *
     * Optional. Pass it when the user has no access to the purchase, for example a guest: the token is returned by
     * {@link \WlSdk\Wl\Catalog\Payment\PaymentPostResponse::$text_receipt_token} after the payment and is valid
     * for one hour. An empty string
     * means no token. If the user has access to the purchase, the token is not checked. If the token is not valid
     * for
     * the purchase and the user has no access, the API returns the `access` error.
     *
     * When the access is granted by the token, {@link
     * \WlSdk\Wl\Purchase\Receipt\PurchaseReceiptGetResponse::$url_print} and
     * {@link \WlSdk\Wl\Purchase\Receipt\PurchaseReceiptGetResponse::$url_print_receipt} contain the same token, so
     * they stop working when the token
     * expires.
     *
     * @var string|null
     */
    public ?string $text_token = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_url_public' => $this->is_url_public,
            'k_purchase' => $this->k_purchase,
            'text_token' => $this->text_token,
            ],
            static fn ($v) => $v !== null
        );
    }
}
