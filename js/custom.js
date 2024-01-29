var scheduleISComeColor="#dfb";
            
$(document).ready(function() {
    $("#ScheduleModal").on( "click", "td button", function(){
        var $chk = $(this).parent().siblings("td").children("input")
        updateReferral($chk.data("unit"),$chk.data("date"),$chk.is(':checked'),$chk);
    });
    
    //$("#ScheduleModal").on( "mouseover", "#referral-container", function(){
    //	$("#referral-table").dataTable(); 
    //});
    
    $("body").on( "DOMNodeInserted", "#referral-container", function(){
    	$("#referral-table").dataTable(); 
    });
});


function updateReferral(id,date,iscome,$element)
{
    $.ajax({
        type: "POST",
        dataType: "html",
        data: {
            updatereferral:1,
            date:date,
            id:id,
            iscome:(iscome)?1:0
            },
        url: 'process.php',
        success: function (data) {
            if(data==1)
                $element.closest("tr").css({
                    "background-color":scheduleISComeColor
                });
                        
        }
    });
                
}
function getReferral(date){
    $( "<div class='progress'><div class='progress-bar progress-bar-success progress-bar-striped active'  role='progressbar' aria-valuenow='45' aria-valuemin='0' aria-valuemax='100' style='width: 100%'><span class='sr-only'>45% Complete</span></div></div>" )
  .insertAfter("#cal_container_header1");	
    $.ajax({
        type: "POST",
        dataType: "json",
        data: {
            getpatientreferral:1,
            date:date
        },
        url: 'process.php',
        success: function (data) {
            var table = "<div class=\"table-responsive fu-table-container\" id=\"referral-container\">"+
                        " <form action=\"/ObesityPortal/process.php\" method=\"POST\"> "+
                        "    <input type=\"hidden\" value=\""+data[0]["edate"]+"\" name=\"date\"/>"+
                        "    <input type=\"hidden\" value=\"1\" name=\"SendSms\"/>"+
                        "    ارسال پيامك جهت <input type=\"text\" size=\"80\" name=\"reason\" /><br/>"+
                        "    در تاريخ <input type=\"text\" size=\"40\" name=\"refdate\" />"+
                        "    <button class=\"btn btn-primary\" type=\"submit\">Send SMS</button>"+
                        
            "  <table class=\"table table-striped table-bordered table-hover\" width=\"100%\" id=\"referral-table\" ><thead>"+
            "    <tr class=\"referral_header\" bordercolor=\"#FF0000\" >"+
            "       <th> </th>"+
            "       <th>Unit ID</th>"+
            "       <th>Family</th>"+
            "       <th>Name</th>"+
            "       <th>Physician</th>"+
            "       <th>Mobile No</th>"+
            "       <th>Is Come</th>"+
            "       <th>Date</th>"+
            "       <th></th>"+
            "    </tr></thead><tbody>";
            $.each(data, function(key, val) {
                table+="       <tr "+((val.iscome==1)?"style='background-color:"+scheduleISComeColor+"'":"")+">"+
                "<td><input type='checkbox' name='patients[]' value='"+val.identical_dataid+"'/></td>"+
                "<td>"+val.identical_dataid+"</td>"+
                "<td>"+val.lname+"</td>"+
                "<td>"+val.name+"</td>"+
                "<td>"+val.resphysician+"</td>"+
                "<td>"+val.mobileno+"</td>"+
                "<td><input data-date='"+date+"' data-unit='"+val.identical_dataid+"' type='checkbox' "+((val.iscome==1)?"checked ":"")+"/></td>"+
                "<td>"+val.edate+"</td>"+
                "<td><button><i class=\"glyphicon glyphicon-floppy-saved\"></i></button></td>"+"</tr>";
                        
            })
                    
            table+="</tbody></table> </form></div>";
                    
            $('#ScheduleModal').modal();
            $('#ScheduleModal .modal-body').html(table);
            
            $( ".progress" ).detach();      
        }
    });
}