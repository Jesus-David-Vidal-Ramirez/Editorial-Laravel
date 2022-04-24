@extends('layouts.app')

@section('title')
    Comprar Libro
@endsection

@section('contenido')
<h1>Comprar Libro</h1>
@foreach($libro as $libroAcomprar)

@endforeach
<h5>{{$libroAcomprar->nombre }}</h5>

{{ $libro }}

<form>
    <div>
        <label>Valor: $ {{$libroAcomprar->precio}}</label>
    </div>
    <div>
        <label>Cantidad</label>
        <input type="number" >
    </div>

    <div>
        <label>Total</label>
        <input type="number" >
    </div>

    
</form>

<h5>Añadir al Carrito</h5>
<a href="#">Añadir libro</a><br/>
<hr>
<h6>Url: <span>https://www.paypal.com/co/business</span></h6>
<div id="smart-button-container">
    <div style="text-align: center;">
      <div id="paypal-button-container"></div>
    </div>
  </div>


  @endsection  


<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
  function initPayPalButton() {
    paypal.Buttons({
      style: {
        shape: 'pill',
        color: 'gold',
        layout: 'vertical',
        label: 'paypal',
        
      },

      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
        });
      },

      onApprove: function(data, actions) {
        return actions.order.capture().then(function(orderData) {
          
          // Full available details
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

          // Show a success message within this page, e.g.
          const element = document.getElementById('paypal-button-container');
          element.innerHTML = '';
          element.innerHTML = '<h3>Thank you for your payment!</h3>';

          // Or go to another URL:  actions.redirect('thank_you.html');
          
        });
      },

      onError: function(err) {
        console.log(err);
      }
    }).render('#paypal-button-container');
  }
  initPayPalButton();
</script>