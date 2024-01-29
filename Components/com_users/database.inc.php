<?php

MImport("core.IDatabase");
MImport("core.IProcess");

require_once("view.inc.php");

class usersDatabase extends IDatabase {

    function save(IView $view, $table) {
        $values = $view->allValue();
        $pkey = $pval = $ukey = null;
        $insert_flag = false;
        $insert_id = 0;
        $require = explode(',', USERS_REQUIRE_FIELDS);

        foreach ($values as $key => $val) {
            if ($key == "id" && trim($val) == "") {
                $insert_flag = true;
            }

            if ($key == "id" && trim($val) != "")
                $insert_id = $val;

            if ($key != "submit" && $key != "token" && !IProcess::startsWith($key, "com_")) {
                for ($i = 0; $i < count($require); $i++)
                    if ($key == $require[$i] && trim($val) == "")
                        $view->setError($require[$i], "*");

                if (trim($val) != "") {
                    $pkey.=$key . ",";
                    
                    if ($key != "password") {
                        $pval.= is_numeric($val) ? $val . ", " : "'$val',";
                        $temp = is_numeric($val) ? $val . ", " : "'$val',";
                    } else {
                        $pval.= "'".md5($val)."',";
                        $temp = "'".md5($val)."',";
                    }
                    $ukey.="$key=$temp";
                }
            }
        }

        if ($view->num_Errors() == 0) {
            $user = $this->getUser($values["username"]);
            if (count($user) == 0) {

                //$pkey.="hid,";
                //$pval.="1,";

                $res = $this->setInsert($table, $pkey, $pval);
                if ($res) {
                    //$view->setValue("username", $this->lastInsertedId());
                    $view->setMessage(MSG_USERS_SAVE);
                }else
                    return false;
            }else {
                $res = $this->setUpdate($table, "$ukey", " username='".$user[0]["username"]."'");
                if ($res) {
                    $view->setMessage(MSG_USERS_SAVE);
                }else
                    return false;
            }
        }else
            return false;
    }

    function delete(IView $view, $table) {
        $form = $view->allValue();
        $view->setDBValue($this->queryFetchRow("*", $table, "username=" . $form["username"]));
        if ($this->setDelete($table, "username=" . $view->value("username")))
            $view->setMessage(MSG_USERS_DELETE);
    }

    function getItemById(IView $view, $table) {
        $form = $view->allValue();
        $view->setDBValue($this->queryFetchRow("*", $table, "username='" . $form["username"]."'"));
    }

}

?>
