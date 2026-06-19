<?php
namespace WlSdk\Wl\Skin;

class SkinForeignPostRequest
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

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_data_specific = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_fields = null;

    /**
     * Name of the widget.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_skin' => $this->id_skin,
            'k_business' => $this->k_business,
            's_foreign_id' => $this->s_foreign_id,
            'a_data_specific' => $this->a_data_specific,
            'a_fields' => $this->a_fields,
            'text_name' => $this->text_name,
            ],
            static fn($v) => $v !== null
        );
    }
}
