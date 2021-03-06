<?php
/**
 * This file is part of a FireGento e.V. module.
 *
 * This FireGento e.V. module is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License version 3 as
 * published by the Free Software Foundation.
 *
 * This script is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * PHP version 5
 *
 * @category  FireGento
 * @package   FireGento_AdminMonitoring
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2014 FireGento Team (http://www.firegento.com)
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 */

/**
 * Source model for history actions
 *
 * @category FireGento
 * @package  FireGento_AdminMonitoring
 * @author   FireGento Team <team@firegento.com>
 */
class FireGento_AdminMonitoring_Model_System_Config_Source_History_Action
    extends FireGento_AdminMonitoring_Model_System_Config_Source_SourceAbstract
{
    /**
     * Retrieve the option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        if (null === $this->_options) {
            $this->_options = array(
                array(
                    'value' => FireGento_AdminMonitoring_Helper_Data::ACTION_INSERT,
                    'label' => 'INSERT',
                ),
                array(
                    'value' => FireGento_AdminMonitoring_Helper_Data::ACTION_UPDATE,
                    'label' => 'UPDATE',
                ),
                array(
                    'value' => FireGento_AdminMonitoring_Helper_Data::ACTION_DELETE,
                    'label' => 'DELETE',
                ),
                array(
                    'value' => FireGento_AdminMonitoring_Helper_Data::ACTION_LOGIN,
                    'label' => 'LOGIN',
                )
            );
        }

        return $this->_options;
    }
}
