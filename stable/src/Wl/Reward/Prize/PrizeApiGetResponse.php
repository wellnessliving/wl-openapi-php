<?php
namespace WlSdk\Wl\Reward\Prize;

/**
 * Response from GET
 */
class PrizeApiGetResponse
{
    /**
     * Array of prize keys.
     *
     * @var string[]|null
     */
    public ?array $a_prize = null;

    /**
     * Array of prize scores.
     *
     * @var int[]|null
     */
    public ?array $a_score = null;

    public function __construct(array $data)
    {
        $this->a_prize = isset($data['a_prize']) ? (array)$data['a_prize'] : null;
        $this->a_score = isset($data['a_score']) ? (array)$data['a_score'] : null;
    }
}
