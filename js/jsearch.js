var is_dialog_open;

String.prototype.trim = function () {
    return this.replace(/^\s*/, "").replace(/\s*$/, "");
}
$(document).ready(function () {
    $("#cal_table_container table td").mouseover(function () {
        $("#cal_footer").html($(this).attr("title"));
    });

    $("#tab_page li a").click(function (e) {
        e.preventDefault()
    });
    $(".form-horizontal").find('input[data-toggle]')
            .on('click', function (event) {
                var $target = $($(this).attr('data-toggle'));
                if ($(this).prop("checked"))
                    $target.show();
                else
                    $target.hide();

            });
})

$(document).ajaxStart(function () {
    $("<div class='progress'><div class='progress-bar progress-bar-striped active'  role='progressbar' aria-valuenow='45' aria-valuemin='0' aria-valuemax='100' style='width: 100%'><span class='sr-only'>45% Complete</span></div></div>")
            .prependTo("#search_form .panel-footer div");

    $("<img src='images/loader.gif' style='width:60px;'/>")
            .prependTo("#result");
});

$(document).ajaxStop(function () {
    $("#search_form .panel-footer div .progress").detach();
    $("#result img").detach();

});
function generate_check(id, label, name, type, appendflag)
{
    if ($("#" + id).attr("checked"))
    {
        if (appendflag)
            $("#" + id + "td").append("<div><label for='" + name + "'>" + label + "</label><input id='" + name + "' name='" + name + "' type='checkbox' value=1 /></div>");
        else
            $("#" + id + "td").html("<div><label for='" + name + "'>" + label + "</label><input id='" + name + "' name='" + name + "' type='checkbox' value=1 /></div>");
    } else
        $("#" + id + "td").html("");
}

function generate_text(id, label, name, type, appendflag)
{
    if ($("#" + id).attr("checked"))
    {
        if (appendflag)
            $("#" + id + "td").append("<div><label>" + label + "</label><input class='form-control' name='" + name + "' size='10' type='text' value='' /></div>");
        else
            $("#" + id + "td").html("<div><label>" + label + "</label><input class='form-control' name='" + name + "' size='10' type='text' value='' /></div>");
    } else
        $("#" + id + "td").html("");
}

function generate_textarea(id, label, name, type, appendflag)
{
    if ($("#" + id).attr("checked"))
    {
        if (appendflag)
            $("#" + id + "td").append("<div><label>" + label + "</label><textarea class='form-control' name='" + name + "' rows='5' cols='40'></textarea></div>");
        else
            $("#" + id + "td").html("<div><label>" + label + "</label><textarea class='form-control' name='" + name + "' rows='5' cols='40'></textarea></div>");
    } else
        $("#" + id + "td").html("");
}

function generate_combo(id, label, name, type, appendflag)
{
    if ($("#" + id).attr("checked"))
    {
        type = type.replace("combo(", "");
        type = type.slice(0, type.length - 1);
        var opt = type.split('/');
        var str = "<label>" + label + "</label><select class='form-control' name='" + name + "'>";
        for (var i = 0; i < opt.length; i++)
        {
            str += "  <option value='" + opt[i] + "'>" + opt[i] + "</option>";
        }
        str += "</select>";
        if (appendflag)
            $("#" + id + "td").append("<div>" + str + "</div>");
        else
            $("#" + id + "td").html("<div>" + str + "</div>");
    } else
        $("#" + id + "td").html("");
}

function dialog_Article(tagid)
{
    if (!is_dialog_open)
        showArticleDialog("", tagid);
    var darname = $("#darname").val();

    ajax_Send("dialog_article=1&darname=" + darname + "&tagid=" + tagid, "dialog");

}
function dialog_Physician(tagid)
{
    if (!is_dialog_open)
        showPhysicianDialog("", tagid);
    var dphyname = $("#dphyname").val();

    ajax_Send("dialog_physician=1&dphyname=" + dphyname + "&tagid=" + tagid, "dialog");

}

function dialog_Surgery(tagid)
{
    if (!is_dialog_open)
        showSurgeryDialog("", tagid);
    var dsurgname = $("#dsurgname").val();

    ajax_Send("dialog_surgery=1&dsurgname=" + dsurgname + "&tagid=" + tagid, "dialog");

}

function select_item(id, tagid)
{
    $("#" + tagid).val(id);
    $("#" + tagid).change();
    dialogClose();
}

function select_article(id, tagid)
{
    $("#" + tagid).val('?com_article=1&id=' + id);
    $("#" + tagid).change();
    dialogClose();
}

function dialog_redirect(url, message)
{
    var html = "<br/><br/>" +
            "<div align='center'>" + message +
            "</div><br/><br/><br/>" +
            "<div align='center'>" +
            " <input type='button' value='بلي' onclick='redirection(\"" + url + "\")' />" +
            " <input type='button' value='خير' onclick='dialogClose()' />" +
            "</div>";
    showDialog(html);
}

function redirection(url)
{
    return window.location.href = url;
}

function openWindow(url)
{
    return window.open(url)
}
function showArticleDialog(data, tagid)
{
    if (!$("#mask").length > 0) {
        $("body").append("<div id='mask'></div>");
        $("#mask").height(1800);
        $("#mask").width(1800);
        $("#mask").append("<div id='dialog_header'><a id='close_dialog' href='#'></a></div>");
        $("#mask").append("<div id='dialog'></div>");
        $("#dialog_header a").click(function (e) {
            e.preventDefault();
            dialogClose();
        });
    }

    if ($("#dialog_condition").length > 0)
    {
        $("#dialog_condition").remove();
        $("#mask").append("<div id='dialog_condition'><input id='darname' type='text' onkeyup='dialog_Article(\"" + tagid + "\")'/></div>");
    } else
        $("#mask").append("<div id='dialog_condition'><input id='darname' type='text' onkeyup='dialog_Article(\"" + tagid + "\")'/></div>");

    $("#dialog").html(data);

    $("#dialog_header").css({top: 50});
    $("#dialog").css({top: 50});

    $("#dialog_header").css({left: document.documentElement.clientWidth / 2 - 180});

    $("#dialog").css({left: document.documentElement.clientWidth / 2 - 180});
    $("#dialog_condition").css({left: document.documentElement.clientWidth / 2 - 180});

    $("#dialog_header").css({display: 'block'}).fadeIn(1000);
    $("#dialog").css({display: 'block'}).fadeIn(1000);
    $("#mask").css({display: 'block'}).fadeIn(1000);
    $("#dsurgname").focus();
    is_dialog_open = true;
}

function showPhysicianDialog(data, tagid)
{
    if (!$("#mask").length > 0) {
        $("body").append("<div id='mask'></div>");
        $("#mask").height(1800);
        $("#mask").width(1800);
        $("#mask").append("<div id='dialog_header'><a id='close_dialog' href='#'></a></div>");
        $("#mask").append("<div id='dialog'></div>");
        $("#dialog_header a").click(function (e) {
            e.preventDefault();
            dialogClose();
        });
    }

    if ($("#dialog_condition").length > 0)
    {
        $("#dialog_condition").remove();
        $("#mask").append("<div id='dialog_condition'><input id='dphyname' type='text' onkeyup='dialog_Physician(\"" + tagid + "\")'/></div>");
    } else
        $("#mask").append("<div id='dialog_condition'><input id='dphyname' type='text' onkeyup='dialog_Physician(\"" + tagid + "\")'/></div>");

    $("#dialog").html(data);

    $("#dialog_header").css({top: 50});
    $("#dialog").css({top: 50});

    $("#dialog_header").css({left: document.documentElement.clientWidth / 2 - 180});

    $("#dialog").css({left: document.documentElement.clientWidth / 2 - 180});
    $("#dialog_condition").css({left: document.documentElement.clientWidth / 2 - 180});

    $("#dialog_header").css({display: 'block'}).fadeIn(1000);
    $("#dialog").css({display: 'block'}).fadeIn(1000);
    $("#mask").css({display: 'block'}).fadeIn(1000);
    $("#dphyname").focus();
    is_dialog_open = true;
}

function showSurgeryDialog(data, tagid)
{
    if (!$("#mask").length > 0) {
        $("body").append("<div id='mask'></div>");
        $("#mask").height(1800);
        $("#mask").width(1800);
        $("#mask").append("<div id='dialog_header'><a id='close_dialog' href='#'></a></div>");
        $("#mask").append("<div id='dialog'></div>");
        $("#dialog_header a").click(function (e) {
            e.preventDefault();
            dialogClose();
        });
    }

    if ($("#dialog_condition").length > 0)
    {
        $("#dialog_condition").remove();
        $("#mask").append("<div id='dialog_condition'><input id='dsurgname' type='text' onkeyup='dialog_Surgery(\"" + tagid + "\")'/></div>");
    } else
        $("#mask").append("<div id='dialog_condition'><input id='dsurgname' type='text' onkeyup='dialog_Surgery(\"" + tagid + "\")'/></div>");

    $("#dialog").html(data);

    $("#dialog_header").css({top: 50});
    $("#dialog").css({top: 50});

    $("#dialog_header").css({left: document.documentElement.clientWidth / 2 - 180});

    $("#dialog").css({left: document.documentElement.clientWidth / 2 - 180});
    $("#dialog_condition").css({left: document.documentElement.clientWidth / 2 - 180});

    $("#dialog_header").css({display: 'block'}).fadeIn(1000);
    $("#dialog").css({display: 'block'}).fadeIn(1000);
    $("#mask").css({display: 'block'}).fadeIn(1000);
    $("#dsurgname").focus();
    is_dialog_open = true;
}

function showPhysicianDialog(data, tagid)
{
    if (!$("#mask").length > 0) {
        $("body").append("<div id='mask'></div>");
        $("#mask").height(1800);
        $("#mask").width(1800);
        $("#mask").append("<div id='dialog_header'><a id='close_dialog' href='#'></a></div>");
        $("#mask").append("<div id='dialog'></div>");
        $("#dialog_header a").click(function (e) {
            e.preventDefault();
            dialogClose();
        });
    }

    if ($("#dialog_condition").length > 0)
    {
        $("#dialog_condition").remove();
        $("#mask").append("<div id='dialog_condition'><input id='dphyname' type='text' onkeyup='dialog_Physician(\"" + tagid + "\")'/></div>");
    } else
        $("#mask").append("<div id='dialog_condition'><input id='dphyname' type='text' onkeyup='dialog_Physician(\"" + tagid + "\")'/></div>");

    $("#dialog").html(data);

    $("#dialog_header").css({top: 50});
    $("#dialog").css({top: 50});

    $("#dialog_header").css({left: document.documentElement.clientWidth / 2 - 180});

    $("#dialog").css({left: document.documentElement.clientWidth / 2 - 180});
    $("#dialog_condition").css({left: document.documentElement.clientWidth / 2 - 180});

    $("#dialog_header").css({display: 'block'}).fadeIn(1000);
    $("#dialog").css({display: 'block'}).fadeIn(1000);
    $("#mask").css({display: 'block'}).fadeIn(1000);
    $("#dphyname").focus();
    is_dialog_open = true;
}

function showDialog(data)
{
    if (!$("#mask").length > 0) {
        $("body").append("<div id='mask'></div>");
        $("#mask").height(1800);
        $("#mask").width(1800);
        $("#mask").append("<div id='dialog_header'><a id='close_dialog' href='#'></a></div>");
        $("#mask").append("<div id='dialog'></div>");
        $("#dialog_header a").click(function (e) {
            e.preventDefault();
            dialogClose();
        });
    }

    if ($("#dialog_condition").length > 0)
        $("#dialog_condition").remove();

    $("#dialog").html(data);

    $("#dialog_header").css({top: 50});
    $("#dialog").css({top: 50});

    $("#dialog_header").css({left: document.documentElement.clientWidth / 2 - 180});

    $("#dialog").css({left: document.documentElement.clientWidth / 2 - 180});
    $("#dialog_header").css({display: 'block'}).fadeIn(1000);
    $("#dialog").css({display: 'block'}).fadeIn(1000);
    $("#mask").css({display: 'block'}).fadeIn(1000);
    is_dialog_open = true;
}

function dialog()
{
    $.ajax({
        type: "POST",
        url: "process.php",
        data: {test: 1},
        success: function (data) {
            showDialog(data);
        }
    });
}
function dialogClose()
{
    $("#dialog_header").css({display: 'none'}).fadeOut(2000);
    $("#dialog").css({display: 'none'}).fadeOut(2000);
    $("#mask").css({display: 'none'}).fadeOut(2000);
    is_dialog_open = false;
}
function search()
{
    var form = $("#search_form");
    var inputs = form.children();
    var query = "";

    //for(var i = 0;i<inputs.length;i++){
    //    if(inputs[i].tagName.toLowerCase()=="input" || inputs[i].tagName.toLowerCase()=="select" ||
    //       inputs[i].tagName.toLowerCase()=="textarea" )
    //       if(inputs[i].type.toLowerCase()!="submit" && inputs[i].type.toLowerCase()!="button"){
    //           query += inputs[i].name + "=" + inputs[i].value+"&";
    //alert(query);

    //       }
    //}
    var param = ($("#sname").data("key") != "" && $("#svalue").val() != "") ? "&sname=" + $("#sname").data("key") + "&scond=" + $("#scond").val() + "&svalue=" + $("#svalue").val() : "";
    var param1 = ($("#sand1").val() != "" && $("#sname1").data("key") != "" && $("#svalue1").val() != "" && $("#scond1").val() != "") ? "&sand1=" + $("#sand1").val() + "&sname1=" + $("#sname1").data("key") + "&scond1=" + $("#scond1").val() + "&svalue1=" + $("#svalue1").val() : "";
    var param2 = ($("#sand2").val() != "" && $("#sname2").data("key") != "" && $("#svalue2").val() != "" && $("#scond2").val() != "") ? "&sand2=" + $("#sand2").val() + "&sname2=" + $("#sname2").data("key") + "&scond2=" + $("#scond2").val() + "&svalue2=" + $("#svalue2").val() : "";
    var param3 = ($("#sand3").val() != "" && $("#sname3").data("key") != "" && $("#svalue3").val() != "" && $("#scond3").val() != "") ? "&sand3=" + $("#sand3").val() + "&sname3=" + $("#sname3").data("key") + "&scond3=" + $("#scond3").val() + "&svalue3=" + $("#svalue3").val() : "";

    query = "com_AjaxSearch_identical=1" + param + param1 + param2 + param3;
    //alert(query);
    ajax_Send(query, "result1")
}

function ajax_Send(query, resultDiv)
{
    if (query.trim() != "") {
        $.ajax({
            type: "POST",
            url: "process.php",
            data: (query),
            success: function (data) {
                $("#" + resultDiv).html(data);
            }
        });
    }
}

function openPage(did, mid) {
    var pages = document.getElementById("tab_content").getElementsByTagName("div");
    var linkspan = document.getElementById("tab_page").getElementsByTagName("span");
    var links = document.getElementById("tab_page").getElementsByTagName("li");

    for (i = 0; i <= pages.length - 1; i++) {
        if (pages[i].id == did) {
            pages[i].style.zIndex = 999;
        } else {
            pages[i].style.zIndex = 0;
        }
    }

    for (i = 0; i <= links.length - 1; i++) {
        if (links[i].id == mid) {
            links[i].className = "activated";
            linkspan[i].className = "activated";
        } else {
            links[i].className = "";
            linkspan[i].className = "";
        }
    }


}