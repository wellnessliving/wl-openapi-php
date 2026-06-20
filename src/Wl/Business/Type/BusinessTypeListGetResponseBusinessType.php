<?php

namespace WlSdk\Wl\Business\Type;

class BusinessTypeListGetResponseBusinessType
{
    /**
     * Images list for business types. Each element has the next structure:
     *
     * @var BusinessTypeListGetResponseBusinessTypeImageList|null
     */
    public ?BusinessTypeListGetResponseBusinessTypeImageList $a_image_list = null;

    /**
     * The business category. One of the {@link \WlSdk\RsBusinessCategorySid} constants.
     *
     * @var int|null
     */
    public ?int $id_business_category = null;

    /**
     * Type of the demo tour on the sales site connected to the business type. More about tours: {@link
     * \WlSdk\RsHomeTourSid}.
     *
     * @var int|null
     */
    public ?int $id_tour = null;

    /**
     * The key of business type.
     *
     * @var string|null
     */
    public ?string $k_business_type = null;

    /**
     * The title of the business category.
     *
     * @var string|null
     */
    public ?string $text_category = null;

    /**
     * The description of the business category.
     *
     * @var string|null
     */
    public ?string $text_category_description = null;

    /**
     * The icon of the business category.
     *
     * @var string|null
     */
    public ?string $text_category_icon = null;

    /**
     * System name of the business type.
     *
     * @var string|null
     */
    public ?string $text_file = null;

    /**
     * The title of business type.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_image_list = isset($data['a_image_list']) ? new BusinessTypeListGetResponseBusinessTypeImageList((array)$data['a_image_list']) : null;
        $this->id_business_category = isset($data['id_business_category']) ? (int)$data['id_business_category'] : null;
        $this->id_tour = isset($data['id_tour']) ? (int)$data['id_tour'] : null;
        $this->k_business_type = isset($data['k_business_type']) ? (string)$data['k_business_type'] : null;
        $this->text_category = isset($data['text_category']) ? (string)$data['text_category'] : null;
        $this->text_category_description = isset($data['text_category_description']) ? (string)$data['text_category_description'] : null;
        $this->text_category_icon = isset($data['text_category_icon']) ? (string)$data['text_category_icon'] : null;
        $this->text_file = isset($data['text_file']) ? (string)$data['text_file'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
