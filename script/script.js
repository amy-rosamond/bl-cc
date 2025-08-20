const pageOnload = (page) => {
    const about = document.getElementById('about');
    const contact = document.getElementById('contact');
    const index = document.getElementById('index');
    const projects = document.getElementById('projects');
    const services = document.getElementById('services');
    const reviews = document.getElementById('reviews');

    about.classList.remove('active');
    index.classList.remove('active');
    contact.classList.remove('active');
    projects.classList.remove('active');
    services.classList.remove('active');
    reviews.classList.remove('active');

    switch (page) {
        case 'index':
            index.classList.add('active');
            break;
        case 'about':
            about.classList.add('active');
            break;
        case 'contact':
            contact.classList.add('active');
            break;
        case 'projects':
            projects.classList.add('active');
            break;
        case 'services':
            services.classList.add('active');
            break;
        case 'reviews':
            reviews.classList.add('active');
            break;
    }
}

// window.onload = function () { 

// }

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

// LENIS SMOOTH SCROLL
// Initialize Lenis
const lenis = new Lenis({
    autoRaf: true,
    // Value between 0 and 1
    // Default value: 0.1
    // The lower the value, the smoother the scroll
    lerp: 0.05,
    // Default value: 1
    // The higher the value, the faster the scrolling
    wheelMultiplier: 2,
    // allows href clicks while scrolling
    anchors: true

});

// Listen for the scroll event and log the event data
// lenis.on('scroll', (e) => {
//     console.log(e);
// });

function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

// $("[data-lenis-start]").on("click", function () {
//     lenis.start();
// });

// $("[data-lenis-stop]").on("click", function () {
//     lenis.stop();
// });

// $("[data-lenis-toggle]").on("click", function () {
//     $(this).toggleClass("stop-scroll");
//     if ($(this).hasClass("stop-scroll")) {
//         lenis.stop();
//     } else {
//         lenis.start();
//     }
// });
