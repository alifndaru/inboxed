function getFileName1(input) {
    var output = console.log(input.files[0].name) // With extension
    var hasil1 = document.getElementById("hasil1");
    hasil1.innerHTML = input.files[0].name;
    if (input.files[0].name = "") {
        document.getElementById('logo-upload-1').classList.remove('d-none');
        document.getElementById('text-upload-1').classList.remove('d-none');
    } else {
        document.getElementById('logo-upload-1').classList.add('d-none');
        document.getElementById('text-upload-1').classList.add('d-none');
    }
}

function getFileName2(input) {
    var output = console.log(input.files[0].name) // With extension
    var hasil2 = document.getElementById("hasil2");
    hasil2.innerHTML = input.files[0].name;
    if (input.files[0].name = "") {
        document.getElementById('logo-upload-2').classList.remove('d-none');
        document.getElementById('text-upload-2').classList.remove('d-none');
    } else {
        document.getElementById('logo-upload-2').classList.add('d-none');
        document.getElementById('text-upload-2').classList.add('d-none');
    }
}

function getFileName3(input) {
    var output = console.log(input.files[0].name) // With extension
    var hasil3 = document.getElementById("hasil3");
    hasil3.innerHTML = input.files[0].name;
    if (input.files[0].name = "") {
        document.getElementById('logo-upload-3').classList.remove('d-none');
        document.getElementById('text-upload-3').classList.remove('d-none');
    } else {
        document.getElementById('logo-upload-3').classList.add('d-none');
        document.getElementById('text-upload-3').classList.add('d-none');
    }
}

function getFileName4(input) {
    var output = console.log(input.files[0].name) // With extension
    var hasil4 = document.getElementById("hasil4");
    hasil4.innerHTML = input.files[0].name;
    if (input.files[0].name = "") {
        document.getElementById('logo-upload-4').classList.remove('d-none');
        document.getElementById('text-upload-4').classList.remove('d-none');
    } else {
        document.getElementById('logo-upload-4').classList.add('d-none');
        document.getElementById('text-upload-4').classList.add('d-none');
    }
}

function getFileNameS2(input) {
    var output = console.log(input.files[0].name) // With extension
    var hasilS2 = document.getElementById("hasilS2");
    hasilS2.innerHTML = input.files[0].name;
    if (input.files[0].name = "") {
        document.getElementById('logo-upload-S2').classList.remove('d-none');
        document.getElementById('text-upload-S2').classList.remove('d-none');
    } else {
        document.getElementById('logo-upload-S2').classList.add('d-none');
        document.getElementById('text-upload-S2').classList.add('d-none');
    }
}

// function enableBrand(answer) {
//     var cons1 = console.log(answer.value);
//     // document.write(answer.value)
//     localStorage.setItem('asd', answer.value);
// }

let nam1 = localStorage.getItem('Upload-S2');
if (nam1 == "1" || nam1 == "2") {
    document.getElementById('u-S2').classList.remove('d-none');
    // document.getElementById('list-bunga').classList.remove('none');
} else {
    document.getElementById('u-S2').classList.add('d-none');
    // document.getElementById('list-bunga').classList.add('none');
}