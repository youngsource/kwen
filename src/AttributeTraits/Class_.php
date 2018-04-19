<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

use HTML\ElementEnumerations\HTMLAttributeEnum;

/**
 * Trait Class_
 * Often used with CSS to style elements with common properties.
 * This is a global attribute.
 *
 * @package HTML\AttributeTraits
 */
trait Class_
{
    /**
     * checks to see if the given DOMElement has a class
     * @param string $class
     * @return bool
     */
    public function hasClass(string $class): bool
    {
        return str_contains($this->getAttribute(HTMLAttributeEnum::CLASS_()), $class);
    }

    /**
     * Adds a class.
     *
     * @param      string $class The
     * @return $this
     */
    public function addClass(string $class)
    {
        return $this->setAttribute(HTMLAttributeEnum::CLASS_(), $this->getAttribute(HTMLAttributeEnum::CLASS_()) . " " . $class);
    }

    /**
     * removes the given class if it exists
     *
     * @param string $class the class to be removed
     * @post    the class will be removed
     *        | str_contains(class, getClasses()) == false
     * @return $this
     */
    public function removeClass(string $class)
    {
        return $this->setClasses(str_replace($class, "", $this->getClasses()));
    }

    /**
     * Sets the classes.
     *
     * @param      string $classes The classes
     * @return $this
     */
    private function setClasses(string $classes)
    {
        return $this->setAttribute(HTMLAttributeEnum::CLASS_(), $classes);
    }

    /**
     * Gets the classes.
     *
     * @return     string  The classes.
     */
    public function getClasses(): string
    {
        return $this->getAttribute(HTMLAttributeEnum::CLASS_());
    }

}