<?php
class Group_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this->setTable('group');
    }
    public function listItems($options = null)
    {
        $query[]     = "SELECT `g`.`id`,`g`.`name`,`g`.`status`,`g`.`ordering`, COUNT(`u`.id) AS total";
        $query[]     = "FROM `group` AS `g` LEFT JOIN `user` AS `u` ON `g`.`id` = `u`.`group_id`";
        $query[]     = "GROUP BY `g`.`id`";
        $query        = implode(" ", $query);

        $flagExist = $this->isExist($query);
        if ($flagExist == true) return $this->listRecord($query);
    }

    public function deleteItem($id,$options = null)
    {
        $this->delete(array($id));
    }
}
