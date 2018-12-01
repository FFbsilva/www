<?php
/**
 * Created by IntelliJ IDEA.
 * User: tony
 * Date: 13/10/17
 * Time: 17:11
 */


class Default_Model_DbTable_MaisVoce extends Zend_Db_Table_Abstract{

    public $maisVoce;

    public function init()
    {
        $this->maisVoce = new Util_ZendModelGeneric();
        $this->maisVoce->construtor("mais_voce");
    }

    public function getAllMaisVoce(){
        $this->maisVoce->query->from(array("mv" => "tb_mais_voce"), array('*'));
        $this->maisVoce->query->order('mv.dt_inclusao ASC');
        $this->maisVoce->query->where('mv.st_registro = 1');
        $data = $this->maisVoce->returnQuery();
        return $data;
    }


}