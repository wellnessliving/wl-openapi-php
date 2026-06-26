<?php

namespace WlSdk\Wl\Search\Template\Panel;

/**
 * Response from GET
 */
class PanelGetResponse
{
    /**
     * Variables to pass into the panel template.
     *
     * @var PanelGetResponsePanel|null
     */
    public ?PanelGetResponsePanel $a_panel = null;

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
        $this->a_panel = isset($data['a_panel']) ? new PanelGetResponsePanel((array)$data['a_panel']) : null;
        $this->k_search_template = isset($data['k_search_template']) ? (string)$data['k_search_template'] : null;
    }
}
