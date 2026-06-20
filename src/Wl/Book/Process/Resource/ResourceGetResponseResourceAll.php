<?php

namespace WlSdk\Wl\Book\Process\Resource;

class ResourceGetResponseResourceAll
{
    /**
     * A list of clients who have already occupied assets for this session.
     * 1st level keys are asset keys.
     * 2nd level keys are asset index numbers (starting from 1).
     * Values are `true` if the asset spot is occupied.
     * For example, to check if asset spot 10 with key '125' is occupied,
     * check `a_client['125']['10']`.
     *
     * @var bool[][]|null
     */
    public ?array $a_client = null;

    /**
     * A list of available assets. Every element has next keys:
     *
     * @var ResourceGetResponseResourceAllResourceList|null
     */
    public ?ResourceGetResponseResourceAllResourceList $a_resource_list = null;

    /**
     * `true` - has current resource in the list of available assets; `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $has_current = null;

    /**
     * Type of the asset category. One of {@link \WlSdk\Wl\Resource\ResourceCategoryEnum} constants.
     *
     * @var int|null
     */
    public ?int $id_category = null;

    /**
     * `true` - the client selected the resource from the current group; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_client_select = null;

    /**
     * `true` - has selected resources; `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_select = null;

    /**
     * `true` resources in this category don't belong to certain users, but to the entire session.
     * `false` belong to specific users.
     *
     * @var bool|null
     */
    public ?bool $is_share = null;

    /**
     * The key of the asset layout.
     *
     * @var string|null
     */
    public ?string $k_resource_layout = null;

    /**
     * The key of the asset category.
     *
     * @var string|null
     */
    public ?string $k_resource_type = null;

    /**
     * The title of the asset category.
     *
     * @var string|null
     */
    public ?string $s_resource_type = null;

    public function __construct(array $data)
    {
        $this->a_client = isset($data['a_client']) ? (array)$data['a_client'] : null;
        $this->a_resource_list = isset($data['a_resource_list']) ? new ResourceGetResponseResourceAllResourceList((array)$data['a_resource_list']) : null;
        $this->has_current = isset($data['has_current']) ? (bool)$data['has_current'] : null;
        $this->id_category = isset($data['id_category']) ? (int)$data['id_category'] : null;
        $this->is_client_select = isset($data['is_client_select']) ? (bool)$data['is_client_select'] : null;
        $this->is_select = isset($data['is_select']) ? (bool)$data['is_select'] : null;
        $this->is_share = isset($data['is_share']) ? (bool)$data['is_share'] : null;
        $this->k_resource_layout = isset($data['k_resource_layout']) ? (string)$data['k_resource_layout'] : null;
        $this->k_resource_type = isset($data['k_resource_type']) ? (string)$data['k_resource_type'] : null;
        $this->s_resource_type = isset($data['s_resource_type']) ? (string)$data['s_resource_type'] : null;
    }
}
