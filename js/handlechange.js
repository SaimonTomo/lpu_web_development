function handleChange() {
            cash_given = parseInt(document.getElementById('cash_given').value)
            quantity = parseInt(document.getElementById('quantity').value)
            price = parseInt(document.getElementById('price').value)
            discount_amount = parseInt(document.getElementById('discount_amount').value)
            discounted_amount = parseInt(document.getElementById('discounted_amount').value)
            price = quantity * price

            total_quantity += quantity
            total_discount_amount += discount_amount
            total_discounted_amount += discounted_amount

            document.getElementById('change').value = cash_given - discounted_amount
            document.getElementById('total_quantity').value = total_quantity
            document.getElementById('total_discount_amount').value = total_discount_amount
            document.getElementById('total_discounted_amount').value = total_discounted_amount
        }