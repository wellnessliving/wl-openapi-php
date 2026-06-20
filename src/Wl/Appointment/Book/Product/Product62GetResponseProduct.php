<?php
namespace WlSdk\Wl\Appointment\Book\Product;

class Product62GetResponseProduct
{
    /**
     * Information about first image connected to the product.
     *
     * @var Product62GetResponseProductLogo|null
     */
    public ?Product62GetResponseProductLogo $a_logo = null;

    /**
     * Description of the product as prepared html code.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * Duration that will be added to the appointment with this addon as count of minutes.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * `true` means that the duration information will be displayed for the client.
     *
     * @var bool|null
     */
    public ?bool $is_client_duration = null;

    /**
     * `true` if client can purchase product, `false` if only staff can perform purchase.
     *
     * @var bool|null
     */
    public ?bool $is_online_sell = null;

    /**
     * `true` means that addon increases price of the appointment.
     *
     * @var bool|null
     */
    public ?bool $is_amount = null;

    /**
     * ID of the currency.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * ID of the product.
     *
     * @var string|null
     */
    public ?string $k_shop_product = null;

    /**
     * ID of the product option.
     * Zero means that product has multiple options and option should be selected by client.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    /**
     * Amount that will be added to the appointment price with this addon.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /**
     * Description of the product.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Duration that will be added to the appointment with this addon as a formatted string.
     *
     * @var string|null
     */
    public ?string $text_duration = null;

    /**
     * Name of the product.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_logo = isset($data['a_logo']) ? new Product62GetResponseProductLogo((array)$data['a_logo']) : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->is_client_duration = isset($data['is_client_duration']) ? (bool)$data['is_client_duration'] : null;
        $this->is_online_sell = isset($data['is_online_sell']) ? (bool)$data['is_online_sell'] : null;
        $this->is_amount = isset($data['is_amount']) ? (bool)$data['is_amount'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->k_shop_product = isset($data['k_shop_product']) ? (string)$data['k_shop_product'] : null;
        $this->k_shop_product_option = isset($data['k_shop_product_option']) ? (string)$data['k_shop_product_option'] : null;
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_duration = isset($data['text_duration']) ? (string)$data['text_duration'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
