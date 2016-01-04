<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_webgallery
 *
 * @copyright   Copyright (C) 2012 Asikart. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Generated by AKHelper - http://asikart.com
 */

// no direct access
defined('_JEXEC') or die;


include_once AKPATH_COMPONENT.'/controllerform.php' ;

/**
 * Queue controller class.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_webgallery 
 */
class WebgalleryControllerQueue extends AKControllerForm
{
    /**
     * The URL view list variable.
     *
     * @var    string 
     */
    protected $view_list = 'queues' ;
    
    /**
     * The URL view item variable.
     *
     * @var    string 
     */
    protected $view_item = 'queue' ;
    
    /**
     * The Component name.
     *
     * @var    string 
     */
    protected $component = 'webgallery';
    
    /**
     * Constructor.
     *
     * @param   array  $config  An optional associative array of configuration settings.
     *
     * @see     JController
     * @since   11.1
     */
    function __construct() {
        
        $this->allow_url_params = array(
            'return'
        );
        
        $this->redirect_tasks = array(
            'save', 'cancel', 'publish', 'unpublish', 'delete'
        );
        
        parent::__construct();
    }
    
    /**
     * Function that allows child controller access to model data
     * after the data has been saved.
     *
     * @param   JModel  &$model     The data model object.
     * @param   array   $validData  The validated data.
     *
     * @return  void 
     *
     * @since   11.1
     */
    protected function postSaveHook( &$model, $validData = array())
    {
        $result = $model->postSaveHook($validData) ;
        return $result ;
    }
}