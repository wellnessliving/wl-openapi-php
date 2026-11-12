<?php

namespace WlSdk\Wl\Business\Custom\Terms;

class CustomTermsGetResponseRule
{
    /**
     * Whether the rule matches the indefinite article ("a" or "an") before the word and replaces it too.
     *
     * @var bool|null
     */
    public ?bool $has_article = null;

    /**
     * Whether the rule matches only if the word is the last in the text or is followed by a punctuation mark or a
     * tag, not by another word.
     *
     * @var bool|null
     */
    public ?bool $has_end = null;

    /**
     * Whether `text_title` starts with a vowel sound, so the article before it is "an", not "a". Makes sense only
     * if `has_article` is `true`.
     *
     * @var bool|null
     */
    public ?bool $has_vowel_sound = null;

    /**
     * Replacement for the word found in lowercase ("patient").
     *
     * @var string|null
     */
    public ?string $text_lower = null;

    /**
     * The word to search for, in lowercase. The letter case of the text is ignored when searching. It may consist
     * of several words separated by spaces ("med spa").
     *
     * @var string|null
     */
    public ?string $text_search = null;

    /**
     * Replacement for the word found with a capital letter ("Patient"). For a word found in capitals use this
     * text in capitals.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->has_article = isset($data['has_article']) ? (bool)$data['has_article'] : null;
        $this->has_end = isset($data['has_end']) ? (bool)$data['has_end'] : null;
        $this->has_vowel_sound = isset($data['has_vowel_sound']) ? (bool)$data['has_vowel_sound'] : null;
        $this->text_lower = isset($data['text_lower']) ? (string)$data['text_lower'] : null;
        $this->text_search = isset($data['text_search']) ? (string)$data['text_search'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
