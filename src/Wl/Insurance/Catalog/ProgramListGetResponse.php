<?php
namespace WlSdk\Wl\Insurance\Catalog;

/**
 * Response from GET
 */
class ProgramListGetResponse
{
    /**
     * A List of active programs.
     * Every element has next keys:
     *
     * @var ProgramListGetResponseWellnessProgram[]|null
     */
    public ?array $a_wellness_program = null;

    public function __construct(array $data)
    {
        $this->a_wellness_program = isset($data['a_wellness_program']) ? array_map(static fn($item) => new ProgramListGetResponseWellnessProgram((array)$item), (array)$data['a_wellness_program']) : null;
    }
}
