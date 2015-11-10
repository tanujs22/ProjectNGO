$(document).ready(function () {
    $.getJSON("fetch_ngoid.php ", success = function (data) {
        var options = "";
        for (var i = 0; i < data.length; i++) {
            options += "<option value='" + data[i].toLowerCase() + "'>" + data[i] + "</option>";
        }
        
        $("#ngo_id").append(options);
    });
});