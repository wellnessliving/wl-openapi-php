<?php

namespace WlSdk\Wl\Promotion\Editor\List;

class ListGetResponseFilterProgramCategory
{
    /**
     * The service category. One of the {@link \WlSdk\RsProgramCategorySid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsProgramCategorySid
     */
    public ?int $id_program_category = null;

    /**
     * The title of the service category.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_program_category = isset($data['id_program_category']) ? (int)$data['id_program_category'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
