<?php

MImport("core.IDatabase");
MImport("core.IProcess");

require_once("view.inc.php");

class dietDatabase extends IDatabase {

    function save(IView $view, $table) {
        $values = $view->allValue();
        $pkey = $pval = $ukey = null;
        $insert_flag = false;
        $insert_id = 0;
        $require = explode(',', DIET_REQUIRE_FIELDS);

        foreach ($values as $key => $val) {
            if ($key == "dietid" && trim($val) == "") {
                $insert_flag = true;
            }

            if ($key == "dietid" && trim($val) != "")
                $insert_id = $val;

            if ($key != "submit" && $key != "token" && $key != "dietid" && !IProcess::startsWith($key, "com_")) {
                for ($i = 0; $i < count($require); $i++)
                    if ($key == $require[$i] && trim($val) == "")
                        $view->setError($require[$i], "*");

                //if (trim($val) != "") {
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
                    $view->setValue("dietid", $this->lastInsertedId());
                    $view->setMessage(MSG_DIET_SAVE);
                } else
                    return false;
            }else {
                //if($this->setDelete($table, "dietid=$insert_id "))
                //{
                $res = $this->setUpdate($table,"$ukey", "dietid=$insert_id ");
                if ($res) {
                    $view->setValue("dietid", $insert_id);
                    $view->setMessage(MSG_DIET_SAVE);
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
        $view->setDBValue($this->queryFetchRow("*", $table, "dietid=" . $form["dietid"]));
        if ($this->setUpdate($table, "cancel=1", "dietid=" . $view->value("dietid")))
            $view->setMessage(MSG_DIET_DELETE);
    }

    function getItemById(IView $view, $table) {
        $form = $view->allValue();
        $view->setDBValue($this->queryFetchRow("*", $table, "ident_id=" . $form["ident_id"]));
    }

}

?>
