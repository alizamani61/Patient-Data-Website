function labelFormatter(label, series) {
    return "<div style='font-size:8pt; text-align:center; padding:2px; color:#666;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
}

$(document).ready(function() {

    $.ajax({
        type: "POST",
        url: "process.php",
        data: {
            getoperated:"1"
        },
        datatype:"json"
    })
    .done(function( data) {
	            
        $.plot("#operated-chart", eval('(' +data + ')') , {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    label: {
                        show: true,
                        radius: 3/4,
                        formatter: labelFormatter,
                        background: {
                            opacity: 0.5
                        }
                    }
                }
            },
            legend: {
                show: false
            }
        });
    });
	        
	        
    $.ajax({
        type: "POST",
        url: "process.php",
        data: {
            getmorbid:"1"
        },
        datatype:"json"
    })
    .done(function( data) {
	        
        $.plot('#morbid-chart', eval('(' +data + ')'), {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    label: {
                        show: true,
                        radius: 3/4,
                        formatter: labelFormatter,
                        background: {
                            opacity: 0.5
                        }
                    }
                }
            },
            legend: {
                show: false
            }
        });
		    
    });
    
    $.ajax({
        type: "POST",
        url: "process.php",
        data: {
            getredo:"1"
        },
        datatype:"json"
    })
    .done(function( data) {
	        
        $.plot('#redo-chart', eval('(' +data + ')'), {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    label: {
                        show: true,
                        radius: 3/4,
                        formatter: labelFormatter,
                        background: {
                            opacity: 0.5
                        }
                    }
                }
            },
            legend: {
                show: false
            }
        });
		    
    });
		  
					
});
