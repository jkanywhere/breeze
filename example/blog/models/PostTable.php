<?php
/**
 * Blog - PostTable Model
 *
 * This file contains the auto-generated PostTabel model for the blog example.
 *
 * LICENSE
 *
 * This file is part of the Breeze Framework package and is subject to the new
 * BSD license.  For full copyright and license information, please see the
 * LICENSE file that is distributed with this package.
 *
 * @package    Breeze
 * @subpackage Examples
 * @author     Jeff Welch <whatthejeff@gmail.com>
 * @copyright  2010-2011 Jeff Welch <whatthejeff@gmail.com>
 * @license    https://github.com/whatthejeff/breeze/blob/master/LICENSE New BSD License
 * @link       http://breezephp.com/
 */

/**
 * PostTable
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    Breeze
 * @subpackage Examples
 * @author     Jeff Welch <whatthejeff@gmail.com>
 * @copyright  2010-2011 Jeff Welch <whatthejeff@gmail.com>
 * @license    https://github.com/whatthejeff/breeze/blob/master/LICENSE New BSD License
 * @link       http://breezephp.com/
 */
class PostTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object PostTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Post');
    }
}
