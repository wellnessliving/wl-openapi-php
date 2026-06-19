<?php
namespace WlSdk\Wl\Reward\Board;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about reward board item.
 */
class ElementApi
{
    /**
     * List of users to get information for.
     * 
     * `null` for mode of single user.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * Business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Reward board to show information for.
     *
     * @var string|null
     */
    public ?string $k_reward_board = null;

    /**
     * User to retrieve information about.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about reward board item.
     *
     * In single-user mode returns the user's score, name, and avatar on the specified board; in multi-user mode
     * accepts a list of UIDs and returns an array of score, name, and avatar entries for all of them.
     *
     * @return ElementApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ElementApiGetResponse
    {
        return new ElementApiGetResponse($this->client->request('/Wl/Reward/Board/Element.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_uid' => $this->a_uid,
            'k_business' => $this->k_business,
            'k_reward_board' => $this->k_reward_board,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
