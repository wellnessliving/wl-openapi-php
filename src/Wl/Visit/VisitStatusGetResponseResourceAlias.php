<?php
namespace WlSdk\Wl\Visit;

class VisitStatusGetResponseResourceAlias
{
    /**
     * Resource .
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Resource type .
     *
     * @var string|null
     */
    public ?string $k_resource_type = null;

    /**
     * Index of the resource on the layout.
     *
     * @var int|null
     */
    public ?int $i_index = null;

    /**
     * Quantity of the resource on the layout.
     *
     * @var int|null
     */
    public ?int $i_quantity = null;

    /**
     * Resource's custom name (alias) on the layout.
     *
     * @var string|null
     */
    public ?string $text_alias = null;

    /**
     * Resource's title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->k_resource_type = isset($data['k_resource_type']) ? (string)$data['k_resource_type'] : null;
        $this->i_index = isset($data['i_index']) ? (int)$data['i_index'] : null;
        $this->i_quantity = isset($data['i_quantity']) ? (int)$data['i_quantity'] : null;
        $this->text_alias = isset($data['text_alias']) ? (string)$data['text_alias'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
