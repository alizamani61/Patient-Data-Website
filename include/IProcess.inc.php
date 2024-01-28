<?php

abstract class IProcess {

    private static $_lang;

    public static function setLang($lang) {
        IProcess::$_lang = $lang;
    }

    public static function getLang() {
        return IProcess::$_lang;
    }

    public static function startsWith($haystack, $needle) {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    public static function getBloodGroup($blood) {
        if ($blood == "apos")
            return "+A";
        else if ($blood == "aneg")
            return "-A";
        else if ($blood == "bpos")
            return "+B";
        else if ($blood == "bneg")
            return "-B";
        else if ($blood == "abpos")
            return "+AB";
        else if ($blood == "abneg")
            return "-AB";
        else if ($blood == "opos")
            return "+O";
        else if ($blood == "oneg")
            return "-O";
    }

    public static function getCurrentShDate() {
        date_default_timezone_set("Asia/Tehran");
        //$currdate = explode("/", IProcess::gregorian_to_jalali(date("Y"),date("m"),date("d")));
        //return $currdate[2]."/".$currdate[1]."/".$currdate[0];
        return IProcess::gregorian_to_jalali_str(date("Y"), date("m"), date("d"));
    }

    public static function endsWith($haystack, $needle) {
        $length = strlen($needle);
        $start = $length * -1; //negative
        return (substr($haystack, $start) === $needle);
    }

    public static function ReturnMonthName($monname) {
        switch ($monname) {
            case 1:
                return "فروردين";
                break;
            case 2:
                return "ارديبهشت";
                break;
            case 3:
                return "خرداد";
                break;
            case 4:
                return "تير";
                break;
            case 5:
                return "مرداد";
                break;
            case 6:
                return "شهريور";
                break;
            case 7:
                return "مهر";
                break;
            case 8:
                return "آبان";
                break;
            case 9:
                return "آذر";
                break;
            case 10:
                return "دى";
                break;
            case 11:
                return "بهمن";
                break;
            case 12:
                return "اسفند";
                break;
        }
    }

    public static function div($a, $b) {
        return (int) ($a / $b);
    }

    public static function gregorian_to_jalali_str($g_y, $g_m, $g_d) {
        $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);

        $gy = $g_y - 1600;
        $gm = $g_m - 1;
        $gd = $g_d - 1;

        $g_day_no = 365 * $gy + IProcess::div($gy + 3, 4) - IProcess::div($gy + 99, 100) + IProcess::div($gy + 399, 400);

        for ($i = 0; $i < $gm; ++$i)
            $g_day_no += $g_days_in_month[$i];
        if ($gm > 1 && (($gy % 4 == 0 && $gy % 100 != 0) || ($gy % 400 == 0)))
        /* leap and after Feb */
            $g_day_no++;
        $g_day_no += $gd;

        $j_day_no = $g_day_no - 79;

        $j_np = IProcess::div($j_day_no, 12053); /* 12053 = 365*33 + 32/4 */
        $j_day_no = $j_day_no % 12053;

        $jy = 979 + 33 * $j_np + 4 * IProcess::div($j_day_no, 1461); /* 1461 = 365*4 + 4/4 */

        $j_day_no %= 1461;

        if ($j_day_no >= 366) {
            $jy += IProcess::div($j_day_no - 1, 365);
            $j_day_no = ($j_day_no - 1) % 365;
        }

        for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i)
            $j_day_no -= $j_days_in_month[$i];
        $jm = $i + 1;
        $jd = $j_day_no + 1;

        return $jy . "/" . $jm . "/" . $jd;
    }

    public static function gregorian_to_jalali($g_y, $g_m, $g_d) {
        $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);

        $gy = $g_y - 1600;
        $gm = $g_m - 1;
        $gd = $g_d - 1;

        $g_day_no = 365 * $gy + IProcess::div($gy + 3, 4) - IProcess::div($gy + 99, 100) + IProcess::div($gy + 399, 400);

        for ($i = 0; $i < $gm; ++$i)
            $g_day_no += $g_days_in_month[$i];
        if ($gm > 1 && (($gy % 4 == 0 && $gy % 100 != 0) || ($gy % 400 == 0)))
        /* leap and after Feb */
            $g_day_no++;
        $g_day_no += $gd;

        $j_day_no = $g_day_no - 79;

        $j_np = IProcess::div($j_day_no, 12053); /* 12053 = 365*33 + 32/4 */
        $j_day_no = $j_day_no % 12053;

        $jy = 979 + 33 * $j_np + 4 * IProcess::div($j_day_no, 1461); /* 1461 = 365*4 + 4/4 */

        $j_day_no %= 1461;

        if ($j_day_no >= 366) {
            $jy += IProcess::div($j_day_no - 1, 365);
            $j_day_no = ($j_day_no - 1) % 365;
        }

        for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i)
            $j_day_no -= $j_days_in_month[$i];
        $jm = $i + 1;
        $jd = $j_day_no + 1;

        return array($jy, $jm, $jd);
    }

    public static function AddDate($originalDate,$m,$type) {
        
        list($year ,$month, $day ) = split('[/.-]', $originalDate);
        //echo "Year= ".$year;
        list( $jyear, $jmonth, $jday ) = IProcess::jalali_to_gregorian($year, $month, $day);

        $date = new DateTime($jyear."-".$jmonth."-".$jday);
        
        $date->modify('+'.$m.' '.$type);
        
        list($gyear,$gmonth,$gday) = IProcess::gregorian_to_jalali($date->format('Y'),$date->format('m'),$date->format('d'));
    
        return $gyear."/".str_pad($gmonth, 2, "0", STR_PAD_LEFT)."/".str_pad($gday, 2, "0", STR_PAD_LEFT);
    }

    public static function jalali_to_gregorian($j_y, $j_m, $j_d) {
        $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);

        $jy = $j_y - 979;
        $jm = $j_m - 1;
        $jd = $j_d - 1;

        $j_day_no = 365 * $jy + IProcess::div($jy, 33) * 8 + IProcess::div($jy % 33 + 3, 4);
        for ($i = 0; $i < $jm; ++$i)
            $j_day_no += $j_days_in_month[$i];

        $j_day_no += $jd;

        $g_day_no = $j_day_no + 79;

        $gy = 1600 + 400 * IProcess::div($g_day_no, 146097); /* 146097 = 365*400 + 400/4 - 400/100 + 400/400 */
        $g_day_no = $g_day_no % 146097;

        $leap = true;
        if ($g_day_no >= 36525) /* 36525 = 365*100 + 100/4 */ {
            $g_day_no--;
            $gy += 100 * IProcess::div($g_day_no, 36524); /* 36524 = 365*100 + 100/4 - 100/100 */
            $g_day_no = $g_day_no % 36524;

            if ($g_day_no >= 365)
                $g_day_no++;
            else
                $leap = false;
        }

        $gy += 4 * IProcess::div($g_day_no, 1461); /* 1461 = 365*4 + 4/4 */
        $g_day_no %= 1461;

        if ($g_day_no >= 366) {
            $leap = false;

            $g_day_no--;
            $gy += IProcess::div($g_day_no, 365);
            $g_day_no = $g_day_no % 365;
        }

        for ($i = 0; $g_day_no >= $g_days_in_month[$i] + ($i == 1 && $leap); $i++)
            $g_day_no -= $g_days_in_month[$i] + ($i == 1 && $leap);
        $gm = $i + 1;
        $gd = $g_day_no + 1;

        return array($gy, $gm, $gd);
    }

    public static function CalculateTotalDays($jmonth) {
        switch ($jmonth) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                $TotalDays = 31;
                break;
            case 7:
            case 8:
            case 9:
            case 10:
            case 11:
                $TotalDays = 30;
                break;
            case 12:
                $TotalDays = 29;
                break;
        }
        return $TotalDays;
    }

}

?>
