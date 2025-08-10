function startTime() {
    const today = new Date();

    let d = today.getDate();
    let mo = today.getMonth();
    let y = today.getFullYear();

    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();

    m = checkZero(m);
    s = checkZero(s);
    d = checkZero(d);
    mo = checkZero(mo);

    document.getElementById("time").innerHTML = h + ":" + m + ":" + s;
    document.getElementById("date").innerHTML = d + "/" + mo + "/" + y;
    setTimeout(startTime, 1000);
}

function checkZero(i) {
    if (i < 10) {
        i = "0" + i;
    } // add zero in front of numbers < 10
    return i;
}
