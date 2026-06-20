<?php
namespace WlSdk\Wl\Reward\Action;

class ActionTypeGetResponseRewardAction
{
    /**
     * Number of points for this reward action.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    public function __construct(array $data)
    {
        $this->i_score = isset($data['i_score']) ? (int)$data['i_score'] : null;
    }
}
