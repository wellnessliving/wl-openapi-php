<?php

namespace WlSdk\Wl\QuickStart;

class QuickStartConfigGetResponseConfig
{
    /**
     * Whether the Quick Start is expanded.
     *
     * @var bool|null
     */
    public ?bool $is_expand = null;

    /**
     * Whether the Quick Start is hidden.
     *
     * @var bool|null
     */
    public ?bool $is_hide = null;

    /**
     * Array of booleans with category numbers as keys and values indicating
     *      whether the category is collapsed.
     *
     * @var array|null
     */
    public ?array $a_category_collapsed = null;

    public function __construct(array $data)
    {
        $this->is_expand = isset($data['is_expand']) ? (bool)$data['is_expand'] : null;
        $this->is_hide = isset($data['is_hide']) ? (bool)$data['is_hide'] : null;
        $this->a_category_collapsed = isset($data['a_category_collapsed']) ? (array)$data['a_category_collapsed'] : null;
    }
}
