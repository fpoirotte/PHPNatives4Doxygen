<?php

/**
 * \brief
 *      Classes implementing Countable can be used with the 
 *      <a href="http://php.net/count">count()</a> function.
 *
 * \see
 *      http://php.net/class.countable.php
 */
interface Countable {
    /**
     * Count elements of an object.
     *
     * This method is executed when using the
     * <a href="http://php.net/count">count()</a> function
     * on an object implementing the Countable interface. 
     *
     * \retval int
     *      The custom count as an integer.
     *
     * \see
     *      http://php.net/countable.count.php
     */
    public function count();
}
