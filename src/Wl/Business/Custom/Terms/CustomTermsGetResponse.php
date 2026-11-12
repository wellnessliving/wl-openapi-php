<?php

namespace WlSdk\Wl\Business\Custom\Terms;

/**
 * Response from GET
 */
class CustomTermsGetResponse
{
    /**
     * Replacement rules that turn the default words of the system into the terms the business has chosen.
     *
     * A business may call its clients "patients" or its classes "sessions". WellnessLiving pages do it by
     * replacing the
     * default words in every English text they show. A page of another application (a widget, a mobile
     * application)
     * shows its own texts, so it applies the same rules to them to keep the wording consistent with the pages of
     * the
     * business. This is what these rules are for.
     *
     * The rules are ready to use: they are built for the terms the business has chosen, with the singular, the
     * plural
     * and the article of every word, so the client does not need {@link
     * \WlSdk\Wl\Business\Custom\Terms\CustomTermsGetResponse::$a_term_option} to apply them.
     * The list is empty if every term of the business is the system default (or the business does not exist): then
     * there is nothing to replace and the texts are shown as they are.
     *
     * How to apply the rules to a text:
     * - The terms are English words, so apply the rules only to texts in English. Never apply them to a
     * translation
     *   into another language.
     * - Apply them to the text of the interface only: to a label, a hint, a message. Never apply them to the data
     *   that a person typed in (a name, a description, a comment): "Client" in the name of a class must stay.
     * - Go through the text once, from its beginning to its end. At every place find the first rule of the list
     * that
     *   matches there: the order of the rules is their priority, a more specific rule ("a business") goes before a
     *   general one ("business"). Put the replacement into the result and continue after the found word: the
     *   replacement is never searched by the rules again, so "client" -> "patient" does not turn into anything
     * else.
     * - Do not look into HTML tags (`<b class="client">`) and into placeholders in square brackets (`[client]`):
     * they
     *   are left as they are. Apply the rules to the text before the values of the placeholders are substituted.
     * - A word is found in any letter case and only as a whole word: "client" is found in "Clients" by the rule of
     * the
     *   plural, but never in "clientele". A character of a word is a letter, a digit or an underscore. A space of
     *   `text_search` matches any run of whitespace.
     * - The replacement takes the letter case of the found word: a word in capitals (two letters or more) gets
     *   `text_title` in capitals, a word that starts with a capital letter gets `text_title`, any other word gets
     *   `text_lower`.
     * - A rule with `has_article` also matches the indefinite article "a" or "an" before the word and replaces it:
     *   with "an" if `has_vowel_sound` is `true` and with "a" otherwise, in the letter case of the found article
     *   ("A client" -> "A patient", "A CLIENT" -> "A PATIENT"; for a term that starts with a vowel sound the
     * article
     *   becomes "an", "a client" -> "an advisor").
     * - A rule with `has_end` matches only if no other word follows it: "View all staff" is replaced, "All staff
     *   reports" is not. Another word is a letter, a digit, an underscore or a hyphen after the whitespace.
     * - The texts that must not be changed are marked in the system with the part `no-term` of the context of the
     *   message (`Business account|no-term;Wl.Business.Account`). If your texts have such a mark, leave them as
     * they
     *   are.
     *
     * The rules depend on the terms of the business, which the business may change at any moment. Do not copy them
     * into the code of the client: request them for the business and keep them for a short time only.
     *
     *
     *
     * Rules are in order of priority. Each rule has the following structure:
     *
     * @var CustomTermsGetResponseRule[]|null
     */
    public ?array $a_rule = null;

    /**
     * Current value of every term slot. Returned by `get()`, posted to
     * `post()` to save.
     *
     * @var CustomTermsGetResponseTermOption[]|null
     */
    public ?array $a_term_option = null;

    public function __construct(array $data)
    {
        $this->a_rule = isset($data['a_rule']) ? array_map(static fn ($item) => new CustomTermsGetResponseRule((array)$item), (array)$data['a_rule']) : null;
        $this->a_term_option = isset($data['a_term_option']) ? array_map(static fn ($item) => new CustomTermsGetResponseTermOption((array)$item), (array)$data['a_term_option']) : null;
    }
}
