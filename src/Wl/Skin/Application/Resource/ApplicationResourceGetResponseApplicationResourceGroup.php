<?php

namespace WlSdk\Wl\Skin\Application\Resource;

class ApplicationResourceGetResponseApplicationResourceGroup
{
    /**
     * A list of images in the group. One element contains parameters of an image:
     *
     * @var ApplicationResourceGetResponseApplicationResourceGroupImage|null
     */
    public ?ApplicationResourceGetResponseApplicationResourceGroupImage $a_image = null;

    /**
     * CSS class for this images block.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * Comment for images block.
     *
     * @var string|null
     */
    public ?string $text_comment = null;

    /**
     * Subtitle for images block.
     *
     * @var string|null
     */
    public ?string $text_subtitle = null;

    /**
     * Title for images block.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? new ApplicationResourceGetResponseApplicationResourceGroupImage((array)$data['a_image']) : null;
        $this->s_class = isset($data['s_class']) ? (string)$data['s_class'] : null;
        $this->text_comment = isset($data['text_comment']) ? (string)$data['text_comment'] : null;
        $this->text_subtitle = isset($data['text_subtitle']) ? (string)$data['text_subtitle'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
