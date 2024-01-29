<?php

MImport("core.IDatabase");
MImport("core.IProcess");

require_once("view.inc.php");

class pmhxDatabase extends IDatabase {

    function save(IView $view, $table) {
        $values = $view->allValue();
        $pkey = $pval = $ukey = null;
        $insert_flag = false;
        $insert_id = 0;
        $require = explode(',', PMHX_REQUIRE_FIELDS);

        foreach ($values as $key => $val) {
            if ($key == "pmhxid" && trim($val) == "") {
                $insert_flag = true;
            }

            if ($key == "pmhxid" && trim($val) != "")
                $insert_id = $val;

            if ($key != "submit" && $key != "token" && $key != "pmhxid" && !IProcess::startsWith($key, "com_")) {
                for ($i = 0; $i < count($require); $i++)
                    if ($key == $require[$i] && trim($val) == "")
                        $view->setError($require[$i], "*");

                //if (trim($val) != "") {
                    //echo $val;
                    $pkey.=$key . ",";
                    if(trim($val) == "")
                    {
                        $pval.= "NULL,";
                        $temp = "NULL,";
                        $ukey.="$key=$temp";
                    }else{
                        $pval.= is_numeric($val) ? $val . ", " : "'$val',";
                        $temp = is_numeric($val) ? $val . ", " : "'$val',";
                        $ukey.="$key=$temp";
                        
                    }
                //}
            }
        }

        if ($view->num_Errors() == 0) {
            if ($insert_flag) {
                $res = $this->setInsert($table, $pkey, $pval);
                if ($res) {
                    $view->setValue("pmhxid", $this->lastInsertedId());
                    $view->setMessage(MSG_PMHX_SAVE);
                } else
                    return false;
            }else {
                //if($this->setDelete($table, "pmhxid=$insert_id "))
                //{
                $res = $this->setUpdate($table, "$ukey", "pmhxid=$insert_id");
                if ($res) {
                    $view->setValue("pmhxid", $insert_id);
                    $view->setMessage(MSG_PMHX_SAVE);
                } else
                    return false;
                //}else
                //    return false;
            }
        } else
            return false;
    }

    function delete(IView $view, $table) {
        $form = $view->allValue();
        $view->setDBValue($this->queryFetchRow("*", $table, "pmhxid=" . $form["pmhxid"]));
        if ($this->setUpdate($table, "cancel=1", "pmhxid=" . $view->value("pmhxid")))
            $view->setMessage(MSG_PMHX_DELETE);
    }

    function getItemById(IView $view, $table) {
        $form = $view->allValue();
        $view->setDBValue($this->queryFetchRow("*", $table, "ident_id=" . $form["ident_id"]));
    }

}

?>
