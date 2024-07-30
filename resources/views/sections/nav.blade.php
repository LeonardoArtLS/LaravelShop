@section('nav')
    <div>
        <div class="h-10 flex justify-center items-center bg-indigo-400 text-white">
            <span class="flex items-center justify-center font-medium">
                <ion-icon class="text-lg" name="bookmark"></ion-icon>
                <p class="font-medium mx-1 text-[1rem]">10% De Desconto em Todos Produtos</p>
            </span>
        </div>
    </div>
    <nav class="text-3xl my-5 flex justify-between items-center">
        <div class="flex">
            <a href=""><ion-icon class="ms-4 flex justify-center items-center" name="cart-outline"></ion-icon></a>
            <button><ion-icon class="ms-2 flex justify-center items-center" name="search-outline"></ion-icon></button>
        </div>
        <div class="mx-auto flex items-center o text-4xl font-extrabold Inter-Tight md:text-5xl">
            <p>SHOP</p>
        </div>
        <div class="flex">
            <button href="" class="me-4 flex justify-center items-center">
                <ion-icon class="flex justify-center items-center" name="menu-outline"></ion-icon>
            </button>
        </div>
    </nav>
@endsection
