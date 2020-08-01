faktorial = (a) => {
    var output = 1
    for (i = a; i > 0; i--) {
        output *= i;
    }
    return output
}

kombinasi = (a, b) => {
    return faktorial(a) / (faktorial(b) * faktorial(a - b))
}



pascal_function = (a) => {

    for (var i = 0; i <= a; i++) {
        var b = "";
        for (var j = 0; j < i + 1; j++) {
            b += String(kombinasi(i, j))
            b += " ";
        }
        console.log(b);

    }

}

pascal_function(10);


