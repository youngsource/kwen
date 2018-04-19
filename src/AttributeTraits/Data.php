<?php


/**
 * Created by tee
 */

namespace HTML\AttributeTraits;

/**
 * Trait Data
 * Lets you attach custom attributes to an HTML element.
 * This is a global attribute.
 *
 * @package HTML\AttributeTraits
 */
trait Data
{
    /**
     * sets the given data
     *
     * @param string $name the name of the data
     * @param string $data the actual data string
     *
     * @pre the given name of the data must be a valid string for array access
     *
     * @post    the new object will have the given data
     *        | new.getData(name) == data
     * @return $this
     */
    public function setData(string $name, string $data)
    {
        $this->getAttributes()["data-" . $name] = $data;
        return $this;
    }

    /**
     * returns the data
     *
     * @pre     the given name must be a data that exists
     *        | hasData(name)
     * @param string $name
     * @return string
     * @basic
     */
    public function getData(string $name): string
    {
        return $this->getAttributes()["data-" . $name];
    }

    /**
     * returns whether or not the DOMelement has the requested data
     *
     * @param string $name the name of the data
     * @return bool true if the the attribute has the given data
     *            | result == isset(getAttributes()["data-" . name])
     */
    public function hasData(string $name): bool
    {
        return isset($this->getAttributes()["data-" . $name]);
    }

    /**
     * removes the given data
     *
     * @param string $name the data to be removed
     *
     * @post    the requested data will be removed
     *        | new.getData(name) == ""
     * @return $this
     */
    public function removeData(string $name)
    {
        if (isset($this->getAttributes()["data-" . $name]))
            unset($this->getAttributes()["data-" . $name]);

        return $this;
    }
}