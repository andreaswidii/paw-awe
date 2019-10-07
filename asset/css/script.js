document.getElementById('pupup').addEventListener('click',function(){
    document.querySelector('.popup').style.display = "flex";
});
document.getElementById('tidak').addEventListener('click', function(){
    document.querySelector('.popup').style.display = "none";
})
/*
function ValidationUsername() {

    var Pesan = "";
    var valUsername =/^[a-zA-Z0-9_]{5,}[a-zA-Z]+[0-9]*$/;
    var tempUsername = document.getElementById("username");


    if (document.getElementById("username").value === "") {
        Pesan += ("\n*Username harus diisi !");
    }
    else if (!valUsername.test(tempUsername.value)) {
        Pesan +=("\n*Username minimal 5 karakter, karakter khusus hanya '_' !");
    }


    if (Pesan !== "") {
        alert("Peringatan:\n" + Pesan);
        return false;
    }
    else {
        return true;
    }
} */