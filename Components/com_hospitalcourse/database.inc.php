<?php

MImport("core.IDatabase");
MImport("core.IProcess");

require_once("view.inc.php");

class hospitalcourseDatabase extends IDatabase {

    function save(IView $view, $table) {
        $values = $view->allValue();
        $pkey = $pval = $ukey = null;
        $insert_flag = false;
        $insert_id = 0;
        $require = explode(',', HOSPITALCOURSE_REQUIRE_FIELDS);

        foreach ($values as $key => $val) {
            if ($key == "hospitalcourseid" && trim($val) == "") {
                $insert_flag = true;
            }

            if ($key == "hospitalcourseid" && trim($val) != "")
                $insert_id = $val;

            if ($key != "submit" && $key != "token" && $key != "hospitalcourseid" && !IProcess::startsWith($key, "com_")) {
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
                    $view->setValue("hospitalcourseid", $this->lastInsertedId());
                    $this->setDelete(TBL_EVENTS, "ident_id=" . $values["ident_id"] . " And iscome=0");

                    if ($values["operdate"] != "") {
                        $this->UpdatePatientsReferral($values["ident_id"], IPROCESS::AddDate($values["operdate"], 3, "month"));
                        $this->UpdatePatientsReferral($values["ident_id"], IPROCESS::AddDate($values["operdate"], 6, "month"));
                        $this->UpdatePatientsReferral($values["ident_id"], IPROCESS::AddDate($values["operdate"], 12, "month"));
                    }

                    $view->setMessage(MSG_HOSPITALCOURSE_SAVE);
                }else
                    return false;
            }else {
                //if ($this->setUpdate($table,"$ukey", "hospitalcourseid=$insert_id ")) {
                    $res = $this->setUpdate($table,"$ukey", "hospitalcourseid=$insert_id ");
                    if ($res) {
                        $view->setValue("hospitalcourseid", $insert_id);
                        $this->setDelete(TBL_EVENTS, "ident_id=" . $values["ident_id"] . " And iscome=0");

                        if ($values["operdate"] != "") {
                            $this->UpdatePatientsReferral($values["ident_id"], IPROCESS::AddDate($values["operdate"], 3, "month"));
                            $this->UpdatePatientsReferral($values["ident_id"], IPROCESS::AddDate($values["operdate"], 6, "month"));
                            $this->UpdatePatientsReferral($values["ident_id"], IPROCESS::AddDate($values["operdate"], 12, "month"));
                        }
                        $view->setMessage(MSG_HOSPITALCOURSE_SAVE);
                    }else
                        return false;
                //}else
                //    return false;
            }
        }else
            return false;
    }

    function delete(IView $view, $table) {
        $form = $view->allValue();
        $view->setDBValue($this->queryFetchRow("*", $table, "hospitalcourseid=" . $form["hospitalcourseid"]));
        if ($this->setUpdate($table, "cancel=1", "hospitalcourseid=" . $view->value("hospitalcourseid")))
            $view->setMessage(MSG_HOSPITALCOURSE_DELETE);
    }

    function getItemById(IView $view, $table) {
        $form = $view->allValue();
        $view->setDBValue($this->queryFetchRow("*", $table, "ident_id=" . $form["ident_id"]));
    }

}

?>
