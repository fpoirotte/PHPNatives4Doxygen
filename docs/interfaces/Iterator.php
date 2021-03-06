<?php

/**
 * \brief
 *      Interface for external iterators or objects
 *      that can be iterated themselves internally.
 *
 * \see
 *      http://php.net/class.iterator.php
 */
interface Iterator {
    /**
     * Returns the current element.
     *
     * \retval mixed
     *      Current element.
     *
     * \see
     *      http://php.net/iterator.current.php
     */
    public function current();

    /**
     * Returns the key of the current element.
     *
     * \retval scalar
     *      Returns scalar on success, or \c null on failure.
     *
     * \note
     *      Issues \c E_NOTICE on failure.
     *
     * \see
     *      http://php.net/iterator.key.php
     */
    public function key();

    /**
     * Moves the current position to the next element.
     *
     * \note
     *      This method is called <b>after</b> each foreach loop.
     *
     * \see
     *      http://php.net/iterator.next.php
     */
    public function next();

    /**
     * Rewinds back to the first element of the Iterator.
     *
     * \note
     *      This is the <b>first</b> method called when starting
     *      a foreach loop. It will <b>not</b> be executed <b>after</b>
     *      foreach loops. 
     *
     * \see
     *      http://php.net/iterator.rewind.php
     */
    public function rewind();

    /**
     * Checks if current position is valid.
     *
     * This method is called after Iterator::rewind() and Iterator::next()
     * to check if the current position is valid.
     *
     * \retval bool
     *      \c true if the current position is valid, \c false otherwise.
     *
     * \note
     *      If Iterator::valid() returns \c false, the
     *      <a href="http://php.net/foreach">foreach</a>
     *      loop will be terminated.
     *
     * \see
     *      http://php.net/iterator.valid.php
     */
    public function valid();
}
