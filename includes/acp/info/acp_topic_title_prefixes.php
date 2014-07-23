<?php
/** 
*
* @package acp
* @version $Id$
* @copyright (c) 2007 phpBB Group / 2011 Zmarty 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
                            
/**
* @package module_install
*/
class acp_topic_title_prefixes_info
{
    function module()
    {
		return array(
			'filename'    => 'acp_topic_title_prefixes',
			'title'        => 'ACP_TOPIC_TITLE_PREFIXES',
			'version'    => '1.0.0',
			'modes'        => array(
				'topic_title_prefixes'        => array('title' => 'ACP_TOPIC_TITLE_PREFIXES', 'auth' => 'acl_a_board', 'cat' => array('ACP_CAT_DOT_MODS')),
				),
			);  
    }
                            
    function install()
    {
    }
                                
    function uninstall()
    {
    }

}
?>