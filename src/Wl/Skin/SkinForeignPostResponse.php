<?php
namespace WlSdk\Wl\Skin;

/**
 * Response from POST
 */
class SkinForeignPostResponse
{
    /**
     * Skin key.
     *
     * @var string|null
     */
    public ?string $k_skin = null;

    public function __construct(array $data)
    {
        $this->k_skin = isset($data['k_skin']) ? (string)$data['k_skin'] : null;
    }
}
