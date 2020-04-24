$(document).ready(function (){
    
    getTD_Done();

    getTD_Finish();

    Create();


})


function getTD_Done(){
    $('.form').remove();
    $('.td').remove();
    $.ajax({
        url: "task.php",
        method: "POST",
        data : {'function' : 'getTD_done'},
        datatype: "json",
    
        success: function (datatype) {
    
           var data = JSON.parse(datatype);
    
            for (i = 0; i < data.length; i++) {
                $('#todo').append("<div class='td' id='to" + i +"'>");
                $.each(data[i], function (key,value) {
                    if(key !== "id")
                    {
                        $('#to' + i + "").append("<b>" + key + "</b>" + ":" + value + '</br>');
                    } 
                    else if(key === "id")
                    {
                        $('#to' + i + "").append("<button id='sup" + value + "'>Supprimer</button></br></div>");
                        $('#to' + i + "").append("<button id='fin" + value + "'>C'est fait!</button></br></div>");
    
                        suppTD(value);
    
                        doneTD(value);
                    }
    
                })
    
                }
            }
            })
                    
        }

        

    function doneTD(value){
        $('#fin' + value + "").click(function(){
    
            $.ajax({
                url: "task.php",
                method : "POST",
                data : {'function' : 'done', 'id_task' : value},
                datatype : "json",
            })
            getTD_Done();
            getTD_Finish();
    
        })
    }

    function suppTD(value){
        $('#sup' + value + "").click(function(){
    
            $.ajax({
                url: "task.php",
                method : "POST",
                data : {'function' : 'supp', 'id_task' : value},
                datatype : "json",
            })
            getTD_Done();
    
        })
    }

    function getTD_Finish(){
        $('.tf').remove();
        $.ajax({
            url: "task.php",
            method: "POST",
            data : {'function' : 'getTD_finish'},
            datatype: "json",
        
            success: function (datatype) {

            var data = JSON.parse(datatype);

        
                for (i = 0; i < data.length; i++) {
                    $('#done').append("<div class='tf' id='fi" + i +"'>");
                    $.each(data[i], function (key,value) {
                        if(key !== "id")
                        {
                            $('#fi' + i + "").append("<b>" + key + "</b>" + ":" + value + '</br>');
                        } 
        
                    })
        
                    }
            }
        
            }) 
        }

    function Create(){
        $('#create').click(function(){
            $('body').append("<div class='form'>");
            $('.form').append('<label for="titre">Titre</label>');
            $('.form').append('<input type="text" name = "titre" id = "titre" required > ');
            $('.form').append('<label for="description">Description</label>');
            $('.form').append('<textarea row=5 name = "description" id = "description" required>');
            $('.form').append('<label for="deadline">Deadline</label>');
            $('.form').append('<input type="date" name = "deadline" id = "deadline" >');
            $('.form').append('<button id="cre">Créer une nouvelle tâche</button>');
            $('body').append("</div>");

            create_task();

        })
    }
    function create_task()
    {
    $('#cre').click(function(){

        console.log('coucou');
        var titre = document.getElementById("titre").value;
        var description = document.getElementById("description").value;
        var deadline = document.getElementById("deadline").value;

        $.ajax({
            url: "task.php",
            method : "POST",
            data : {'function' : 'add', 'titre' : titre, 'description' : description, 'deadline' : deadline},
            datatype : "json",
        })
        getTD_Done();
    })
}