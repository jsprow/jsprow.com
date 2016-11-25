$(document).ready(function() {
    //##### send add record Ajax request to response.php #########
    $("#formSubmit").click(function(e) {
        e.preventDefault();
        if ($("#contentText").val() === '') {
            $("#contentText").append('<div id="error"><p>Whatsyername?</p></div>');
            return false;
        }
        $("#formSubmit").hide(); //hide submit button
        var contentText = $("#contentText").val();
        var inOut = $("#inOut").val();
        var myData = { //build a post data structure
            content_txt: contentText, 
            in_out: inOut
        };
        jQuery.ajax({
            type: "POST", // HTTP method POST or GET
            url: "response.php", //Where to make Ajax calls
            dataType: "text", // Data type, HTML, json etc.
            data: myData, //Form variables
            success: function(response) {
                $("#responds").append(response);
                $("#contentText").val(''); //empty text field on successful
                $("#formSubmit").show(); //show submit button
            },
            error: function(xhr, ajaxOptions, thrownError) {
                $("#formSubmit").show(); //show submit button
                console.warn(thrownError, xhr.responseText);
            }
        });
    });
    //##### Send delete Ajax request to response.php #########
    $("body").on("click", "#responds .del_button", function(e) {
        e.preventDefault();
        var clickedID = this.id.split('-'); //Split ID string (Split works as PHP explode)
        var DbNumberID = clickedID[1]; //and get number from array
        var myData = 'recordToDelete=' + DbNumberID; //build a post data structure
        $('#item_' + DbNumberID).addClass("sel"); //change background of this element by adding class
        $(this).hide(); //hide currently clicked delete button
        jQuery.ajax({
            type: "POST", // HTTP method POST or GET
            url: "response.php", //Where to make Ajax calls
            dataType: "text", // Data type, HTML, json etc.
            data: myData, //Form variables
            success: function(response) {
                //on success, hide  element user wants to delete.
                $('#item_' + DbNumberID).fadeOut();
            },
            error: function(xhr, ajaxOptions, thrownError) {
                //On error, we alert user
                alert(thrownError);
            }
        });
    });
});