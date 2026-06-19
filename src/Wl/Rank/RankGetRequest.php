<?php
namespace WlSdk\Wl\Rank;

class RankGetRequest
{
    /**
     * Rank category keys. Used to filter belts by belt categories.
     *
     * @var string[]|null
     */
    public ?array $a_rank_category = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_rank_category' => $this->a_rank_category,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
