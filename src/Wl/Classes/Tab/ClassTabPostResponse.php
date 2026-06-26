<?php

namespace WlSdk\Wl\Classes\Tab;

/**
 * Response from POST
 */
class ClassTabPostResponse
{
    /**
     * Class tab key. Primary key in the Sql table.
     * `null` to create new class tab.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    public function __construct(array $data)
    {
        $this->k_class_tab = isset($data['k_class_tab']) ? (string)$data['k_class_tab'] : null;
    }
}
