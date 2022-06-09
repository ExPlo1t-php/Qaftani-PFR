@extends('layout.master')
@section('css', 'cart.css')
@section('title', 'Qaftani | Cart')


@section('content')
<div class="container">
    <h2>Cart</h2>
    <hr>

    <div class="item">
        <div>
            <img src="assets/images/1L2A2131copie_180x.png" >
        </div>
        <div>
        <h3>DALAL CO-ORD SET</h3>
        <div class="price">
            <span>480.00MAD</span>
        </div>
            <div class="desc">
                <div>
                    <span class="att">Size:</span> 
                    <div class="choice">
                        <span >One fit</span>
                    </div>
                </div>
                <div>
                    <span class="att">Color:</span> 
                    <div class="choice">
                        <span >Black</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
   


    <hr>
    <div class="total">
        <div>
            <h3>Subtotal</h3> 
            <p>taxes, and discount codes calculated at checkout.</p>
        </div>
        <div>
            <span>480.00MAD</span>
            <form action="">
                <button class="subButton">Checkout</button>
            </form>
        </div>
    </div>
</div>
@endsection