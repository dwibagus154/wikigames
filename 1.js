
hilang = (a) => {
    var output = "";
    for (i = 0; i < a.length; i++) {
        var c = false;
        for (j = 0; j < output.length + 1; j++) {
            if (a[i] == output[j]) {
                c = true;
            }
        }
        if (c == false) {
            output += a[i];
        }

    }
    console.log(output);
}

hilang("alagcgcdodol");