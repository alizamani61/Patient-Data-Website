<?php

MImport("core.IDatabase");
MImport("core.IProcess");

require_once("view.inc.php");

class reviewDatabase extends IDatabase {

    function save(IView $view, $table) {
        $values = $view->allValue();
        $pkey = $pval = $ukey = null;
        $insert_flag = false;
        $insert_id = 0;
        $require = explode(',', REVIEW_REQUIRE_FIELDS);

        foreach ($values as $key => $val) {
            if ($key == "review_of_systemsid" && trim($val) == "") {
                $insert_flag = true;
            }

            if ($key == "review_of_systemsid" && trim($val) != "")
                $insert_id = $val;

            if ($key != "submit" && $key != "token" && $key != "review_of_systemsid" && !IProcess::startsWith($key, "com_")) {
                for ($i = 0; $i < count($require); $i++)
                    if ($key == $require[$i] && trim($val) == "")
                        $view->setError($require[$i], "*");

                if (is_array($values[$key])) {
                    $val = implode(';', $values[$key]);
                    //echo $val;
                };
                //if (trim($val) != "") {
                $pkey .= $key . ",";
                if (trim($val) == "") {
                    $pval .= "NULL,";
                    $temp = "NULL,";
                    $ukey .= "$key=$temp";
                } else {
                    $pval .= is_numeric($val) ? $val . ", " : "'$val',";
                    $temp = is_numeric($val) ? $val . ", " : "'$val',";
                    $ukey .= "$key=$temp";
                }
                //}
            }
        }

        if ($view->num_Errors() == 0) {
            if ($insert_flag) {
                $res = $this->setInsert($table, $pkey, $pval);
                if ($res) {
                    $view->setValue("review_of_systemsid", $this->lastInsertedId());
                    $view->setMessage(MSG_REVIEW_SAVE);
                } else
                    return false;
            }else {
                //if($this->setDelete($table, "review_of_systemsid=$insert_id "))
                //{
                $res = $this->setUpdate($table, "$ukey", "review_of_systemsid=$insert_id");
                if ($res) {
                    $view->setValue("review_of_systemsid", $insert_id);
                    $view->setMessage(MSG_REVIEW_SAVE);
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
        $view->setDBValue($this->queryFetchRow("*", $table, "review_of_systemsid=" . $form["review_of_systemsid"]));
        if ($this->setUpdate($table, "cancel=1", "review_of_systemsid=" . $view->value("review_of_systemsid")))
            $view->setMessage(MSG_REVIEW_DELETE);
    }

    function getItemById(IView $view, $table) {
        $form = $view->allValue();
        $view->setDBValue($this->queryFetchRow("*", $table, "ident_id=" . $form["ident_id"]));
    }

}

?>
