<?php
namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

use WlSdk\WlSdkClient;

/**
 * Calculates amount of cart.
 */
class CatalogCartApi
{
    /**
     * The list of cart items with the next structure:
     *
     * @var array[]|null
     */
    public ?array $a_item = null;

    /**
     * The discount as a percentage.
     *
     * @var float|null
     */
    public ?float $f_discount_percent = null;

    /**
     * If `true`, every item is checked at the cart. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_check_cart_item = null;

    /**
     * The business key.
     * 
     * This field isn't used directly, but described for correct JavaScript auto-generation.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The business location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The manual discount amount in dollars, excluding tax.
     * Staff members can set this amount when making a sale.
     *
     * @var string|null
     */
    public ?string $m_discount_flat = null;

    /**
     * The amount of tips.
     *
     * @var string|null
     */
    public ?string $m_tip = null;

    /**
     * The discount code.
     * 
     * This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    /**
     * The key of the current user.
     *
     * @var string|null
     */
    public ?string $uid_current = null;

    /**
     * The key of the user who performed the purchase.
     *
     * @var string|null
     */
    public ?string $uid_customer = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calculates amount of cart.
     *
     * Used in the staff app checkout flow to show a live price summary before the staff member processes
     * a client's payment. Returns the full breakdown so the staff member can confirm the total with
     * the client before charging.
     *
     * @return CatalogCartApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CatalogCartApiGetResponse
    {
        return new CatalogCartApiGetResponse($this->client->request('/Wl/Catalog/StaffApp/CatalogCart/CatalogCart.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_item' => $this->a_item,
            'f_discount_percent' => $this->f_discount_percent,
            'is_check_cart_item' => $this->is_check_cart_item,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'm_discount_flat' => $this->m_discount_flat,
            'm_tip' => $this->m_tip,
            'text_discount_code' => $this->text_discount_code,
            'uid_current' => $this->uid_current,
            'uid_customer' => $this->uid_customer,
            ],
            static fn($v) => $v !== null
        );
    }
}
