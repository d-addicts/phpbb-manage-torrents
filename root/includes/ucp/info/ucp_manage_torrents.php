<?php
/** 
*
* @author Felix Wong felix@d-addicts.com
* @package ucp
* @copyright (c) D-Addicts
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package module_install
*/
class ucp_manage_torrents_info
{
    function module()
    {
        return array(
            'filename'   => 'ucp_manage_torrents',
            'title'      => 'Manage Torrents',
            'version'    => '0.0.3',
            'modes'      => array(
                'upload'      => array('title' => 'UCP_MANAGE_TORRENTS_UPLOAD_TITLE', 'auth' => 'acl_u_upload_torrents,$id', 'cat' => array('MCP_PAGE_TITLE')),
                'delete'      => array('title' => 'UCP_MANAGE_TORRENTS_DELETE_TITLE', 'auth' => 'acl_u_delete_torrents,$id', 'cat' => array('MCP_PAGE_TITLE')),
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
