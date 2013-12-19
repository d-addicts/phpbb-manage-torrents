<?php
class ucp_manage_torrents
{
    var $p_master;

    function ucp_manage_torrents(&$p_master)
    {
        $this->p_master = &$p_master;
    }

    function main($id, $mode)
    {
        global $db, $user, $auth, $template;
        global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
        switch($mode)
        {
            case 'index':
            $this->page_title = 'MCP_FOO';
            $this->tpl_name = 'mcp_foo';
            break;
        }
    }
}
?>
