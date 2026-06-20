<?php

namespace WlSdk\Wl\Skin\Application\Resource;

class ApplicationResourceGetResponseApplicationResource
{
    /**
     * Groups of images, such as icons, loading screens or screenshots. One element of this array is an array that
     * contains:
     *
     * @var ApplicationResourceGetResponseApplicationResourceGroup|null
     */
    public ?ApplicationResourceGetResponseApplicationResourceGroup $a_group = null;

    /**
     * Title of the group.
     *
     * @var string|null
     */
    public ?string $text_group = null;

    public function __construct(array $data)
    {
        $this->a_group = isset($data['a_group']) ? new ApplicationResourceGetResponseApplicationResourceGroup((array)$data['a_group']) : null;
        $this->text_group = isset($data['text_group']) ? (string)$data['text_group'] : null;
    }
}
