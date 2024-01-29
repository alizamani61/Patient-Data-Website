<?php

MImport("core.IDatabase");
MImport("core.IProcess");

require_once("view.inc.php");

class identicalDatabase extends IDatabase {

    function save(IView $view, $table) {
        $values = $view->allValue();
        $pkey = $pval = $ukey = null;
        $insert_flag = false;
        $insert_id = 0;
        $require = explode(',', IDENTICAL_REQUIRE_FIELDS);

        foreach ($values as $key => $val) {
            if ($key == "identical_dataid" && trim($val) == "") {
                $insert_flag = true;
            }

            if ($key == "identical_dataid" && trim($val) != "")
                $insert_id = $val;

            if ($key != "submit" && $key != "token" && $key != "identical_dataid" && !IProcess::startsWith($key, "com_")) {
                for ($i = 0; $i < count($require); $i++)
                    if ($key == $require[$i] && trim($val) == "")
                        $view->setError($require[$i], "*");

                if (trim($val) != "") {
                    $pkey.=$key . ",";
                    $pval.= is_numeric($val) ? $val . ", " : "'$val',";
                    $temp = is_numeric($val) ? $val . ", " : "'$val',";
                    $ukey.="$key=$temp";
                }
            }
        }
        
        if ($view->num_Errors() == 0) {
            if ($insert_flag) {
                $pkey.="user,";
                $pval.="'" . $_SESSION["username"] . "',";
                $res = $this->setInsert($table, $pkey, $pval);
                if ($res) {
                    $view->setValue("identical_dataid", $this->lastInsertedId());

                    foreach ($values as $key => $val) {
                        if (!is_int($key))
                            $_SESSION[$key] = $val;
                    }
                    $_SESSION["identical_dataid"] = $this->lastInsertedId();
                    $view->setMessage(MSG_IDENTICAL_SAVE);
                }else
                    return false;
            }else {
                $ukey.="user='" . $_SESSION["username"] . "',";
                $res = $this->setUpdate($table, "$ukey", " identical_dataid=$insert_id ");
                if ($res) {
                    $view->setMessage(MSG_IDENTICAL_SAVE);
                    foreach ($values as $key => $val) {
                        if (!is_int($key))
                            $_SESSION[$key] = $val;
                    }
                    $_SESSION["identical_dataid"] = $insert_id;
                }else
                    return false;
            }
        }else
            return false;
    }

    
	
    function delete(IView $view, $table, $isAdministrator=false) {
        if ($isAdministrator) {
            $form = $view->allValue();
            $view->setDBValue($this->queryFetchRow("*", $table, "identical_dataid=" . $form["identical_dataid"]));
            if ($this->setUpdate($table, "identical_delflag=1", "identical_dataid=" . $view->value("identical_dataid")))
            {
                $view->setMessage(MSG_IDENTICAL_DELETE);
                unset($_SESSION["identical_dataid"]);
                unset($_SESSION["name"]);
                unset($_SESSION["lname"]);
                unset($_SESSION["age"]);
            }
        }else
            echo "You have not enough permission";
    }

    function getItemById(IView $view, $table,$isAdministrator=false) {
        $form = $view->allValue();
        
        $condition="identical_dataid=" . $form["identical_dataid"];
        $condition.=(!$isAdministrator) ? " And user='" . $_SESSION["username"] . "'" : "";
        $view->setDBValue($this->queryFetchRow("*", $table, $condition));

        $values = $view->allValue();

        foreach ($values as $key => $val) {
            //if(!is_int($key))
            $_SESSION[$key] = $val;
        }
    }

}

?>