<?php
class role extends querybuilder
{
    function __construct()
    {
        parent::__construct();
    }
    function list_function($parent_id = 0)
    {
        return $this->select('functions', ['active' => 1, 'parent_id' => $parent_id], ['*'], ['pos' => 'asc']);
    }
    function checked($func_id, $user_id)
    {
        return $this->item('roles', ['func_id' => $func_id, 'user_id' => $user_id]);
    }
    function list_menu($user_id, $parent_id = 0)
    {
        return $this->setquery('select *
        from functions
        where parent_id=? and status = 1 and show_menu = 1 and id in (
            select func_id
            from roles 
            where user_id = ?)
        order by pos asc')->rows([$parent_id, $user_id]);
    }
    static function check_role($user_id,$controller,$action){
        $like="?controller={$controller}&action={$action}%";
        $sql='SELECT functions.id FROM functions WHERE status=1 and link like ? and allow=1 UNION 
        SELECT roles.func_id
        FROM roles
        WHERE roles.user_id=? AND roles.func_id=(SELECT functions.id FROM functions WHERE functions.status=1 and functions.link like ? limit 1)
        LIMIT 1';
        return (new role)->setquery($sql)->row([$like,$user_id,$like]);
    }
}
