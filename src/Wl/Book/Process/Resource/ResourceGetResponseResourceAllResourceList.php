<?php

namespace WlSdk\Wl\Book\Process\Resource;

class ResourceGetResponseResourceAllResourceList
{
    /**
     * List of resources available for booking sessions.
     *   The field structure is `[k_class_period][dtu_session]['a_available']`.
     *   Contains indexes of resource available for each session.
     *
     * @var int[][][]|null
     */
    public ?array $a_class_period = null;

    /**
     * Asset image data.
     *
     * @var ResourceGetResponseResourceAllResourceListImage|null
     */
    public ?ResourceGetResponseResourceAllResourceListImage $a_image = null;

    /**
     * The asset number. Actual for assets with a quantity more than `1`.
     *
     * @var int|null
     */
    public ?int $i_index = null;

    /**
     * Total number of the asset spots.
     *
     * @var int|null
     */
    public ?int $i_quantity = null;

    /**
     * Number of already used asset units.
     *
     * @var int|null
     */
    public ?int $i_use = null;

    /**
     * City for the off-site location.
     *
     * @var bool|null
     */
    public ?bool $is_current = null;

    /**
     * `true` means that this asset is selected by client, `false` - otherwise.
     *
     * @var string|null
     */
    public ?string $k_city = null;

    /**
     * The key of the asset in database.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * The title of the asset.
     *
     * @var string|null
     */
    public ?string $s_resource = null;

    /**
     * Address for the off-site location.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * Additional address tips for the off-site location.
     *
     * @var string|null
     */
    public ?string $text_guide = null;

    /**
     * Postal code for the off-site location.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    public function __construct(array $data)
    {
        $this->a_class_period = isset($data['a_class_period']) ? (array)$data['a_class_period'] : null;
        $this->a_image = isset($data['a_image']) ? new ResourceGetResponseResourceAllResourceListImage((array)$data['a_image']) : null;
        $this->i_index = isset($data['i_index']) ? (int)$data['i_index'] : null;
        $this->i_quantity = isset($data['i_quantity']) ? (int)$data['i_quantity'] : null;
        $this->i_use = isset($data['i_use']) ? (int)$data['i_use'] : null;
        $this->is_current = isset($data['is_current']) ? (bool)$data['is_current'] : null;
        $this->k_city = isset($data['k_city']) ? (string)$data['k_city'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->s_resource = isset($data['s_resource']) ? (string)$data['s_resource'] : null;
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->text_guide = isset($data['text_guide']) ? (string)$data['text_guide'] : null;
        $this->text_postal = isset($data['text_postal']) ? (string)$data['text_postal'] : null;
    }
}
