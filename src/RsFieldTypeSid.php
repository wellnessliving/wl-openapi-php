<?php
namespace WlSdk;

/**
 * Possible types of the custom fields: text, checkbox, radio buttons, etc.
 * 
 * <b>!!! BE ATTENTIVE !!!</b>
 * 
 * When you add a new field type, do not forget to test synchronization with electronic mail list managers. Search for
 * other constants in this class. You need to add your new constant in bulk places where other constants are found.
 * 
 * Values:
 * - 2 (`CHECKBOX`): Checkbox field. The `s_value` for this type of field can be 1 if checkbox is checked and 0
 * otherwise.
 * - 5 (`GENERAL`): General field. Has its own format.
 * - 4 (`RADIO`): Radio buttons.
 * - 3 (`SELECT`): Drop-down menu.
 * - 1 (`TEXT`): One line text field.
 */
class RsFieldTypeSid
{
    /** Checkbox field. The `s_value` for this type of field can be 1 if checkbox is checked and 0 otherwise. */
    const CHECKBOX = 2;
    /** General field. Has its own format. */
    const GENERAL = 5;
    /** Radio buttons. */
    const RADIO = 4;
    /** Drop-down menu. */
    const SELECT = 3;
    /** One line text field. */
    const TEXT = 1;
}
