hitungVoucher = (a, b) => {
    var uang
    var diskon
    if (a == "DumbWaysJos") {
        if (b > 50000) {
            diskon = 21.1 * b / 100;
            if (diskon > 20000) {
                diskon = 20000
            }
            uang = b - diskon;
        } else {
            diskon = 0
            uang = b
        }
    } else {
        if (b > 80000) {
            diskon = 0.3 * b
            if (diskon > 40000) {
                diskon = 40000
            }
            uang = b - diskon
        } else {
            diskon = 0
            uang = b
        }
    }

    console.log(`Uang yang harus dibayar: ${uang}`)
    console.log(`Diskon: ${diskon}`)
    console.log(`Kembalian: ${diskon}`)
}

hitungVoucher('DumbWaysJos', 100000)
