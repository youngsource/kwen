<?php
/**
 * Created by PhpStorm.
 * User: ghlen
 * Date: 10/6/17
 * Time: 11:01 AM
 */

namespace HTML\LogicTraits;


use HTML\DOMElement;

trait OnlyPhrasingContent
{
    public function addChild(DOMElement $elem)
    {
        $this->phrasingContentSideEffect($elem);
        return parent::addChild($elem);
    }

    private function phrasingContentSideEffect(DOMElement $elem)
    {
        if ($this->isPhrasingContent())
            $this->isPhrasingContent = $this->containsOnlyPhrasingContent($elem);
    }

    private function containsOnlyPhrasingContent(DOMElement $elem)
    : bool
    {
        return ($elem->findDescendant(function (DOMElement $elem)
            {
                return !$elem->isPhrasingContent();
            }) === null);
    }
}