    function filterProducts() {
        var input, filter, cards, card, productName, i, txtValue;
        input = document.getElementById('product-search');
        filter = input.value.toUpperCase();
        cards = document.querySelectorAll('.col-md-4');

        for (i = 0; i < cards.length; i++) {
            card = cards[i];
            productName = card.querySelector('.card-title').textContent || card.querySelector('.card-title').innerText;

            txtValue = productName.toUpperCase();
            if (txtValue.indexOf(filter) > -1) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        }
    }

    document.getElementById('product-search').addEventListener('input', filterProducts);

