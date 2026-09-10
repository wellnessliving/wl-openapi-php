<?php

namespace WlSdk\Wl\Visit\Note\Edit;

class EditPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit key.
     *
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Uncompressed note content received from form.
     *
     * Each key is a note field key, and the value is the HTML content submitted for that field.
     *
     * @var array|null
     */
    public ?array $a_data = null;

    /**
     * Note type, one of {@link \WlSdk\Wl\Visit\Note\Sid\NoteSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\Note\Sid\NoteSid
     */
    public ?int $id_note = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            'a_data' => $this->a_data,
            'id_note' => $this->id_note,
            ],
            static fn ($v) => $v !== null
        );
    }
}
