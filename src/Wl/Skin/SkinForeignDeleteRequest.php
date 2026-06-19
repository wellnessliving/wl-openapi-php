<?php
namespace WlSdk\Wl\Skin;

class SkinForeignDeleteRequest
{
    /**
     * Skin type, one of [RsSkinSid](#/components/schemas/RsSkinSid) constants.
     *
     * @var int|null
     */
    public ?int $id_skin = null;

    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Foreign skin key.
     *
     * @var string|null
     */
    public ?string $s_foreign_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_skin' => $this->id_skin,
            'k_business' => $this->k_business,
            's_foreign_id' => $this->s_foreign_id,
            ],
            static fn($v) => $v !== null
        );
    }
}
