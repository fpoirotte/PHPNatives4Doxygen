<?php

/**
 * \brief
 *      Interface for customized serializing.
 *
 * Abstract base interface that cannot be implemented alone.
 * Instead it must be implemented by either IteratorAggregate or Iterator.
 *
 * \see
 *      http://php.net/Serializable
 *
 * \attention
 *      Classes that implement this interface no longer support
 *      __sleep() and __wakeup().
 */
interface  Serializable {
    /**
     * \brief
     *      String representation of object
     *
     * Should return the string representation of the object.
     *
     * \note
     *      This method acts as the destructor of the object.
     *      The __destruct() method will <b>not</b> be called
     *      after this method. 
     *
     * \return
     *      Returns the string representation of the object or \c null.
     *
     * \throws Exception
     *      When returning other types than strings and \c null. 
     */
    abstract public serialize();

    /**
     * \brief
     *      Constructs the object
     *
     * Called during unserialization of the object.
     *
     * \note
     *      This method acts as the constructor of the object.
     *      The __construct() method will <b>not</b> be called
     *      after this method.
     *
     * \return
     *      The return value from this method is ignored.
     */
    abstract public unserialize($serialized);
}
