$(function(){
    window.poopForm =function(){
        $.ajax({
            type : 'POST',
            async: false,
            url  : 'ajax.php',
            data : $('#nameForm').serialize(),
            dataType : 'json',
            success : function(data){
                console.log(data);
                error: function(){alert('Error!')}      
            }); 
            return false;
        }
    })
};