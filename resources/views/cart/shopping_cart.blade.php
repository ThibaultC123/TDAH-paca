@include('includes.head')
<body>
@include('includes.header')

@if(Session::has('cart'))
    <div class="row_cart">
        <div class="col-sm-6 col-lg-6 col-lg-offset-3 col-sm-offset-3">
            <ul class="list-group">
                @foreach ($products as $product)
                    <li class="list-group-item">
                        <span class="badge">{{ $product['qty'] }} </span>
                        <strong>{{ $product['item']['title'] }}</strong>
                        <span class="label label-success">{{ $product['price'] }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row align-items-center">
        <div class="col-sm-12 col-lg-12 col-lg-offset-3 col-sm-offset-3">
            <strong>Total: {{ $totalPrice }} €</strong>
            <div id="paypal-button"></div>
        </div>
        <hr>
        <div class="col-sm-12 col-lg-6">
            <!-- <a href="{{ route('checkout') }}" type="button" class="btn btn-success">checkout</a> -->
                <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                <script>
                paypal.Button.render({
                    // Configure environment
                    env: 'sandbox',
                    client: {
                    sandbox: 'demo_sandbox_client_id',
                    production: 'demo_production_client_id'
                    },
                    // Customize button (optional)
                    style: {
                    layout: 'vertical',
                    size: 'responsive',
                    color: 'black',
                    shape: 'pill',
                    },

                    // Enable Pay Now checkout flow (optional)
                    commit: true,

                    // Set up a payment
                    payment: function(data, actions) {
                    return actions.payment.create({
                        transactions: [{
                        amount: {
                            total: {{ $totalPrice }},
                            currency: 'EUR'
                        }
                        }]
                    });
                    },
                    // Execute the payment
                    onAuthorize: function(data, actions) {
                    return actions.payment.execute().then(function() {
                        // Show a confirmation message to the buyer
                        window.alert('Thank you for your purchase!');
                    });
                    }
                }, '#paypal-button');

                </script>
        </div>
    </div>
@else 
        <div class="col-sm-6 col-lg-6 col-lg-offset-3 col-sm-offset-3">
            <h2>No item in cart ! </h2>
        </div>
@endif

@include('includes.footer')