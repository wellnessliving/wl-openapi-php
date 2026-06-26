<?php

namespace WlSdk\Wl\Video\Level;

/**
 * Response from GET
 */
class LevelListFilterGetResponse
{
    /**
     * A list of video levels with the following structure:
     *
     * @var LevelListFilterGetResponseLevelList[]|null
     */
    public ?array $a_level_list = null;

    public function __construct(array $data)
    {
        $this->a_level_list = isset($data['a_level_list']) ? array_map(static fn ($item) => new LevelListFilterGetResponseLevelList((array)$item), (array)$data['a_level_list']) : null;
    }
}
