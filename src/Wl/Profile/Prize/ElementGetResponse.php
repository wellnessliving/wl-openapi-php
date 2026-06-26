<?php

namespace WlSdk\Wl\Profile\Prize;

/**
 * Response from GET
 */
class ElementGetResponse
{
    /**
     * Prize price in wellnessliving points.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    /**
     * Date of redeem.
     *
     * @var string|null
     */
    public ?string $s_date = null;

    /**
     * User friendly prize description.
     *
     * @var string|null
     */
    public ?string $s_description = null;

    public function __construct(array $data)
    {
        $this->i_score = isset($data['i_score']) ? (int)$data['i_score'] : null;
        $this->s_date = isset($data['s_date']) ? (string)$data['s_date'] : null;
        $this->s_description = isset($data['s_description']) ? (string)$data['s_description'] : null;
    }
}
