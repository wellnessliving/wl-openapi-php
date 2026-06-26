<?php

namespace WlSdk\Wl\Mail\Pattern\Edit;

class MailPatternDuplicatePostRequest
{
    /**
     * Business key within which duplicate operation is performed. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the mail pattern to duplicate. Primary key in RsMailPatternSql table.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern = null;

    /**
     * Key of the duplicated mail pattern. Primary key in RsMailPatternSql table.
     *
     * @var string|null
     */
    public ?string $k_pattern_mail_duplicate = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_mail_pattern' => $this->k_mail_pattern,
            'k_pattern_mail_duplicate' => $this->k_pattern_mail_duplicate,
            ],
            static fn ($v) => $v !== null
        );
    }
}
