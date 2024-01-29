<?php

MImport("core.IDatabase");
MImport("core.IProcess");

require_once("view.inc.php");

class SearchDatabase extends IDatabase {

    function getAllItems() {
        
    }

    function getItemById($id) {
        
    }

    
    
    function search_users(SearchView $view) {
        $values = $view->allValue();
        $condition = "(1=1) ";
        foreach ($values as $key => $val) {

            if (!IPROCESS::startsWith($key, "com_") && !IPROCESS::startsWith($key, "COM_")) {
                if (trim($val) != "") {
                    $condition.=" and $key like '%$val%' ";
                }
            }
        }

        $result = $this->queryFetchArray("*", TBL_USERS, $condition);


        $view->setDBValue($result);
        $view->showUsers_SearchTable();
    }

    function getWhereClauseSign($text) {

        if ($text == "Equals")
            return "=";
        if ($text == "Less Than")
            return "<";
        if ($text == "Greater Than")
            return ">";
        if ($text == "Contains")
            return "like";
        if ($text == "Not Equals")
            return "<>";
    }

    function search(SearchView $view, $isAdministrator=false) {
        if ($isAdministrator) {
            $values = $view->allValue();

            $tablename = substr($values["sname"], 0, strrpos($values["sname"], "."));
            $tablename1 = substr($values["sname1"], 0, strrpos($values["sname1"], "."));
            $tablename2 = substr($values["sname2"], 0, strrpos($values["sname2"], "."));
            $tablename3 = substr($values["sname3"], 0, strrpos($values["sname3"], "."));


            $Tables = array($tablename, $tablename1, $tablename2, $tablename3);

            $Tables = array_unique($Tables);

            $JoinClause = "";
            $WhereClause = " And identical_delflag=0 ";

            if (trim($values["sname"]) != "" && trim($values["scond"]) != "" && trim($values["svalue"]) != "") {
                if ($this->getWhereClauseSign($values["scond"]) == "like")
                    $WhereClause = " And " . $values["sname"] . " like '%" . $values["svalue"] . "%' ";
                else
                    $WhereClause = " And " . $values["sname"] . " " . $this->getWhereClauseSign($values["scond"]) . " '" . $values["svalue"] . "' ";
            }

            if (trim($values["sand1"]) != "" && trim($values["sname1"]) != "" && trim($values["scond1"]) != "" && trim($values["svalue1"]) != "") {
                if ($this->getWhereClauseSign($values["scond1"]) == "like")
                    $WhereClause .= " " . $view->checkValue($values["sand1"]) . " " . $values["sname1"] . " like '%" . $values["svalue1"] . "%'  ";
                else
                    $WhereClause .= " " . $view->checkValue($values["sand1"]) . " " . " " . $values["sname1"] . " " . $this->getWhereClauseSign($values["scond1"]) . " '" . $values["svalue1"] . "' ";
            }

            if (trim($values["sand2"]) != "" && trim($values["sname2"]) != "" && trim($values["scond2"]) != "" && trim($values["svalue2"]) != "") {
                if ($this->getWhereClauseSign($values["scond2"]) == "like")
                    $WhereClause .= " " . $view->checkValue($values["sand2"]) . " " . $values["sname2"] . " like '%" . $values["svalue2"] . "%'  ";
                else
                    $WhereClause .= " " . $view->checkValue($values["sand2"]) . " " . " " . $values["sname2"] . " " . $this->getWhereClauseSign($values["scond2"]) . " '" . $values["svalue2"] . "' ";
            }

            if (trim($values["sand3"]) != "" && trim($values["sname3"]) != "" && trim($values["scond3"]) != "" && trim($values["svalue3"]) != "") {
                if ($this->getWhereClauseSign($values["scond3"]) == "like")
                    $WhereClause .= " " . $view->checkValue($values["sand3"]) . " " . $values["sname3"] . " like '%" . $values["svalue3"] . "%'  ";
                else
                    $WhereClause .= " " . $view->checkValue($values["sand3"]) . " " . " " . $values["sname3"] . " " . $this->getWhereClauseSign($values["scond3"]) . " '" . $values["svalue3"] . "' ";
            }
            //echo $WhereClause ;

            foreach ($Tables as $key) {
                if (trim($key) != "")
                    $JoinClause.=(($key != "identical") ? " left outer join " . $key . " on identical.`identical_dataid`=" . $key . ".`ident_id` " : "");
            }



            $query = "select * from identical " . $JoinClause . " where (1=1) " . $WhereClause;
            //echo $query;
            $result = $this->manual_query($query);
            $view->setDBValue($result);
            $view->showIdenticalSearchTable();
        }
        else
            echo "You have not enough permission";
    }

    function search_identical(SearchView $view, $isAdministrator=false) {
        $values = $view->allValue();

        $condition = "identical_dataid >0 and identical_delflag<>1 ";
        foreach ($values as $key => $val) {

            if (!IPROCESS::startsWith($key, "com_") && !IPROCESS::startsWith($key, "COM_")) {
                if (trim($val) != "") {
                    $condition.=" and $key like '%$val%' ";
                }
            }
        }
        //echo $condition;
        $condition.=(!$isAdministrator) ? " And user='" . $_SESSION["username"] . "'" : "";
        //echo ($isAdministrator) ? " And user='" . $_SESSION["username"] . "'" : "555";
        $result = $this->queryFetchArray("*", TBL_IDENTICAL, $condition);


        $view->setDBValue($result);
        $view->showIdenticalSearchTable();
    }

}

?>