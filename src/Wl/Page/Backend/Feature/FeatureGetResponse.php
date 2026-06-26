<?php

namespace WlSdk\Wl\Page\Backend\Feature;

/**
 * Response from GET
 */
class FeatureGetResponse
{
    /**
     * List of all features with statuses true/false. Key of id {@link \WlSdk\Wl\Page\Backend\Feature\FeatureSid}
     *
     * @var int[]|null
     */
    public ?array $a_features = null;

    public function __construct(array $data)
    {
        $this->a_features = isset($data['a_features']) ? (array)$data['a_features'] : null;
    }
}
