<?php
namespace WlSdk\Wl\Catalog\CatalogList;

class ElementGetResponseItemImageImage
{
    /**
     * Height of the variant image.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Height of the original image.
     *
     * @var int|null
     */
    public ?int $i_height_src = null;

    /**
     * Rotate.
     *
     * @var int|null
     */
    public ?int $i_rotate = null;

    /**
     * Width of the variant image.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * Width of the original image.
     *
     * @var int|null
     */
    public ?int $i_width_src = null;

    /**
     * Type ID of the image. Constant from {@link \WlSdk\Core\Drive\DriveTypeSid}.
     *
     * @var \WlSdk\Core\Drive\DriveTypeSid|null
     */
    public ?\WlSdk\Core\Drive\DriveTypeSid $id_type_src = null;

    /**
     * `true` if the variant differs from the original, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is-resize = null;

    /**
     * URL to download variant (thumbnail) file.
     *
     * @var string|null
     */
    public ?string $url-thumbnail = null;

    /**
     * URL to download original file.
     *
     * @var string|null
     */
    public ?string $url-view = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_height_src = isset($data['i_height_src']) ? (int)$data['i_height_src'] : null;
        $this->i_rotate = isset($data['i_rotate']) ? (int)$data['i_rotate'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->i_width_src = isset($data['i_width_src']) ? (int)$data['i_width_src'] : null;
        $this->id_type_src = isset($data['id_type_src']) ? \WlSdk\Core\Drive\DriveTypeSid::tryFrom((int)$data['id_type_src']) : null;
        $this->is-resize = isset($data['is-resize']) ? (bool)$data['is-resize'] : null;
        $this->url-thumbnail = isset($data['url-thumbnail']) ? (string)$data['url-thumbnail'] : null;
        $this->url-view = isset($data['url-view']) ? (string)$data['url-view'] : null;
    }
}
