<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Make Payment</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://js.stripe.com/v3/"></script>

    <style>
        *{box-sizing:border-box;font-family:Arial, sans-serif}
        body{background:#f6f9fc;padding:40px;display:flex;justify-content:center}
        .card{background:#fff;border-radius:12px;box-shadow:0 0 15px rgba(0,0,0,.08);padding:30px;width:460px}
        h2{margin-top:0;text-align:center}
        .summary{background:#fafafa;border:1px solid #e2e8f0;border-radius:8px;padding:15px;margin-bottom:25px}
        .row{display:flex;justify-content:space-between;margin-bottom:6px;font-size:14px}
        .total{font-weight:bold;font-size:16px}
        #card-element{border:1px solid #ccd0d2;border-radius:6px;padding:12px;margin-top:10px}
        input[type=text]{width:100%;padding:10px;border:1px solid #ccd0d2;border-radius:6px;margin-top:10px}
        button{margin-top:20px;width:100%;padding:12px;background:#6772e5;color:#fff;border:none;border-radius:6px;font-size:16px;cursor:pointer}
        button:hover{background:#5469d4}
        #payment-message{margin-top:15px;font-weight:bold}
    </style>
</head>
<body>

<div class="card">
    <h2>Make Payment</h2>

    {{-- Order Summary --}}
    <div class="summary">
        <div class="row"><span>Subtotal</span><span>{{ number_format($subtotal/100,2) }} $</span></div>
        <div class="row"><span>Shipping</span><span>{{ number_format($shipping/100,2) }} $</span></div>
        <div class="row"><span>Coupon (Code: {{ $couponCode }})</span><span>-{{ number_format($couponValue/100,2) }} $</span></div>
        <div class="row total"><span>Total</span>
            <span>{{ number_format(($subtotal + $shipping - $couponValue)/100,2) }} $</span>
        </div>
    </div>

    <form id="payment-form">
        {{-- المبلغ النهائي (بالسنت) --}}
        <input type="hidden" id="amount" value="{{ $subtotal + $shipping - $couponValue }}">
        {{-- اسم صاحب البطاقة --}}
        <label>Card Holder</label>
        <input type="text" id="card-holder-name" placeholder="A">

        {{-- Stripe Elements --}}
        <label style="margin-top:15px;">Card Details</label>
        <div id="card-element"></div>

        {{-- ZIP / Postal --}}
        <label style="margin-top:15px;">ZIP / Postal Code</label>
        <input type="text" id="zip" placeholder="12345">

        <button id="submit">Submit</button>
        <div id="payment-message"></div>
    </form>
</div>

<script>
    const stripe = Stripe("pk_test_51RQgBB2fjEQ4tzZwGVCjmJYIuBDH1RBhKJifUkveIDeaSIVSCIjnAXAwIkRCCIcfoIYPdCkiOQq9NC8B06rfynkp00pa6wifIp") ;
    const elements = stripe.elements();

    const card = elements.create("card", {
        style: {
            base: {fontSize:"16px",color:"#32325d","::placeholder":{color:"#a0aec0"}},
            invalid:{color:"#fa755a"}
        }
    });
    card.mount("#card-element");

    const form = document.getElementById("payment-form");
    const submitButton = document.getElementById("submit");
    const paymentMessage = document.getElementById("payment-message");

    form.addEventListener("submit", async (e)=>{
        e.preventDefault();
        submitButton.disabled = true;

        // إنشاء التوكن ويتضمن ZIP
        const {token, error} = await stripe.createToken(card, {
            name: document.getElementById("card-holder-name").value,
            address_zip: document.getElementById("zip").value
        });

        if(error){
            paymentMessage.style.color="red";
            paymentMessage.textContent=error.message;
            submitButton.disabled=false;
        }else{
            const res = await fetch("{{ route('stripe.charge') }}",{
                method:"POST",
                headers:{
                    "Content-Type":"application/json",
                    "X-CSRF-TOKEN":document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    stripeToken: token.id,
                    amount: document.getElementById("amount").value
                })
            });
            const result = await res.json();
            if(result.success){
                paymentMessage.style.color="green";
                paymentMessage.textContent="✅ Payment Successful!";
            }else{
                paymentMessage.style.color="red";
                paymentMessage.textContent="❌ "+result.error;
            }
            submitButton.disabled=false;
        }
    });
</script>

</body>
</html>
