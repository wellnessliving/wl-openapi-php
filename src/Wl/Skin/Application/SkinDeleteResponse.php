<?php
namespace WlSdk\Wl\Skin\Application;

/**
 * Response from DELETE
 */
class SkinDeleteResponse
{
    /**
     * Name of the link to default application skin.
     *
     * @var string|null
     */
    public ?string $s_link = null;

    public function __construct(array $data)
    {
        $this->s_link = isset($data['s_link']) ? (string)$data['s_link'] : null;
    }
}
