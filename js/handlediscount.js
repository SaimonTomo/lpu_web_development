        total_quantity = 0
        total_discount_amount = 0
        total_discounted_amount = 0

        function handleDiscounts(current_discount) {
            quantity = parseInt(document.getElementById('quantity').value)
            price = parseInt(document.getElementById('price').value)
            price = quantity * price
            document.getElementById('discount_amount').value = current_discount * price
            document.getElementById('discounted_amount').value = price - (current_discount * price)
        }