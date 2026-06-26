<?php

namespace WlSdk\Wl\Login\Promotion\Cancel;

/**
 * Response from POST
 */
class MailPatternLivePostResponse
{
    /**
     * Key of the mail pattern. Primary key from RsMailPatternLiveSql table.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern_live = null;

    public function __construct(array $data)
    {
        $this->k_mail_pattern_live = isset($data['k_mail_pattern_live']) ? (string)$data['k_mail_pattern_live'] : null;
    }
}
