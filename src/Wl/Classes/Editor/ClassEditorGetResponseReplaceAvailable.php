<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetResponseReplaceAvailable
{
    /**
     * Classes or events of the group. Every element is an array:
     *
     * @var ClassEditorGetResponseReplaceAvailableList|null
     */
    public ?ClassEditorGetResponseReplaceAvailableList $a_list = null;

    /**
     * Level of the group. Always `1`, there is only one level of groups.
     *
     * @var int|null
     */
    public ?int $i_level = null;

    /**
     * Key of the group.
     *
     * @var string|null
     */
    public ?string $text_group_key = null;

    /**
     * Title of the group.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? new ClassEditorGetResponseReplaceAvailableList((array)$data['a_list']) : null;
        $this->i_level = isset($data['i_level']) ? (int)$data['i_level'] : null;
        $this->text_group_key = isset($data['text_group_key']) ? (string)$data['text_group_key'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
