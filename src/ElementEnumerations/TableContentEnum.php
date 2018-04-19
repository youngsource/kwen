<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 9/15/17
 * Time: 8:20 PM
 */

namespace HTML\ElementEnumerations;

/**
 * Class TableContentEnum
 * @package App\HTML\ElementEnumerations
 *
 * @method static CAPTION()
 * @method static COL()
 * @method static COLGORUP()
 * @method static TABLE()
 * @method static TBODY()
 * @method static TD()
 * @method static TFOOT()
 * @method static TH()
 * @method static THEAD()
 * @method static TR()
 */
class TableContentEnum extends HTMLElementEnum
{
    const CAPTION = 'caption';
    const COL = 'col';
    const COLGORUP = 'colgorup';
    const TABLE = 'table';
    const TBODY = 'tbody';
    const TD = 'td';
    const TFOOT = 'tfoot';
    const TH = 'th';
    const THEAD = 'thead';
    const TR = 'tr';
}