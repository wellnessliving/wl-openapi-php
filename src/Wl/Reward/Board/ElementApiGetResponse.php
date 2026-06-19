<?php
namespace WlSdk\Wl\Reward\Board;

/**
 * Response from GET
 */
class ElementApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_reward = null;

    /**
     * Score in points.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    /**
     * User name.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * User logo.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    public function __construct(array $data)
    {
        $this->a_reward = isset($data['a_reward']) ? (array)$data['a_reward'] : null;
        $this->i_score = isset($data['i_score']) ? (int)$data['i_score'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
    }
}
