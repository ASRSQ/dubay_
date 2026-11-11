const bookingDialog = document.getElementById('booking-dialog');

if (bookingDialog) {
    let previousOverflow;

    document.querySelectorAll('[data-booking-open]').forEach((trigger) => {
        trigger.addEventListener('click', (event) => {
            event.preventDefault();
            previousOverflow = document.body.style.overflow;
            bookingDialog.showModal();
            document.body.style.overflow = 'hidden';
        });
    });

    bookingDialog.addEventListener('close', () => {
        document.body.style.overflow = previousOverflow;
    });

    bookingDialog.addEventListener('click', (event) => {
        const bounds = bookingDialog.getBoundingClientRect();
        if (event.target === bookingDialog && (event.clientX < bounds.left || event.clientX > bounds.right || event.clientY < bounds.top || event.clientY > bounds.bottom)) {
            bookingDialog.close();
        }
    });

    bookingDialog.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => bookingDialog.close());
    });
}

const locationMap = document.getElementById('location-map');

if (locationMap) {
    const address = document.getElementById('location-address');
    const caption = document.getElementById('location-caption');
    const locations = {
        'santa-quiteria': {
            title: locationMap.title,
            map: locationMap.src,
            address: address.innerHTML,
            caption: caption.textContent,
        },
        sobral: {
            title: 'Localização da Dubay Sobral',
            map: `https://www.google.com/maps?q=${encodeURIComponent('Rua Coronel Mont’Alverne, 329 - Centro, Sobral/CE, 62011-210')}&output=embed`,
            address: 'Rua Coronel Mont’Alverne, 329<br>Centro<br>Sobral — CE<br>62011-210',
            caption: 'Rua Coronel Mont’Alverne, 329 — Centro, Sobral/CE — 62011-210.',
        },
    };

    document.querySelectorAll('[data-location]').forEach((button) => {
        button.addEventListener('click', () => {
            const location = locations[button.dataset.location];
            if (button.getAttribute('aria-pressed') === 'true') return;

            locationMap.src = location.map;
            locationMap.title = location.title;
            address.innerHTML = location.address;
            caption.textContent = location.caption;
            document.querySelectorAll('[data-location]').forEach((option) => {
                option.setAttribute('aria-pressed', String(option === button));
            });
        });
    });
}