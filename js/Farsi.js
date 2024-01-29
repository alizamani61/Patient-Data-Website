var k ;
var flag = true ;
var s = ' !"#$%،گ)(×+و-./0123456789:ك,=.؟@ِذ}ىُىلآ÷ـ،/’د×؛َءٍف‘{ًْإ~جژچ^_پشذزيثبلاهتنمئدخحضقسفعرصطغظ<|>ّ' ;
var b = navigator.userAgent.toLowerCase() ;
var msie = false ;
var gecko = false ;
var opera = false ;
    if (b.indexOf('msie')>-1) msie = true ;
    if (b.indexOf('gecko')>-1) gecko = true ;
    if (b.indexOf('opera')>-1) opera = true ;
    //===================================================================
    function change(obj){	flag = !flag ;	obj.focus() ;}
    //===================================================================
    function convertToFa(fld,e) 
    {	
        if (flag) 
        {				
            if (msie) 
            {			
                k = event.keyCode ;			
                if (k>31 && k<128) 
                    {				
                        h = s.charCodeAt(k-32) ;				
                        event.keyCode = h ;				
                        return true ;			
                     }		
             }		
             if (gecko) 
             {			
                k = e.which ;			
                    if (k>31 && k<128) 
                    {				
                        h =s.charCodeAt(k-32) ;				
                        fld.value  = fld.value + String.fromCharCode(h) ;				
                        return false ;			
                     }			
                     else 
                     {				
                        return true ;			
                     }		
              }		
              
              if (opera) 
              {			
                k = event.keyCode ;			
                if (k>31 && k<128) 
                {				
                    h =s.charCodeAt(k-32) ;				
                    fld.value  = fld.value + String.fromCharCode(h) ;				
                    return false ;			
                }			
                else 
                {				
                    return true ;			
                }		
              }	
            }
          }//===================================================================
          function LangFar (myobj) 
          {	
            myobj.style.textAlign = "right" ;	
            myobj.style.direction = "rtl" ;	
            myobj.focus() ;	lang = 1 ;
          }
          //===================================================================
          function LangEng (myobj) 
          {	
            myobj.style.textAlign = "left" ;	
            myobj.style.direction = "ltr" ;	
            myobj.focus() ;	lang = 0 ;
          }
          //===================================================================