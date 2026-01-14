/* ===============================
   GLOBALS
================================ */
let circleInterval;

/* ===============================
   INIT PAGE SCRIPTS
================================ */
function initPageScripts() {

    /* -------- Slick Sliders -------- */
    $('.gallery-slider').not('.slick-initialized').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.artist-slider').not('.slick-initialized').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.event-slider').not('.slick-initialized').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.testimonials-slider').not('.slick-initialized').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true
    });

    initCountryStateCity();
    initOtpTimer();
    initOtpInputs();
    initMasonry();
}

/* ===============================
   COUNTRY → STATE → CITY
================================ */
function initCountryStateCity() {
    const country = document.getElementById('country');
    const state = document.getElementById('state');
    const city = document.getElementById('city');

    if (!country || country.dataset.loaded) return;
    country.dataset.loaded = 'true';

    fetch('https://countriesnow.space/api/v0.1/countries/positions')
        .then(res => res.json())
        .then(data => {
            data.data.forEach(c => {
                country.add(new Option(c.name, c.name));
            });
        })
        .catch(err => console.error('Country load failed', err));

    country.onchange = () => {
        state.innerHTML = '<option value="">Select State</option>';
        city.innerHTML = '<option value="">Select City</option>';
        state.disabled = city.disabled = true;

        if (!country.value) return;

        fetch('https://countriesnow.space/api/v0.1/countries/states', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    country: country.value
                })
            })
            .then(res => res.json())
            .then(data => {
                data.data.states.forEach(s => {
                    state.add(new Option(s.name, s.name));
                });
                state.disabled = false;
            });
    };

    state.onchange = () => {
        city.innerHTML = '<option value="">Select City</option>';
        city.disabled = true;

        fetch('https://countriesnow.space/api/v0.1/countries/state/cities', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    country: country.value,
                    state: state.value
                })
            })
            .then(res => res.json())
            .then(data => {
                data.data.forEach(c => {
                    city.add(new Option(c, c));
                });
                city.disabled = false;
            });
    };
}

/* ===============================
   OTP TIMER (MODAL)
================================ */
function initOtpTimer() {
    const modal = document.getElementById('oneTimePassowrdModal');
    if (!modal || modal.dataset.bound) return;
    modal.dataset.bound = 'true';

    modal.addEventListener('shown.bs.modal', () => {
        const circle = document.getElementById('circleTimer');
        const text = circle.querySelector('span');

        clearInterval(circleInterval);
        let time = 0;
        const duration = 10;

        circle.style.setProperty('--progress', '0deg');

        circleInterval = setInterval(() => {
            time += 0.1;
            const deg = (time / duration) * 360;
            circle.style.setProperty('--progress', `${deg}deg`);
            text.textContent = `${Math.ceil(time)}s`;

            if (time >= duration) clearInterval(circleInterval);
        }, 100);
    });

    modal.addEventListener('hidden.bs.modal', () => {
        clearInterval(circleInterval);
    });
}

/* ===============================
   OTP INPUT AUTO MOVE
================================ */
function initOtpInputs() {
    const inputs = document.querySelectorAll('.circle-input input');
    inputs.forEach((input, i) => {
        input.oninput = () => {
            input.value = input.value.replace(/\D/g, '').slice(0, 1);
            if (input.value && inputs[i + 1]) inputs[i + 1].focus();
        };
        input.onkeydown = e => {
            if (e.key === 'Backspace' && !input.value && inputs[i - 1]) {
                inputs[i - 1].focus();
            }
        };
    });
}

/* ===============================
   MASONRY
================================ */
function initMasonry() {
    const grid = document.querySelector('.masonry-grid');
    if (!grid) return;

    imagesLoaded(grid, () => {
        new Masonry(grid, {
            itemSelector: '.masonry-item',
            percentPosition: true,
            gutter: 22
        });
    });
}

/* ===============================
   SIDEBAR
================================ */
$(document).on('click', 'a.nav-toggle-button', e => {
    e.preventDefault();
    $('.sidebar').addClass('show-sidebar');
});

$(document).on('click', '.sidebar-close a', e => {
    e.preventDefault();
    $('.sidebar').removeClass('show-sidebar');
});

/* ===============================
   BARBA
================================ */
barba.init({
    transitions: [{
        leave({
            current
        }) {
            return new Promise(resolve => {
                current.container.classList.add('fade-out');
                setTimeout(resolve, 400);
            });
        },
        enter({
            next
        }) {
            next.container.classList.add('fade-in');
        }
    }]
});

barba.hooks.afterEnter(() => {
    initPageScripts();
    $('.sidebar').removeClass('show-sidebar');
});

/* ===============================
   INITIAL LOAD
================================ */
document.addEventListener('DOMContentLoaded', initPageScripts);