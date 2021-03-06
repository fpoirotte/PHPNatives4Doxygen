<?php

/**
 * \brief
 *      Interface to provide accessing objects as arrays.
 *
 * \see
 *      http://php.net/class.arrayaccess.php
 */
interface ArrayAccess {
    /**
     * Whether or not an offset exists.
     *
     * This method is executed when using
     * <a href="http://php.net/isset">isset()</a> or
     * <a href="http://php.net/empty">empty()</a>
     * on objects implementing ArrayAccess.
     *
     * \param mixed $offset
     *      An offset to check for.
     *
     * \retval bool
     *      \c true is returned when the offset exists,
     *      \c false when it doesn't.
     *
     * \see
     *      http://php.net/arrayaccess.offsetexists.php
     *
     * \note
     *      When using <a href="http://php.net/empty">empty()</a>
     *      ArrayAccess::offsetGet() will be called and checked
     *      for emptyness only if ArrayAccess::offsetExists()
     *      returns \c true.
     */
    public function offsetExists($offset);

    /**
     * Returns the value at specified offset. 
     *
     * This method is executed when checking if offset
     * is <a href="http://php.net/empty">empty()</a>.
     *
     * \param mixed $offset
     *      The offset to retrieve.
     *
     * \retval mixed
     *      Value at the specified offset.
     *
     * \see
     *      http://php.net/arrayaccess.offsetget.php
     */
    public function offsetGet($offset);

    /**
     * Assigns a value to the specified offset.
     *
     * \param mixed $offset
     *      The offset to assign the value to.
     *
     * \param mixed $value
     *      The value to set.
     *
     * \see
     *      http://php.net/arrayaccess.offsetset.php
     */
    public function offsetSet($offset, $value);

    /**
     * Unsets an offset.
     *
     * \param mixed $offset
     *      The offset to unset.
     *
     * \see
     *      http://php.net/arrayaccess.offsetunset.php
     *
     * \note
     *      This method will not be called when type-casting to \c (unset).
     */
    public function offsetUnset($offset);
}
