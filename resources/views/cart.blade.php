@extends('layout')

@section('main')
<main class="cart">
    <section class="steps_cart">
        <div class="options_steps_cart">
            <a href="#"><img src="image/cart/steps-cart1.png" alt=""></a>
        </div>
        <div class=line_steps_cart>
        </div>
        <div class="options_steps_cart">
            <a href="#"><img src="image/cart/steps-cart2bw.png" alt=""></a>
        </div>
        <div class="line_steps_cart_checkout_bw">
        </div>
        <div class="options_steps_cart">
            <a href="#"><img src="image/cart/steps-cart3bw.png" alt=""></a>
        </div>
    </section>

    <section class="buy_cart">
        <section class="container_buy_cart">
            <div class="title_products">
                <p class="name_cart">Platos</p>
                <p>Precio</p>
            </div>
            <?php $precioTotal = 0; ?>
            @if($plates)
                @foreach($plates as $p)
                @foreach($p as $plate)
                <?php $precioTotal += $plate->price?>
                <div class="description_cart" id="plateCartRemove[{{$plate->id}}]">
                    <div class="img_products"><img src="/storage/{{ $plate->image }}" alt="product"></div>
                    <p class="detail_products">{{$plate->name}}</p>
                    <p class="amount_products">$ {{$plate->price}}</p>
                    <button type="submit" class="remove_products" onclick="removePlate({{$plate->id}})"><img src="image/cart/remove-cart.png" alt=""></button>
                </div>
                @endforeach
                @endforeach
            @else
                <script>
                    if(document.querySelector('.description_cart') !== true && document.querySelector('.empty_cart') !== true){
                        var container = document.querySelector('.container_buy_cart');
                        var p = document.createElement('p');
                        p.classList.add('empty_cart');
                        p.innerHTML = 'Aun no has seleccionado ningún plato';
                        container.append(p);
                    }
                </script>
                
            @endif
        </section>

        <!--<section class="container_options">
            <form class="cupon_cart" action="validar.php" method="post">
                <p>Ingresar Cupón</p>
                <input type="text" name="cupon" placeholder="Ingresá el código">
            </form>
            <button type="submit" class="update_cart" value="">Actualizar Carrito</button>
        </section>-->
    </section>

    <section class="address_send">
        <h2>Selecciona una dirección de envío</h2>
        <form action="" method="POST">
            @if(Auth::user()->addresses)
                @forelse(Auth::user()->addresses as $address)
                <div>
                    <input type="radio" class="inputAddressCart" name="address[]" id="{{$address->id}}" value="{{$address->id}}">
                    <label for="{{$address->id}}">{{$address->fullAddress()}}</label>
                </div>
                @endforeach
            @endif
        </form>
        <p><a href="/home#myData">Agregar nueva direccion</a></p>
    </section>

    <section class="buy_btn_cart">


        <div class="page_cart">
            <p class="total_cart">Total</p>
            <p class="bar_total_cart">$ {{$precioTotal}}</p>
        </div>

        <div class="btn_cart">
            <a href="" class="btn_confirmPurcharse btn btn--orange btn--large">Finalizar compra</a>
		</div>

        
    </section>

</main>
@endsection
