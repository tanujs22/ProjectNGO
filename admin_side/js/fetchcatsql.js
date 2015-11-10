$(document).ready(function () {
    $.getJSON("fetch_cat.php ", success = function (data) {
        var options = "";
        for (var i = 0; i < data.length; i++) {
            options += "<option value='" + data[i].toLowerCase() + "'>" + data[i] + "</option>";
        }
        
        $("#pt_cat").append(options);
    });
});