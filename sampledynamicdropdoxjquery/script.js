$(document).ready(function(){
	
	
	
$('#school').on('change',function(){
        var school_id = $(this).val();
        if(school_id){
            $.ajax({
                type:'POST',
                url:'ajax.php',
                data:'school_id='+school_id,
                success:function(html){
                    $('#grade').html(html);
                 
                }
            }); 
        }else{
            $('#school').html('<option value="">Select father first</option>');
            $('#grade').html('<option value="">Select child first</option>'); 
        }
    });
	
	
	
	
	
	
    $('#father').on('change',function(){
        var father_id = $(this).val();
        if(father_id){
            $.ajax({
                type:'POST',
                url:'ajax.php',
                data:'father_id='+father_id,
                success:function(html){
                    $('#child').html(html);
                    $('#school').html('<option value="">Select child first</option>'); 
                }
            }); 
        }else{
            $('#child').html('<option value="">Select father first</option>');
            $('#school').html('<option value="">Select child first</option>'); 
        }
    });
    
	
	
    $('#child').on('change',function(){
        var child_id = $(this).val();
        if(child_id){
            $.ajax({
                type:'POST',
                url:'ajax.php',
                data:'child_id='+child_id,
                success:function(html){
                    $('#school').html(html);
                }
            }); 
        }else{
            $('#school').html('<option value="">Select child first</option>'); 
        }
    });
	
	
});