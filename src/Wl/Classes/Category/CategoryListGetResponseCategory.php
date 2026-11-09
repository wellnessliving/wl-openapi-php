<?php

namespace WlSdk\Wl\Classes\Category;

class CategoryListGetResponseCategory
{
    /**
     * Position of the category in the list of its kind, from `1`.
     *
     * @var int|null
     */
    public ?int $i_order = null;

    /**
     * `true` for a category of events, `false` for a category of classes.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * Key of the category.
     *
     * @var string|null
     */
    public ?string $k_classes_category = null;

    /**
     * Name of the category in the language of the request, or in the nearest language that has one.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->k_classes_category = isset($data['k_classes_category']) ? (string)$data['k_classes_category'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
