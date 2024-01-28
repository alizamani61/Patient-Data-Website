<?php
class IHtml
{
    public static function GetMessage($message)
    {
        echo "<script type=\"text/javascript\">
                $(document).ready(function () {
                    new PNotify({
                        title: 'Success',
                        text: '$message',
                        type: 'success',
                        styling: 'bootstrap3'
                    });

                })

            </script>";
        
    }
    public static function TextBoxFormGroup($value,$error,$label=null,$labelRequired=null,$name=null,$id=null,$readonly=null,$required=null)
    {
        $mid = $id==null? "":"id='$id'";
        $mname = $name==null? "":"name='$name'";
        $mreadonly = $readonly==null? "":"readonly='readonly'";
        $mrequired = $required==null? "":"required='required'";
        $mlabelrequired = $labelRequired==null? "":"<span class=\"required\">*</span>";
        
        echo "<div class=\"item form-group\">".
             "   <label class=\"control-label col-md-3 col-sm-3\">$label $mlabelrequired".
             "   </label>".
             "   <div class=\"col-md-6 col-sm-6\">".
             "       <input class=\"form-control col-md-7 col-xs-12\" $mname $mreadonly type=\"text\" value='$value' $mrequired/>".
             "       <font face='verdana' color='red'>$error</font>".
             "    </div>".
             "</div>";
        
    }
    
    public static function SelectBody($src_arr,$form,$field,$dbfield,$dbfieldId,$delflag)
    {
        for($i=0;$i<count($src_arr);$i++)
        {
            if($src_arr[$i][$dbfieldId]==$form[$field] && $src_arr[$i][$delflag]==1)
                echo "<option style='background-color: red;color:#fff' value='".$src_arr[$i][$dbfieldId]."' selected>".$src_arr[$i][$dbfield]."</option>";
            else if($src_arr[$i][$dbfieldId]==$form[$field] && $src_arr[$i][$delflag]==0)
                echo "<option value='".$src_arr[$i][$dbfieldId]."' selected>".$src_arr[$i][$dbfield]."</option>";
            else if($src_arr[$i][$delflag]==0)   
                echo "<option value='".$src_arr[$i][$dbfieldId]."'>".$src_arr[$i][$dbfield]."</option>";
            
        }
                        
    }
    
    public static function SelectBodyPhy($src_arr,$form,$field,$dbfield,$dbfieldId,$delflag)
    {
        for($i=0;$i<count($src_arr);$i++)
        {
            if($src_arr[$i][$dbfieldId]==$form[$field] && $src_arr[$i][$delflag]==1)
                echo "<option style='background-color: red;color:#fff' value='".$src_arr[$i][$dbfieldId]."' selected>".$src_arr[$i][$dbfield]." ".$src_arr[$i]["lname"]."</option>";
            else if($src_arr[$i][$dbfieldId]==$form[$field] && $src_arr[$i][$delflag]==0)
                echo "<option value='".$src_arr[$i][$dbfieldId]."' selected>".$src_arr[$i][$dbfield]." ".$src_arr[$i]["lname"]."</option>";
            else if($src_arr[$i][$delflag]==0)   
                echo "<option value='".$src_arr[$i][$dbfieldId]."'>".$src_arr[$i][$dbfield]." ".$src_arr[$i]["lname"]."</option>";
            
        }
                        
    }
    
    static function BeginForm($name,$action,$method="POST",$class="form-horizontal",$attributes="")
    {
    	return "<form class='$class' name='$name' id='$name' action='$action' method='POST' $attributes>".
    	       " <fieldset>";
    }
    
    static function EndForm()
    {
    	return "    </fieldset>".
	       " </form>";
    }
    
    static function StartTabs($tabs,$hasReceptionData=true)
    {
   
    	$html="";
    	$html.="<ul class=\"nav nav-tabs\">".(($hasReceptionData)?IHTML::ReceptionData():"");
    	$class="class='active'";
    	foreach($tabs as $param => $value) 
    	{
    		
                $html.="<li $class><a href=\"#$param\" data-toggle=\"tab\">$value</a></li>";
                $class="";
            
    	}
    	$html.="</ul>";
    	$html.="<div class=\"well bs-component\">". 
               " <div class=\"tab-content\">";
    	return $html;
    }
    
    static function EndTabs()
    {
    	return "  </div><!-- well End-->".
               " </div><!-- col-lg-12 End-->".
    	       "</div><!--End Tabs-->";
    }
    
    static function StartTab($id,$active=false)
    {
    	return "<div class='tab-pane fade in ".(($active)?"active":"")."' id=\"$id\">";
    }
    
    static function EndTab()
    {
    	return "  </div><!-- Ent Tab-->";           
    }
    
    static function OperationButton($postField,$token)
    {
    	return "<div id=\"buttons_div\" >".
               "    <input name='$postField' type='hidden' value='1' />".
               "    <input name='token' type='hidden' value=\"$token\" />".
               "    <button class=\"btn btn-primary\" title='".FSAVE."' id=\"save_link\" name='submit' type='submit'><i class=\"glyphicon glyphicon-floppy-saved\"></i>&nbsp;&nbsp;&nbsp;&nbsp;".FSAVE."</button>".
               "</div>";
    
    }
    
    static function Message($message)
    {
    	return (($message != "")?"<div class=\"alert alert-success\" role=\"alert\"><img src=\"images/info.png\" width=\"20px\" />&nbsp;".$message."</div>":"");
    }
    
    public static function ReceptionData()
    {
    	return "<li class='dropdown'>".
               "   <a class='dropdown-toggle' data-toggle='dropdown' href='#'><span class='glyphicon glyphicon-folder-open'></span><span>&nbsp;&nbsp;Reception Data</span><span class='caret'></span></a>".
            	"   <ul class='dropdown-menu' role='menu'>".
	        "    	<ul class='nav nav-pills nav-stacked'>".
		"	  <li>".
		"	    <a href='#'>".
		"	      <span class='badge pull-right'>".$_SESSION["identical_dataid"]."</span>".
		"	      Reception ID: ".
		"	    </a>".
		"	  </li>".
		"	</ul>".
		"    </li>".
		"    <li class='divider'></li>".
		"    <li><ul class='nav nav-pills nav-stacked'>".
		"	  <li>".
		"	    <a href='#'>".
		"	      <span class='badge pull-right'>".$_SESSION["age"]."</span>".
		"	      Age: ".
		"	    </a>".
		"	  </li>".
		"	</ul>".
		"    </li>".
		"    <li><ul class='nav nav-pills nav-stacked'>".
		"	  <li>".
		"	    <a href='#'>".
		"	      <span class='badge pull-right'>". $_SESSION["name"] . " " . $_SESSION["lname"] ."</span>".
		"	      Name:". 
		"	    </a>".
		"	  </li>".
		"	</ul>".
		"    </li>".
		"  </ul>".
	  	"</li>";
    }
    public static function Route($page) {
        echo '<html><head><meta http-equiv="refresh" content="1;url=' . $page . '"/></head>
	<body>
	<div align="center" style="padding-top:250px;">
		<img src="images/proc.gif"/> 
	</div>
	</body></html>';
    }
    
    static function Head()
    {
        echo "<head>";
    }
    
    static function EndTag($tag)
    {
        echo "</$tag>";
    }
    
    static function Form($id=null,$name=null,$class=null,$act=null,$method=null,$target=null,$enctype=null)
    {
        $mid = $id==null? "":"id='$id'";
        $mname = $name==null? "":"name='$name'";
        $mclass = $class==null? "":"class='$class'";
        $mact = $act==null? "":"action='$act'";
        $mmethod = $method==null? "":"method='$method'";
        $mtarget = $target==null? "":"target='$target'";
        $menctype = $enctype==null? "":"enctype='$enctype'";
        
        echo "<form $mid $mname $mclass $mact $mmethod $mtarget $menctype  >\n";
          
    }
    
    static function Label($text,$id=null,$name=null,$class=null,$for=null,$endtag=null)
    {
        $mid = $id==null? "":"id='$id'";
        $mname = $name==null? "":"name='$name'";
        $mclass = $class==null? "":"class='$class'";
        $mfor = $for==null? "":"for='$for'";
        
        
        echo "<label $mid $mname $mclass $mfor >$text</label>\n";
        if($endtag!=null)
            echo "</$endtag>"; 
          
    }
    
    static function TextField($value,$error,$name=null,$class=null,$id=null,$readonly=null,$size=null,$endtag=null)
    {
        $mid = $id==null? "":"id='$id'";
        $mname = $name==null? "":"name='$name'";
        $mclass = $class==null? "":"class='$class'";
        $mreadonly = $readonly==null? "":"readonly='readonly'";
        $msize = $size==null? "":"size='$size'";
        
        echo "<input $mid $mname $mclass type='text' $mreadonly $msize value='$value'/>\n";
        echo "<font face='verdana' color='red'>$error</font>";
        if($endtag!=null)
            echo "</$endtag>"; 
          
    }
    
    static function PassField($value,$error,$name=null,$class=null,$id=null,$size=null,$endtag=null)
    {
        $mid = $id==null? "":"id='$id'";
        $mname = $name==null? "":"name='$name'";
        $mclass = $class==null? "":"class='$class'";
        $msize = $size==null? "":"size='$size'";
        
        echo "<input $mid $mname $mclass type='password' $msize value='$value'/>\n";
        echo "<font face='verdana' color='red'>$error</font>";
        if($endtag!=null)
            echo "</$endtag>"; 
          
    }
    
    static function Submit($value,$name=null,$class=null,$id=null,$size=null,$endtag=null)
    {
        $mid = $id==null? "":"id='$id'";
        $mname = $name==null? "":"name='$name'";
        $mclass = $class==null? "":"class='$class'";
        $msize = $size==null? "":"size='$size'";
        
        echo "<input $mid $mname $mclass type='submit' $msize value='$value'/>\n";
        if($endtag!=null)
            echo "</$endtag>"; 
          
    }
    
    static function Hidden($value,$name,$id=null,$endtag=null)
    {
        $mid = $id==null? "":"id='$id'";
        
        echo "<input $mid name='$name' type='hidden' value='$value'/>\n";
        if($endtag!=null)
            echo "</$endtag>"; 
          
    }
    
    static function Image($src,$alt,$title=null,$id=null,$endtag=null)
    {
        $mid = $id==null? "":"id='$id'";
        $mtitle = $title==null? "":"title='$title'";
        
        echo "<img src='$src' alt='$alt' $mtitle $mid />\n";
        
        if($endtag!=null)
            echo "</$endtag>"; 
    }
    
    static function Div($id=null,$class=null,$endtag=null)
    {
        $mid = $id==null? "":"id='$id'";
        $mclass = $class==null? "":"class='$class'";
        $mendtag = $endtag==null? "":"$endtag";
        
        echo "<div $mid $mclass >\n";
        if($endtag!=null)
            echo "</$endtag>";     
    }
    
    public static  function BreadCrump($topPage,$currentPage)
    {
        return "<div id=\"breadcrumb\">".
               " <ul class=\"crumbs\">".
               "     <li class=\"first\"><a href=\"?com_dashboard=1\" style=\"z-index:9;\"><span></span><i class=\"fa fa-home\"></i>&nbsp;&nbsp;Home</a></li>".
               "     <li><a href=\"#\" style=\"z-index:8;\">$topPage</a></li>".
               "     <li><a href=\"#\" style=\"z-index:7;\">$currentPage</a></li>".
               " </ul>".
               "</div>";
    }
    static function Text($text,$bold=null,$endtag)
    {
        if ($bold!=null)
            echo "<b>$text</b>";
        else
            echo "$text";
        
        if($endtag!=null)
            echo "</$endtag>"; 
    }
    
    static function NewLine($number)
    {
        for ($i=0;$i<$number;$i++)
            echo "<br/>";
    }
    
    static function Heading($number,$text,$class=null)
    {
        $mclass = $class==null? "":"class='$class'";
        echo "<h$number $mclass >$text</h$number>";
    }
}
?>