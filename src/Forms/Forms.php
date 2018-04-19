<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/4/17
 * Time: 6:45 PM
 */

namespace HTML\Forms;


use HTML\DOMElement;
use HTML\ElementEnumerations\FormsEnum;

/**
 * Class Forms
 * HTML provides a number of elements which can be used together to create forms which the user can fill out and submit to the Web site or application.
 *
 * @package HTML\Forms
 */
abstract class Forms extends DOMElement
{
    protected $isFormAssociatedContent = true;

    /**
     * Forms constructor.
     * @param FormsEnum $form
     * @param bool $selfclosing
     */
    function __construct(FormsEnum $form, bool $selfclosing)
    {
        parent::__construct($form, $selfclosing);
    }
}
