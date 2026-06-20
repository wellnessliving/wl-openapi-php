<?php

namespace WlSdk\Wl\Video\Level;

/**
 * Response from GET
 */
class LevelListGetResponse
{
    /**
     * No description.
     *
     * @var LevelListGetResponseLevelList[]|null
     */
    public ?array $a_level_list = null;

    public function __construct(array $data)
    {
        $this->a_level_list = isset($data['a_level_list']) ? array_map(static fn ($item) => new LevelListGetResponseLevelList((array)$item), (array)$data['a_level_list']) : null;
    }
}
