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
        arrows: true,
        autoplay: true,
        autoplaySpeed: 6000,
        pauseOnHover: true,
        pauseOnFocus: true,
        responsive: [
            { breakpoint: 1024, settings: { slidesToShow: 2 } },
            { breakpoint: 600, settings: { slidesToShow: 1 } }
        ]
    });

    // Pause for 15 seconds on hover
    $('.gallery-slider').on('mouseenter', function() {
        $(this).slick('slickPause');
        setTimeout(() => {
            $(this).slick('slickPlay');
        }, 15000); // 15 seconds
    });

    // Pause for 15 seconds when clicking Slick arrows
    $('.gallery-slider').on('click', '.slick-prev, .slick-next', function() {
        let slider = $(this).closest('.gallery-slider');
        slider.slick('slickPause');
        setTimeout(() => {
            slider.slick('slickPlay');
        }, 15000); // 15 seconds
    });

    $('.artist-slider').not('.slick-initialized').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: true,            // Show arrows
        autoplay: true,
        autoplaySpeed: 6000,      // Rotate every 6 seconds
        pauseOnHover: true,
        pauseOnFocus: true,
        responsive: [
            { breakpoint: 1024, settings: { slidesToShow: 2 } },
            { breakpoint: 600, settings: { slidesToShow: 1 } }
        ]
    });

    // Pause for 15 seconds on hover
    $('.artist-slider').on('mouseenter', function() {
        $(this).slick('slickPause');
        setTimeout(() => {
            $(this).slick('slickPlay');
        }, 15000);
    });

    // Pause for 15 seconds on arrow click
    $('.artist-slider').on('click', '.slick-prev, .slick-next', function() {
        let slider = $(this).closest('.artist-slider');
        slider.slick('slickPause');
        setTimeout(() => {
            slider.slick('slickPlay');
        }, 15000);
    });

    $('.event-slider').not('.slick-initialized').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,            // Show arrows
        autoplay: true,
        autoplaySpeed: 6000,      // Rotate every 6 seconds
        pauseOnHover: true,
        pauseOnFocus: true,
        responsive: [
            { breakpoint: 1024, settings: { slidesToShow: 2 } },
            { breakpoint: 600, settings: { slidesToShow: 1 } }
        ]
    });

    // Pause 15 seconds on arrow click
    $('.event-slider').on('click', '.slick-prev, .slick-next', function() {
        let slider = $(this).closest('.event-slider');
        slider.slick('slickPause');
        setTimeout(() => {
            slider.slick('slickPlay');
        }, 15000);
    });

    // Make each event clickable (entire card)
    $('.event-box a').css('display', 'block').css('text-decoration', 'none');

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
    initProfileUpload();
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
   PROFILE IMAGE UPLOAD + REMOVE
================================ */
function initProfileUpload() {
    const input = document.getElementById('profileInput');
    const preview = document.getElementById('profilePreview');
    const placeholder = document.querySelector('.profile-circle .placeholder');
    const removeBtn = document.querySelector('.remove-image');
    const circle = document.querySelector('.profile-circle');

    if (!input || input.dataset.bound) return;
    input.dataset.bound = 'true';

    // Upload image
    input.addEventListener('change', () => {
        const file = input.files[0];
        if (!file) return;

        if (!file.type.startsWith('image/')) {
            alert('Please select an image file');
            input.value = '';
            return;
        }

        const reader = new FileReader();
        reader.onload = e => {
            preview.src = e.target.result;
            preview.style.display = 'block';
            placeholder.style.display = 'none';
            circle.classList.add('has-image');
            removeBtn.style.display = 'flex';
        };
        reader.readAsDataURL(file);
    });

    // Remove image
    removeBtn.addEventListener('click', e => {
        e.preventDefault();
        e.stopPropagation();

        preview.src = '';
        preview.style.display = 'none';
        placeholder.style.display = 'flex';
        input.value = '';
        circle.classList.remove('has-image');
        removeBtn.style.display = 'none';
    });
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

        const duration = 10;
        let timeLeft = duration;

        // Full border at start
        circle.style.setProperty('--progress', '360deg');
        text.textContent = `${timeLeft}s`;

        circleInterval = setInterval(() => {
            timeLeft -= 0.1;
            if (timeLeft < 0) timeLeft = 0;

            const deg = (timeLeft / duration) * 360;
            circle.style.setProperty('--progress', `${deg}deg`);
            text.textContent = `${Math.ceil(timeLeft)}s`;

            if (timeLeft <= 0) {
                clearInterval(circleInterval);
                // OPTIONAL: enable resend button here
                // document.querySelector('.resend-btn')?.classList.remove('disabled');
            }
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
// function initMasonry() {
//     const grid = document.querySelector('.masonry-grid');
//     if (!grid) return;

//     imagesLoaded(grid, () => {
//         new Masonry(grid, {
//             itemSelector: '.masonry-item',
//             percentPosition: true,
//             gutter: 22
//         });
//     });
// }

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

$(document).on('click', e => {
    const $sidebar = $('.sidebar');
    // Check if sidebar is open and click target is not inside sidebar or toggle button
    if ($sidebar.hasClass('show-sidebar') && 
        !$(e.target).closest('.sidebar').length && 
        !$(e.target).closest('a.nav-toggle-button').length) {
        $sidebar.removeClass('show-sidebar');
    }
});

/* ===============================
   BARBA
================================ */

/* ===============================
   INITIAL LOAD
================================ */
document.addEventListener('DOMContentLoaded', initPageScripts);


$(window).on('scroll', function() {
    if ($(window).scrollTop() > 50) { // scroll threshold
        $('header').addClass('fixed-header');
    } else {
        $('header').removeClass('fixed-header');
    }
});