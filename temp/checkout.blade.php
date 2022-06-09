@extends('layout.master')
@section('css', 'checkout.css')
@section('title', 'Qaftani | Checkout')


@section('content')
<div class="container">
    <div class="info">
        <form action="">
            <label>Contact Informations</label>
            <input type="text" name="email">
            <label>Shipping Informations</label>
            <div class="double">
                <input type="text" placeholder="First Name" name="firstName">
                <input type="text" placeholder="Last Name" name="lastName">
            </div>

                <input type="text" placeholder="address" name="address">

            <div class="double">
                <input type="text" placeholder="Region" name="region"><hr>
                <input type="text" placeholder="Postal Code" name="postalCode">
            </div>

                <input type="text" placeholder="Apartment, suite, etc. (optional)" name="living">
                <input type="text" placeholder="Phone" name="phone">
                <div class="sinfo">
                    <input type="checkbox" name="saveinfo" id="saveinfo"><label class="sinfo">Save this information for next time</label>
                </div>

            <input type="submit" value="Continue To shipping" class="subButton">
            <a href="cart">Return To cart</a>
        </form>
    </div>
    <div class="items">
        <div class="item">
            <div>
                <img src="assets/images/1L2A2131copie_180x.png" >
            </div>
            <div>
                <h3>DALAL CO-ORD SET</h3>
                <div class="desc">
                    <div class="choice">
                        <span>One fit</span>/ <span>black</span>
                    </div>
                    <div>
                        <span>480.00MAD</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div>
                <img src="assets/images/1L2A2131copie_180x.png" >
            </div>
            <div>
                <h3>DALAL CO-ORD SET</h3>
                <div class="desc">
                    <div class="choice">
                        <span>One fit</span>/ <span>black</span>
                    </div>
                    <div>
                        <span>480.00MAD</span>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="detailscontainer">
            <div class="details"><Span>Subtotal:</Span><Span>450MAD</Span></div>
            <hr>
            <div class="details"><Span>Total:</Span><Span>450MAD</Span></div>
        </div>
    </div>


</div>
@endsection