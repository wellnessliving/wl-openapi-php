<?php

namespace WlSdk\Wl\Unlayer;

class AdvancedEditorGetRequest
{
    /**
     * Mail identifier, one of {@link \WlSdk\RsMailSid}.
     *
     * @var int|null
     * @see \WlSdk\RsMailSid
     */
    public ?int $id_mail = null;

    /**
     * Key of mail pattern. Primary key in RsMailPatternSql table.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mail' => $this->id_mail,
            'k_mail_pattern' => $this->k_mail_pattern,
            ],
            static fn ($v) => $v !== null
        );
    }
}
