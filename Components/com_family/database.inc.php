<?php

MImport("core.IDatabase");
MImport("core.IProcess");

require_once("view.inc.php");

class familyDatabase extends IDatabase {

    function save(IView $view, $table) {
        $values = $view->allValue();
        $pkey = $pval = $ukey = null;
        $insert_flag = false;
        $insert_id = 0;
        $require = explode(',', FAMILY_REQUIRE_FIELDS);

        //if(is_array($values["obesitywho"])) echo implode(',', $values["obesitywho"]);

        foreach ($values as $key => $val) {
            if ($key == "family_and_social_hxid" && trim($val) == "") {
                $insert_flag = true;
            }

            if ($key == "family_and_social_hxid" && trim($val) != "")
                $insert_id = $val;

            if ($key != "submit" && $key != "token" && $key != "family_and_social_hxid" && !IProcess::startsWith($key, "com_")) {
                for ($i = 0; $i < count($require); $i++)
                    if ($key == $require[$i] && trim($val) == "")
                        $view->setError($require[$i], "*");

                if (is_array($values[$key])) {
                    $val = implode(';', $values[$key]);
                    //echo $val;
                };

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
                    $view->setValue("family_and_social_hxid", $this->lastInsertedId());
                    $view->setMessage(MSG_FAMILY_SAVE);
                } else
                    return false;
            }else {
                //if ($this->setDelete($table, "family_and_social_hxid=$insert_id ")) {
                $res = $this->setUpdate($table, "$ukey", "family_and_social_hxid=$insert_id ");
                if ($res) {
                    $view->setValue("family_and_social_hxid", $insert_id);
                    $view->setMessage(MSG_FAMILY_SAVE);
                } else
                    return false;
                //} else
                //    return false;
            }
        } else
            return false;
    }

    function delete(IView $view, $table) {
        $form = $view->allValue();
        $view->setDBValue($this->queryFetchRow("*", $table, "family_and_social_hxid=" . $form["family_and_social_hxid"]));
        if ($this->setUpdate($table, "cancel=1", "family_and_social_hxid=" . $view->value("family_and_social_hxid")))
            $view->setMessage(MSG_FAMILY_DELETE);
    }

    function getItemById(IView $view, $table) {
        $form = $view->allValue();
        $view->setDBValue($this->queryFetchRow("*", $table, "ident_id=" . $form["ident_id"]));
    }

}

?>
