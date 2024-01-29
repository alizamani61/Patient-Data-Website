<?php

MImport("core.IDatabase");
MImport("core.IProcess");

require_once("view.inc.php");

class fuDatabase extends IDatabase {

    function addNew(IView $view, $table) {
        $values = $view->allValue();
        $pkey = $pval = $ukey = null;
        $insert_flag = false;
        $insert_id = 0;
        $require = explode(',', FU_REQUIRE_FIELDS);

        foreach ($values as $key => $val) {
            if ($key == "fuid" && trim($val) == "") {
                $insert_flag = true;
            }

            if ($key == "fuid" && trim($val) != "")
                $insert_id = $val;

            if ($key != "submit" && $key != "token" && $key != "fuid" && !IProcess::startsWith($key, "com_")) {
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
            if ($this->queryNumRows("*", $table, "ident_id=" . $values["ident_id"] . " AND pageType=" . $values["pageType"] . " AND fudate='" . $values["fudate"] . "'") == 0) {
                $res = $this->setInsert($table, $pkey, $pval);
                if ($res) {
                    $view->setValue("fuid", $this->lastInsertedId());
                    $view->setMessage(MSG_FU_SAVE);
                    $this->getItemById($view, $table);
                } else
                    return false;
            }
        } else
            return false;
    }

    function save(IView $view, $table) {
        $values = $view->allValue();
        $pkey = $pval = $ukey = null;
        $insert_flag = false;
        $insert_id = 0;
        $require = explode(',', FU_REQUIRE_FIELDS);

        foreach ($values as $key => $val) {
            if ($key == "fuid" && trim($val) == "") {
                $insert_flag = true;
            }

            if ($key == "fuid" && trim($val) != "")
                $insert_id = $val;

            if ($key != "submit" && $key != "token" && $key != "fuid" && !IProcess::startsWith($key, "com_")) {
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
                    $view->setValue("fuid", $this->lastInsertedId());
                    $view->setMessage(MSG_FU_SAVE);
                    $this->getItemById($view, $table);
                } else
                    return false;
            }else {
                //if ($this->setDelete($table, "fuid=$insert_id ")) {
                $res = $this->setUpdate($table, "$ukey", "fuid=$insert_id");
                if ($res) {
                    $view->setValue("fuid", $insert_id);
                    $view->setMessage(MSG_FU_SAVE);
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
        $view->setDBValue($this->queryFetchRow("*", $table, "fuid=" . $form["fuid"]));
        if ($this->setUpdate($table, "cancel=1", "fuid=" . $view->value("fuid")))
            $view->setMessage(MSG_FU_DELETE);
    }

    function GetAnthropometricMonitoringDates($id) {
        return $this->setManualQuery("SELECT DISTINCT fudate FROM " . TBL_FUDETAIL . " WHERE ident_id=$id AND pageType=1");
    }

    function GetLaboratoryMonitoringDates($id) {
        return $this->setManualQuery("SELECT DISTINCT fudate FROM " . TBL_FUDETAIL . " WHERE ident_id=$id AND pageType=2");
    }

    function getItemById(IView $view, $table) {
        $form = $view->allValue();
        $view->setDBValue($this->queryFetchRow("*", $table, "ident_id=" . $form["ident_id"]));
    }

    function getLaboratoryMonitoring(IView $view, $table) {
        $form = $view->allValue();
        
        $myvar = $this->GetLaboratoryMonitoringDates($form["ident_id"]);
        echo $myvar;
        if (isset($form["fudate"]))
            $fudates = $form["fudate"];
        else
            $fudates = $myvar[0][0];
        $view->setDBValue($this->queryFetchRow("*", $table, "ident_id=" . $form["ident_id"] . " and pageType=2 AND fudate='" . $fudates . "'"));
    }

    function getAnthropometricMonitoring(IView $view, $table) {
        $form = $view->allValue();
        $myvar = $this->GetAnthropometricMonitoringDates($form["ident_id"]);
        
        if (isset($form["fudate"]))
            $fudates = $form["fudate"];
        else
            $fudates = $myvar[0][0];
        $view->setDBValue($this->queryFetchRow("*", $table, "ident_id=" . $form["ident_id"] . " and pageType=1 AND fudate='" . $fudates . "'"));
    }

}

?>
