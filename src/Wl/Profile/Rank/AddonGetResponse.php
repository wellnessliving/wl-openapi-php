<?php

namespace WlSdk\Wl\Profile\Rank;

/**
 * Response from GET
 */
class AddonGetResponse
{
    /**
     * Full list of ranks owned by the client.
     * The key of the array is a category rank key.
     * Primary key in the RsRankCategorySql table.
     *
     * @var AddonGetResponseAddon[]|null
     */
    public ?array $a_addon = null;

    /**
     * HEX color codes for Character and Skill fields.
     *
     * @var AddonGetResponseAddonList[]|null
     */
    public ?array $a_addon_list = null;

    public function __construct(array $data)
    {
        $this->a_addon = isset($data['a_addon']) ? array_map(static fn ($item) => new AddonGetResponseAddon((array)$item), (array)$data['a_addon']) : null;
        $this->a_addon_list = isset($data['a_addon_list']) ? array_map(static fn ($item) => new AddonGetResponseAddonList((array)$item), (array)$data['a_addon_list']) : null;
    }
}
