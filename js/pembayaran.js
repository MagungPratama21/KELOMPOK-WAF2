document.addEventListener('DOMContentLoaded', function() {
    const prices = {
        productA: 1000000000,
    };

    const productInputs = document.querySelectorAll('input[type="number"]');
    const totalPriceElement = document.getElementById('total-price');
    const totalPriceInput = document.getElementById('totalPrice');

    function updateTotalPrice() {
        let total = 0;
        productInputs.forEach(input => {
            total += prices[input.name] * parseInt(input.value);
        });
        totalPriceElement.textContent = `Rp ${total.toLocaleString('id-ID')}`;
        totalPriceInput.value = total;
    }

    document.querySelectorAll('.btn-plus').forEach(button => {
        button.addEventListener('click', function() {
            const input = this.previousElementSibling;
            input.value = parseInt(input.value) + 1;
            updateTotalPrice();
        });
    });

    document.querySelectorAll('.btn-minus').forEach(button => {
        button.addEventListener('click', function() {
            const input = this.nextElementSibling;
            if (parseInt(input.value) > 0) {
                input.value = parseInt(input.value) - 1;
                updateTotalPrice();
            }
        });
    });

    document.getElementById('payment-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;
        const address = document.getElementById('address').value;
        const shipping = document.getElementById('shipping').value;
        const paymentMethod = document.getElementById('payment-method').value;
        const productDetails = Array.from(productInputs).map(input => ({
            name: input.name,
            quantity: input.value
        })).filter(product => product.quantity > 0);

        const paymentDetailsElement = document.getElementById('payment-details');
        paymentDetailsElement.innerHTML = `
            <p><strong>Nama Penerima:</strong> ${name}</p>
            <p><strong>Nomor Telepon:</strong> ${phone}</p>
            <p><strong>Alamat Pengiriman:</strong> ${address}</p>
            <p><strong>Jasa Kirim:</strong> ${shipping}</p>
            <p><strong>Metode Pembayaran:</strong> ${paymentMethod.toUpperCase()}</p>
            <p><strong>Daftar Produk:</strong></p>
            <ul>
                ${productDetails.map(product => `<li>${product.name}: ${product.quantity}</li>`).join('')}
            </ul>
            <p><strong>Total Pembayaran:</strong> ${totalPriceElement.textContent}</p>
        `;

        document.getElementById('payment-form-container').style.display = 'none';
        document.getElementById('success-page').style.display = 'block';
    });
});
