<?php
namespace WlSdk\Wl\Reward\Prize;

/**
 * Response from GET
 */
class ElementApiGetResponse
{
    /**
     * Prize price in wellnessliving points.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    /**
     * User friendly prize description.
     *
     * @var string|null
     */
    public ?string $s_description = null;

    public function __construct(array $data)
    {
        $this->i_score = isset($data['i_score']) ? (int)$data['i_score'] : null;
        $this->s_description = isset($data['s_description']) ? (string)$data['s_description'] : null;
    }
}
