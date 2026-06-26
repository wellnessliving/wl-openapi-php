<?php

namespace WlSdk\Wl\Mail\Pattern\Edit;

/**
 * Response from POST
 */
class MailPatternDuplicatePostResponse
{
    /**
     * Key of the duplicated mail pattern. Primary key in RsMailPatternSql table.
     *
     * @var string|null
     */
    public ?string $k_pattern_mail_duplicate = null;

    public function __construct(array $data)
    {
        $this->k_pattern_mail_duplicate = isset($data['k_pattern_mail_duplicate']) ? (string)$data['k_pattern_mail_duplicate'] : null;
    }
}
