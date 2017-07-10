$(document).ready(function() {           
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });   
    
    $('.slide').textSlider({
        timeout: 5000,
        slideTime: 850,
        loop: 0
    });
    
    var imgBtnSel = $('#imgBtnSel');    
    var imgNavSel = $('#imgNavSel');    
    var spanNavSel = $('#lanNavSel');
    var spanBtnSel = $('#lanBtnSel');
    
    $( ".language1" ).on( "click", function( event ) {
        var currentId = $(this).attr('id');
        
        if(currentId == "navEsp") {
            spanNavSel.text("ESP");
             $('body').load( "/es" );
        } else if (currentId == "navEng") {
            spanNavSel.text("ENG");
            $('body').load( "/" );
        }
        
        if(currentId == "btnEsp") {
            spanBtnSel.text("ESP");
        } else if (currentId == "btnEng") {
            spanBtnSel.text("ENG");
        }
        
    });    
    $("#contactForm").submit(function(event) {    
        event.preventDefault();
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: $(this).serialize(),
            success : function( data ) {
                $('#contactForm')[0].reset();
                $("#resultado").html(data);
            },
            error   : function( xhr, err ) {
                alert('Error'+err+xhr);  
                console.log(err);                
            }
        });    
        return false;
    });
    
    $('#skills').DataTable({
        "order": [[0,'asc']],
        "language":{
            "sProcessing": "Procesando...",
            "sSearch": "Buscar",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(Filtrado de un total de _MAX_ registros)",
            "sEmptyTable": "No hay registros para mostrar",
            "oPaginate":{
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            }
        },
        buttons: ['excel','pdf','print']
    });
    
    $('.open-modal').click(function(){
        var id = $(this).val();
        var url = "/edit/skill";
        $.get(url + '/' + id, function (data) {
            //success data
            $(".modal-body").html(data);            
            $('#myModal').modal('show');
        });
    });
    
    $('.open-modal-create').click(function(){
        var id = $(this).val();
        var url = "/create/skill";
        $.get(url + '/', function (data) {
            //success data
            $(".modal-body").html(data);            
            $('#myModal').modal('show');
        });
    });
    
    $('.open-modal-create-exp').click(function(){
        var id = $(this).val();
        var url = "/create/experience";
        $.get(url + '/', function (data) {
            //success data
            $(".modal-body").html(data);            
            $('#myModal').modal('show');
        });
    });
    
    $('.open-modal-edit-exp').click(function(){
        var id = $(this).val();
        var url = "/edit/experience";
        $.get(url + '/' + id, function (data) {
            //success data
            $(".modal-body").html(data);            
            $('#myModal').modal('show');
        });
    });     
    
    $('.open-modal-create-portfolio').click(function(){
        var id = $(this).val();
        var url = "/create/portfolio";
        $.get(url + '/' + id, function (data) {
            //success data
            $(".modal-body").html(data);            
            $('#myModal').modal('show');
        });
    }); 
    
    $('.open-modal-edit-portfolio').click(function(){
        var id = $(this).val();
        var url = "/edit/portfolio";
        $.get(url + '/' + id, function (data) {
            //success data
            $(".modal-body").html(data);            
            $('#myModal').modal('show');
        });
    }); 
    
    $('.open-modal-create-language').click(function(){
        var id = $(this).val();
        var url = "/create/language";
        $.get(url + '/' + id, function (data) {
            //success data
            $(".modal-body").html(data);            
            $('#myModal').modal('show');
        });
    });
    
    $('.open-modal-edit-language').click(function(){
        var id = $(this).val();
        var url = "/edit/language";
        $.get(url + '/' + id, function (data) {
            //success data
            $(".modal-body").html(data);            
            $('#myModal').modal('show');
        });
    }); 
    
});