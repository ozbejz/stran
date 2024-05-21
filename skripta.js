function preglej(e){
    e.preventDefault();
    let imePriimek = $("#imePriimek");
    let email = $("#email");
    let tel = $("#tel");
    let sporocilo = $("#sporocilo");

    if(imePriimek.val() != "" && email.val() != "" && tel.val() != "" && sporocilo.val() != ""){
        $("#uspeh").text("forma izpolnjena");
        $("#uspeh").addClass("p-1");
    }

    imePriimek.val("");
    email.val("");
    tel.val("");
    sporocilo.val("");
}

function dodajOpravilo(e){
    e.preventDefault();

    let opravilo = $("#opravilo");
    
    if(opravilo.val() != ""){
        $("#opravila").append("<div><input type='checkbox' id="+ opravilo.val() +" name="+ opravilo.val() +" value="+ opravilo.val() +
            " onclick="+'spremembaOpravila(this)'+"><label for="+ opravilo.val() +"> "+ opravilo.val() +
            "<button onclick='odstraniOpravilo(this)' id="+ opravilo.val() +" type='button' class='close' aria-label='Close'> <span aria-hidden='true'>&times;</span></button></label><br></div>");
        opravilo.val("");
        $("#neopravljeni").text(parseInt($("#neopravljeni").text())+1);
    }
}

function spremembaOpravila(o){
    if(o.checked){
        let data = $("#opravljeni").text();
        $("#opravljeni").text(parseInt(data)+1);
        $("#neopravljeni").text(parseInt($("#neopravljeni").text())-1);
    }
    else{
        let vnos = window.confirm("Obstoječa naloga je bila že potrjena in bo ponovno aktivna za novo potrjevanje");

        if(vnos){
            let data = $("#neopravljeni").text();
            $("#neopravljeni").text(parseInt(data)+1);
            $("#opravljeni").text(parseInt($("#opravljeni").text())-1);
        }
    }
}

function odstraniOpravilo(b){
    let id = b.id;

    let opravilo = $("#" + id)[0];

    if(opravilo.checked){
        $("#opravljeni").text(parseInt($("#opravljeni").text())-1);
    }
    else{
        $("#neopravljeni").text(parseInt($("#neopravljeni").text())-1);
    }

    b.parentElement.parentElement.remove();
    
}