let aktuelleProduktId = null;

document.addEventListener('DOMContentLoaded', function () {
    const barcodeInput = document.getElementById('barcodeInput');
    if (barcodeInput) {
        barcodeInput.addEventListener('keyup', function (e) {
            if (e.key === 'Enter') {
                barcodeLookup(barcodeInput.value);
            }
        });
    }
});

function barcodeLookup(code) {
    fetch('/produkt/lookup?barcode=' + encodeURIComponent(code))
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                aktuelleProduktId = data.id;
                document.getElementById('produktName').innerText = data.name;
                document.getElementById('produktQuantitaet').innerText = data.quantitaet;
                document.getElementById('deltaInput').value = 0;

                document.getElementById('scanStep').style.display = 'none';
                document.getElementById('fehlerStep').style.display = 'none';
                document.getElementById('produktStep').style.display = 'block';
            } else {
                document.getElementById('scanStep').style.display = 'none';
                document.getElementById('fehlerStep').style.display = 'block';
            }
        });
}

function mengeAnpassen(richtung) {
    const feld = document.getElementById('deltaInput');
    feld.value = parseInt(feld.value || 0) + richtung;
}

function buchungAbsenden() {
    const delta = document.getElementById('deltaInput').value;

    fetch('/produkt/buchen?id=' + aktuelleProduktId, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: 'delta=' + delta,
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload();
        } else {
            alert('Buchung fehlgeschlagen.');
        }
    });
}
