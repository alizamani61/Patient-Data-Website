<?php

abstract class IView {

    private $_Values = array(); //Holds submitted form field values
    private $_Errors = array();
    private $_Message;
    private $_Num_error;

    public function __construct() {
        $this->_Values = null;
        $this->_Errors = null;
        $this->_Num_error = 0;
    }

    public function allValue() {
        return $this->_Values;
    }

    public function allErrors() {
        return $this->_Errors;
    }

    public static function checkValue($val) {
        return htmlspecialchars(stripslashes(strip_tags($val)), ENT_QUOTES);
    }

    public function setValue($field, $msg) {
        $this->_Values[$field] = htmlspecialchars(stripslashes(strip_tags($msg)), ENT_QUOTES);
    }

    public function setError($field, $msg) {
        $this->_Errors[$field] = htmlspecialchars(stripslashes(strip_tags($msg)), ENT_QUOTES);
        $this->_Num_error++;
    }

    public function getError($field) {
        if (array_key_exists($field, $this->_Errors)) {
            return htmlspecialchars(stripslashes(strip_tags($this->_Errors[$field])), ENT_QUOTES);
        } else
            return "";
    }

    public function num_Errors() {
        return $this->_Num_error;
    }

    public function setFormValue($array) {

        foreach ($array as $key => $val) {
            //$key is the name you wanted, and $val is the value of that input  
            //$this->_Values[htmlspecialchars(stripslashes(strip_tags($key)), ENT_QUOTES)] = htmlspecialchars(stripslashes(strip_tags($val)), ENT_QUOTES);
            //$this->_Errors[htmlspecialchars(stripslashes(strip_tags($key)), ENT_QUOTES)] = "";
            //$this->_Message = "";

            $this->_Values[$key] = $val;
            $this->_Errors[$key] = "";
            $this->_Message = "";
        }
    }

    public function setFormValue_Html($array) {

        foreach ($array as $key => $val) {
            //$key is the name you wanted, and $val is the value of that input  
            $this->_Values[htmlspecialchars($key)] = $val;
            $this->_Errors[htmlspecialchars(stripslashes(strip_tags($key)), ENT_QUOTES)] = "";
            $this->_Message = "";
        }
    }

    public function setDBValue($array) {
        $this->_Values = $array;
        $this->_Message = "";
    }

    public function value($field) {

        if (array_key_exists($field, $this->_Values)) {
            return htmlspecialchars(stripslashes(strip_tags($this->_Values[$field])), ENT_QUOTES);
        } else
            return "";
    }

    public function message() {
        return htmlspecialchars(stripslashes(strip_tags($this->_Message)), ENT_QUOTES);
    }

    public function setMessage($str) {
        $this->_Message = htmlspecialchars(stripslashes(strip_tags($str)), ENT_QUOTES);
    }

    public function persianNumber($str) {
        $str = str_replace("0", "۰", $str);
        $str = str_replace("1", "۱", $str);
        $str = str_replace("2", "۲", $str);
        $str = str_replace("3", "۳", $str);
        $str = str_replace("4", "۴", $str);
        $str = str_replace("5", "۵", $str);
        $str = str_replace("6", "۶", $str);
        $str = str_replace("7", "۷", $str);
        $str = str_replace("8", "۸", $str);
        $str = str_replace("9", "۹", $str);
        $str = str_replace("-", "/", $str);
        return $str;
    }

    public function checkStrings($val, $field, $noEmpty) {
        if ($noEmpty) {
            if (!$val || strlen($val = trim($val)) == 0)
                return false;
            else
            if (preg_match('/[\@=!*~\&|\-]/s', $val))
                return false;
        }else
        if (preg_match('/[\@=!*~\&|\-]/s', $val))
            return false;

        return true;
    }

    public function checkDigits($val, $field, $noEmpty) {
        if ($noEmpty) {
            if (!$val || strlen($val = trim($val)) == 0)
                return false;
            else
            if (!preg_match('[0-9]', $val))
                return false;
        }else
        if (!preg_match('[0-9]', $val))
            return false;

        return true;
    }

    public function checkDates($val, $field, $noEmpty) {
        if ($noEmpty) {
            if (!$val || strlen($val = trim($val)) == 0)
                return false;
            else
            if (!preg_match('[0-9/]', $val))
                return false;
        }else
        if (!preg_match('[0-9/]', $val))
            return false;

        return true;
    }

    public function checkEmails($val, $field, $noEmpty) {
        if ($noEmpty) {
            if (!$val || strlen($val = trim($val)) == 0)
                return false;
            else
            if (preg_match('/[\@=!*~\&|\-]/s', $val))
                return false;
        }else
        if (preg_match('/[\@=!*~\&|\-]/s', $val))
            return false;

        return true;
    }

    public function CheckBox($label, $name, $form, $error, $haselement = false, $haserror = true, $attribute = "", $event = "") {
        return " <div class='form-group'>" .
                //" <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">$label</label>".
                "  <div class=\"col-md-9 col-sm-9 col-xs-12\">" .
                "    <div class=\"\">" .
                "    <label>" .
                "        <input type='hidden' value='0' name='$name'>".
                "        <input class=\"js-switch\" name='$name' type='checkbox' id='$name' value=1 " . (($haselement) ? "data-toggle='#" . $name . "-td'" : "") . " $attribute $event " . (($form[$name] == 1) ? 'checked' : '') . " />&nbsp;$label" .
                "    </label>" . (($haserror) ? "    <font face='verdana' color='red'>" . $error[$name] . "</font>" : "") . (($haselement) ? "    <i class='glyphicon glyphicon-chevron-down'></i>" : "") .
                "   </div>" .
                "  </div>" .
                " </div>";
    }

    public function TextArea($label, $name, $form, $error, $haserror = true, $attribute = "", $event = "", $rows = null, $cols = null) {
        return (($label != "") ? "<label class='col-sm-2 control-label'>$label</label>" : "") .
                "<textarea class='form-control' name='$name' $attribute $event " . (($rows != null) ? "rows='$rows' " : "") . (($cols != null) ? "cols='$cols' " : "") . ">" . $form[$name] . "</textarea>" .
                (($haserror) ? "    <font face='verdana' color='red'>" . $error[$name] . "</font>" : "");
    }

    public function Text($label, $name, $form, $error, $haserror = true, $attribute = "", $event = "") {
        return " <div class='form-group'>" .
                "        <label class='col-lg-2 control-label'>$label</label>" .
                "        <div class='col-lg-10'>" .
                "            <input class='form-control' id='$name' name='$name' $attribute $event type='text' value='" . $form[$name] . "' />" .
                (($haserror) ? "         <font face='verdana' color='red'>" . $error[$name] . "</font>" : "") .
                "         </div>" .
                "     </div>";
    }

    public function Select($label, $name, $form, $error, $items, $haserror = true, $attribute = "", $event = "", $itemValues = "") {
        $items = str_replace("combo(", "", $items);
        $items = substr_replace($items, "", -1);

        $opt = explode("/", $items);
        $itemValuesArr = explode("/", $itemValues);

        //$options ="               <option value='" . $form[$name] . "'>" . $form[$name] . "</option>";
        $options.="               <option value=''> </option>";
        for ($i = 0; $i < count($opt); $i++) {
            $selected = "";
            $arrname = str_replace("[]", "", $name);

            $formarr = explode(";", $form[$arrname]);

            if (is_array($form[$arrname])) {

                foreach ($form[$arrname] as $key => $val) {
                    if (trim($val) != "" && trim($val) == trim($itemValuesArr[$i]))
                        $selected = "selected";
                    if (trim($val) != "" && trim($val) == trim($opt[$i]))
                        $selected = "selected";
                }
            }else if (is_array($formarr)) {

                foreach ($formarr as $key => $val) {
                    //echo $val;
                    if (trim($val) != "" && trim($val) == trim($itemValuesArr[$i]))
                        $selected = "selected";
                    if (trim($val) != "" && trim($val) == trim($opt[$i]))
                        $selected = "selected";
                }
            }else {

                if (trim($form[$name]) != "" && trim($form[$name]) == trim($itemValuesArr[$i]))
                    $selected = "selected";
                if (trim($form[$name]) != "" && trim($form[$name]) == trim($opt[$i]))
                    $selected = "selected";
            }


            if ($itemValues == "")
                $options.= "               <option value='" . $opt[$i] . "' $selected>" . $opt[$i] . "</option>";
            else
                $options.= "               <option value='" . $itemValuesArr[$i] . "' $selected>" . $opt[$i] . "</option>";
        }


        return "  <div class='form-group'>" .
                "         <label class='control-label col-md-3 col-sm-3'>$label</label>" .
                "         <div class='col-md-6 col-sm-6'>" .
                "             <select id='$name' name='$name' $attribute $event >" .
                $options .
                "             </select>" .
                (($haserror) ? "         <font face='verdana' color='red'>" . $error[$name] . "</font>" : "") .
                "         </div>" .
                "      </div>";
    }

    public function DateBox($label, $name, $form, $error, $haserror = true, $attribute = "", $event = "") {
        return "   <div class='form-group date-group'>" .
                "         <label class='col-lg-2 control-label'>$label</label>" .
                "         <div class='input-group' style='width:200px'>" .
                "             <input  class='form-control' id='$name' name='$name' type='text' readonly='readonly' value='" . $form[$name] . "' />" .
                "             <span class='input-group-btn'>" .
                "                 <button class='btn btn-primary' id='$name" . "_btn' type='button'><span class='glyphicon glyphicon-calendar'></span></button>" .
                "             </span>" .
                "             <script type='text/javascript'>" .
                "                 Calendar.setup({" .
                "                     inputField     :    '$name'," .
                "                     button         :    '$name" . "_btn'," .
                "                     ifFormat       :    '%Y/%m/%d'," .
                "                     dateType	   :	'jalali'," .
                "                     weekNumbers    : false" .
                "                 });" .
                "             </script>" .
                (($haserror) ? "         <font face='verdana' color='red'>" . $error[$name] . "</font>" : "") .
                "         </div>" .
                "     </div>";
    }

    public function StartPanel($header, $style = 'default') {
        return " <div class=\"x_panel\">" .
                "     <div class=\"x_title\">" .
                "         <h2><i class=\"fa fa-tasks\"></i>&nbsp;$header &nbsp;</h2>" .
                "         <ul class=\"nav navbar-right panel_toolbox\">" .
                "             <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>" .
                "             </li>" .
                "             <li class=\"dropdown\">" .
                "                 <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>" .
                "                 <ul class=\"dropdown-menu\" role=\"menu\">" .
                "                     <li><a href=\"#\">Settings 1</a>" .
                "                     </li>" .
                "                     <li><a href=\"#\">Settings 2</a>" .
                "                     </li>" .
                "                 </ul>" .
                "             </li>" .
                "             <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>" .
                "             </li>" .
                "         </ul>" .
                "         <div class=\"clearfix\"></div>" .
                "     </div>" .
                "     <div class=\"x_content\">";
    }

    public function EndPanel($footer = null) {
        return "  </div>" .
                (($footer != null) ? "   <div class='panel-footer'>$footer</div>" : "") .
                " </div>";
    }

    public function generate_check($label, $name, $type) {
        $form = $this->allValue();
        if ($form[$name] == 1) {
            echo "<label for='$name'>$label</label>";
            echo "<input id='$name' name='$name' type='checkbox' value=1 checked />";
        }
    }

    public function generate_combo($label, $name, $type) {
        $form = $this->allValue();
        $type = str_replace("combo(", "", $type);
        $type = substr_replace($type, "", -1);
        $opt = explode("/", $type);
        if (isset($form[$name]))
            if (trim($form[$name]) != "") {
                echo "<label>$label</label>";
                echo "<select class='form-control' name='$name'>";
                echo "<option value='" . $form[$name] . "'>" . $form[$name] . "</option>";
                for ($i = 0; $i < count($opt); $i++) {
                    echo "<option value='" . $opt[$i] . "'>" . $opt[$i] . "</option>";
                }
                echo "</select>";
            }
    }

    public function generate_text($label, $name, $type) {
        $form = $this->allValue();
        if (isset($form[$name]))
            if (trim($form[$name]) != "") {
                echo "<label>$label</label>";
                echo "<input class='form-control' name='$name' size='10' type='text' value='$form[$name]' />";
            }
    }

    public function generate_textarea($label, $name, $type) {
        $form = $this->allValue();
        if (isset($form[$name]))
            if (trim($form[$name]) != "") {
                echo "<label>$label</label>";
                echo "</label><textarea class='form-control' name='$name' rows='5' cols='40'>$form[$name]</textarea>";
            }
    }

}

?>
