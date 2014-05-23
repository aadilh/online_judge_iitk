$(document).ready(function() {
	alert("this works!");

	$("#submit").click(function(event){ 
        event.preventDefault();
        $.ajax({
            type:"post",
            url:"page.php"
            data:$("#form").serialize(),
            success:function(response){
                alert(response);
            }
        });
    });
});
</script>
});