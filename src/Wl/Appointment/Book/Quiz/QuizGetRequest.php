<?php

namespace WlSdk\Wl\Appointment\Book\Quiz;

class QuizGetRequest
{
    /**
     * Purchase item ID.
     *
     * @var int|null
     * @see \WlSdk\RsPurchaseItemSid
     */
    public ?int $id_purchase_item = null;

    /**
     * `true` to return both optional and required forms; `false` to return only required forms.
     *
     * @var bool|null
     */
    public ?bool $is_all = null;

    /**
     * List of add-ons.
     * Each element is primary key in RsShopProductSql table.
     *
     * @var string|null
     */
    public ?string $json_shop_product_option = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Promotion key or appointment key. Depends on `id_purchase_item`.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Resource key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Service key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * User key.
     * Empty if guest.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_purchase_item' => $this->id_purchase_item,
            'is_all' => $this->is_all,
            'json_shop_product_option' => $this->json_shop_product_option,
            'k_business' => $this->k_business,
            'k_id' => $this->k_id,
            'k_resource' => $this->k_resource,
            'k_service' => $this->k_service,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
