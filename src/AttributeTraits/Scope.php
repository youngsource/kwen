<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;
use HTML\HTMLAttrEnums\ScopeEnum;

/**
 * Trait Scope
 * This enumerated attribute defines the cells that the header element relates to.
 * Belongs to DOMElement: Th.
 *
 * @package HTML\AttributeTraits
 */
trait Scope
{
    /**
     * Gets the scope.
     *
     * @return     string
     * @basic
     */
    public function getScope(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::SCOPE());
    }

    /**
     * Sets the scope.
     *
     * @param      ScopeEnum $scope
     * @return $this
     */
    protected function setScope(ScopeEnum $scope)
    {
        return $this->setAttribute(HTMLAttributeEnum::SCOPE(), $scope->getVal());
    }
}