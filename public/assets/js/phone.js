function country_code(){
    var val = document.getElementById("country").value;
    if (val === "select_country"){
        document.getElementById("output").value = "";
    }
    else if (val === "indonesia"){
        document.getElementById("output").value = "+62";
    }
    else if (val === "us"){
        document.getElementById("output").value = "+1";
    }
    else if (val === "uk"){
        document.getElementById("output").value = "+44";
    }
    else if (val === "brazil"){
        document.getElementById("output").value = "+55";
    }
    else if (val === "spain"){
        document.getElementById("output").value = "+34";
    }
    else if (val === "jepang"){
        document.getElementById("output").value = "+81";
    }
}