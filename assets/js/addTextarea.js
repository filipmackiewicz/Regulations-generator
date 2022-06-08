const guarantee = document.getElementById("guarantee_text");
const complaint = document.getElementById("complaint_text");
const payment_text = document.getElementById("payment_text");
const special_transport = document.getElementById("special_transport");
const delivery_text = document.getElementById("delivery_text");
const additional_div_complaint = document.querySelector('.additional-textarea-complaint');
const additional_div_guarantee = document.querySelector('.additional-textarea-guarantee');
const additional_div_payment = document.querySelector('.additional-textarea-payment');
const additional_textarea_special_transport = document.querySelector('.additional-textarea-special-transport');
const additional_textarea_delivery = document.querySelector('.additional-textarea-delivery');
const additional_textarea_selfpickup = document.querySelector('.additional-textarea-selfpickup');
const self_pickup = document.getElementById("self_pickup");




guarantee.addEventListener("click", function addTextareaGuarantee() {
    if (guarantee.checked == true) {
        additional_div_guarantee.innerHTML = (`<textarea name="guarantee-textarea" class="textarea" id="guarantee-textarea" required></textarea>`);
    } else {
        additional_div_guarantee.innerHTML = "";
    }
});
complaint.addEventListener("click", function addTextareaComplaint() {
    if (complaint.checked == true) {
        additional_div_complaint.innerHTML = (`<textarea name="complaint-textarea" class="textarea" id="complaint-textarea" required></textarea>`);
    } else {
        additional_div_complaint.innerHTML = "";
    }
});

payment_text.addEventListener("click", function addTextareaPayment() {
    if (payment_text.checked == true) {
        additional_div_payment.innerHTML = (`<textarea name="payment-textarea" class="textarea" id="payment-textarea" required></textarea>`);
    } else {
        additional_div_payment.innerHTML = "";
    }
})

special_transport.addEventListener("click", function addTextareaSpecialtransport() {
    if (special_transport.checked == true) {
        additional_textarea_special_transport.innerHTML = (`<textarea name="special-transport-textarea" class="textarea" id="special-transport-textarea" required></textarea>`);
    } else {
        additional_textarea_special_transport.innerHTML = "";
    }
});


delivery_text.addEventListener("click", function addTextareaDelivery() {
    if (delivery_text.checked == true) {
        additional_textarea_delivery.innerHTML = (`<textarea name="delivery-textarea" class="textarea" id="delivery-textarea" required></textarea>`);
    } else {
        additional_textarea_delivery.innerHTML = "";
    }
});

self_pickup.addEventListener("click", function addTextareaSelfPickup() {
    if (self_pickup.checked == true) {
        additional_textarea_selfpickup.innerHTML = (`<label>Podaj adres </label><textarea name="self_pickup_adress" class="textarea" id="self_pickup_adress" required></textarea>
        <label>Podaj godziny w formacie 8:00-16:00 </label><input type="text" name="self_pickup_hours" id="self_pickup_hours" required/>
        <label>Od kiedy do kiedy np: Poniedziałek - Piątek</label><input type="text" name="self_pickup_days" id="self_pickup_days" required/>`);
    } else {
        additional_textarea_selfpickup.innerHTML = "";
    }
});






