<?php

namespace WlSdk\Wl\Purchase\Item;

class PurchaseItemListGetResponsePurchaseItem
{
    /**
     * Item price. This key doesn't returned when `is_web` is `true`
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * Item title. This key doesn't returned when `is_web` is `true`
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Item category. This key doesn't returned when `is_web` is `false`
     *
     * @var string|null
     */
    public ?string $html_category = null;

    /**
     * Item description. This key doesn't returned when `is_web` is `false`
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * Item price. This key doesn't returned when `is_web` is `false`
     *
     * @var string|null
     */
    public ?string $html_price = null;

    /**
     * Item title. This key doesn't returned when `is_web` is `false`
     *
     * @var string|null
     */
    public ?string $html_title = null;

    /**
     * Item total price. This key doesn't returned when `is_web` is `false`
     *
     * @var string|null
     */
    public ?string $html_total = null;

    /**
     * Item count. This key doesn't returned when `is_web` is `false`
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * Item picture height. This key doesn't returned when `is_web` is `false`
     *
     * @var int|null
     */
    public ?int $i_logo_height = null;

    /**
     * Item picture width. This key doesn't returned when `is_web` is `false`
     *
     * @var int|null
     */
    public ?int $i_logo_width = null;

    /**
     * . This key doesn't returned when `is_web` is `false`
     *
     * @var int|null
     */
    public ?int $id_purchase_item = null;

    /**
     * Whether item picture exists. This key doesn't returned when `is_web` is `false`
     *
     * @var bool|null
     */
    public ?bool $is_logo_empty = null;

    /**
     * Item picture URL. This key doesn't returned when `is_web` is `false`
     *
     * @var string|null
     */
    public ?string $s_logo_url = null;

    public function __construct(array $data)
    {
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->html_category = isset($data['html_category']) ? (string)$data['html_category'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->html_price = isset($data['html_price']) ? (string)$data['html_price'] : null;
        $this->html_title = isset($data['html_title']) ? (string)$data['html_title'] : null;
        $this->html_total = isset($data['html_total']) ? (string)$data['html_total'] : null;
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->i_logo_height = isset($data['i_logo_height']) ? (int)$data['i_logo_height'] : null;
        $this->i_logo_width = isset($data['i_logo_width']) ? (int)$data['i_logo_width'] : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->is_logo_empty = isset($data['is_logo_empty']) ? (bool)$data['is_logo_empty'] : null;
        $this->s_logo_url = isset($data['s_logo_url']) ? (string)$data['s_logo_url'] : null;
    }
}
