<?php
namespace WlSdk\Wl\Lead;

class LeadGetResponseSkinInfo-show
{
    /**
     * Map of required element names. Keys are element names, values are `true`.
     *
     * @var bool[]|null
     */
    public ?array $a_require = null;

    /**
     * Map of visible element names. Keys are element names, values are `true`.
     *
     * @var bool[]|null
     */
    public ?array $a_show = null;

    /**
     * `true` if no elements are visible.
     *
     * @var bool|null
     */
    public ?bool $empty = null;

    public function __construct(array $data)
    {
        $this->a_require = isset($data['a_require']) ? (array)$data['a_require'] : null;
        $this->a_show = isset($data['a_show']) ? (array)$data['a_show'] : null;
        $this->empty = isset($data['empty']) ? (bool)$data['empty'] : null;
    }
}
