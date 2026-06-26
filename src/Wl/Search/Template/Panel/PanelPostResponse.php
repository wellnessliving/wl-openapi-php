<?php

namespace WlSdk\Wl\Search\Template\Panel;

/**
 * Response from POST
 */
class PanelPostResponse
{
    /**
     * Key of existing template.
     *
     * Can be empty if template needs to be created.
     *
     * @var string|null
     */
    public ?string $k_search_template = null;

    public function __construct(array $data)
    {
        $this->k_search_template = isset($data['k_search_template']) ? (string)$data['k_search_template'] : null;
    }
}
