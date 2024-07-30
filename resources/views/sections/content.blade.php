@section('content')
    <div class="lg:grid lg:grid-cols-12 xl:mx-auto xl:max-w-[1300px]">
        <section class="relative max-w-[500px] mx-auto lg:mx-0 lg:h-min col-span-5">
            <img src="https://img.ltwebstatic.com/images3_spmp/2024/05/18/7c/1715973914a17b38bee93d2651d836c785286a6ce6.webp"
                alt=""
                class="z-10 w-full object-cover sm:rounded-2xl lg:rounded-e-3xl xl:rounded-3xl lg:rounded-s-none lg:max-h-[98svh] lg:w-auto lg:aspect-[1/1.2]">
            <ul class="absolute bottom-5 left-1/2 transform -translate-x-1/2 flex space-x-1">
                <li>
                    <label
                        class="has-[:checked]:opacity-100 cursor-pointer w-10 h-10 flex justify-center items-center hover:opacity-100 opacity-60 transition duration-300 ease-in-out">
                        <img src="https://img.ltwebstatic.com/images3_spmp/2024/05/18/7c/1715973914a17b38bee93d2651d836c785286a6ce6.webp"
                            alt="" class="aspect-square z-20 w-10 rounded-md cursor-pointer object-cover"
                            onmouseover="changeImage(this)">
                        <input type="radio" name="Image" class="w-0" />
                    </label>
                </li>
                <li>
                    <label
                        class="has-[:checked]:opacity-100 cursor-pointer w-10 h-10 flex justify-center items-center hover:opacity-100 opacity-60 transition duration-300 ease-in-out">
                        <img src="https://img.ltwebstatic.com/images3_spmp/2024/05/17/96/171595495448ebc1ee0c43e10c2cfffa8c489b3b51.webp"
                            alt="" class="aspect-square z-20 w-10 rounded-md cursor-pointer object-cover"
                            onmouseover="changeImage(this)">
                        <input type="radio" name="Image" class="w-0" />
                    </label>
                </li>
                <li>
                    <label
                        class="has-[:checked]:opacity-100 cursor-pointer w-10 h-10 flex justify-center items-center hover:opacity-100 opacity-60 transition duration-300 ease-in-out">
                        <img src="https://img.ltwebstatic.com/images3_spmp/2024/05/17/82/171595496703ca77d925ec682ca7ef740d38097739.webp"
                            alt="" class="aspect-square z-20 w-10 rounded-md cursor-pointer object-cover"
                            onmouseover="changeImage(this)">
                        <input type="radio" name="Image" class="w-0" />
                    </label>
                </li>
                <li>
                    <label
                        class="has-[:checked]:opacity-100 cursor-pointer w-10 h-10 flex justify-center items-center hover:opacity-100 opacity-60 transition duration-300 ease-in-out">
                        <img src="https://img.ltwebstatic.com/images3_spmp/2024/05/17/79/1715954978177c1f001bf472132405d0b0eb7a5ba2.webp"
                            alt="" class="aspect-square z-20 w-10 rounded-md cursor-pointer object-cover"
                            onmouseover="changeImage(this)">
                        <input type="radio" name="Image" class="w-0" />
                    </label>
                </li>
                <li>
                    <label
                        class="has-[:checked]:opacity-100 cursor-pointer w-10 h-10 flex justify-center items-center hover:opacity-100 opacity-60 transition duration-300 ease-in-out">
                        <img src="https://img.ltwebstatic.com/images3_spmp/2024/06/20/f5/1718847601cc406be664ef8d85bfb6d50a6eddeede.webp"
                            alt="" class="aspect-square z-20 w-10 rounded-md cursor-pointer object-cover"
                            onmouseover="changeImage(this)">
                        <input type="radio" name="Image" class="w-0" />
                    </label>
                </li>
            </ul>
        </section>

        <section class="mx-6 mt-8 sm:grid sm:grid-cols-2 sm:px-10 lg:mx-0 lg:px-6 col-span-7">
            <h1 class="Inter-Tight font-bold text-4xl md:text-5xl col-span-2">Drop shoulder Tee</h1>
            {{-- <h1 class="Inter-Tight font-bold text-4xl">Manfinity Homme</h1> --}}

            <div class="flex space-x-5 my-2 sm:col-span-2">
                <p class="text-[1.45rem] text-gray-500">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon>
                </p>
                <p class="Inter-Tight underline tracking-tight text-[1.15rem]">
                    4.6 | 52 Reviews
                </p>
            </div>

            <div class="flex text-4xl space-x-3 mb-12 lg:mb-8 sm:col-span-2">
                <h2 class="font-semibold">R$99.99</h2>
                <p class="text-gray-400 line-through">R$125</p>
            </div>

            <div class="Inter-Tight text-[1.35rem] space-y-2 mb-9 md:mb-9 md:w-min lg:mb-5">
                <p>Color: White</p>
                <div class="flex space-x-2 mt-2">
                    <label
                        class="has-[:checked]:ring-zinc-800 has-[:checked]:ring-2 cursor-pointer w-10 h-10 flex justify-center items-center rounded-3xl">
                        <div class="w-5 h-5 bg-zinc-200 rounded-3xl">
                        </div>
                        <input type="radio" name="Color" class="w-0" />
                    </label>
                    <label
                        class="has-[:checked]:ring-zinc-800 has-[:checked]:ring-2 cursor-pointer w-10 h-10 flex justify-center items-center rounded-3xl">
                        <div class="w-5 h-5 bg-black rounded-3xl">
                        </div>
                        <input type="radio" name="Color" class="w-0" />
                    </label>
                    <label
                        class="has-[:checked]:ring-zinc-800 has-[:checked]:ring-2 cursor-pointer w-10 h-10 flex justify-center items-center rounded-3xl">
                        <div class="w-5 h-5 bg-indigo-600 rounded-3xl">
                        </div>
                        <input type="radio" name="Color" class="w-0" />
                    </label>
                </div>
            </div>

            <div class="Inter-Tight text-[1.35rem] space-y-2 mb-11 md:mb-0 md:w-min">
                <p>Size:</p>
                <div class="space-x-3 flex items-center font-medium">
                    <label
                        class="has-[:checked]:ring-zinc-700 ring-zinc-400 ring-2 cursor-pointer w-10 h-10 rounded-sm flex justify-center items-center">
                        <div class="flex items-center space-x-5">
                            <h2 class="text-lg">S</h2>
                        </div>
                        <input type="radio" name="Size" class="w-0 border" />
                    </label>
                    <label
                        class="has-[:checked]:ring-zinc-700 ring-zinc-400 ring-2  cursor-pointer w-10 h-10 rounded-sm flex justify-center items-center">
                        <div class="flex items-center space-x-5">
                            <h2 class="text-lg">M</h2>
                        </div>
                        <input type="radio" name="Size" class="w-0 border" />
                    </label>
                    <label
                        class="has-[:checked]:ring-zinc-700 ring-zinc-400 ring-2  cursor-pointer w-10 h-10 rounded-sm flex justify-center items-center">
                        <div class="flex items-center space-x-5">
                            <h2 class="text-lg">L</h2>
                        </div>
                        <input type="radio" name="Size" class="w-0 border" />
                    </label>
                    <label
                        class="has-[:checked]:ring-zinc-700 ring-zinc-300 text-zinc-300 ring-2 w-10 h-10 rounded-sm flex justify-center items-center">
                        <div class="flex items-center space-x-5">
                            <h2 class="text-lg">XL</h2>
                        </div>
                    </label>
                    <label
                        class="has-[:checked]:ring-zinc-700 ring-zinc-400 ring-2  cursor-pointer w-10 h-10 rounded-sm flex justify-center items-center">
                        <div class="flex items-center space-x-5">
                            <h2 class="text-lg">XXL</h2>
                        </div>
                        <input type="radio" name="Size" class="w-0 border" />
                    </label>
                </div>
            </div>

            <div class="Inter-Tight text-[1.35rem] space-y-2 mb-12 justify-self-end sm:col-span-2 sm:justify-self-start">
                <p>Quantity</p>
                <div class="flex flex-nowrap items-center space-x-10 border-2 border-zinc-400 rounded-md p-2 max-w-min">
                    <button class="flex" id="remove"><ion-icon name="remove"></ion-icon></button>
                    <p id="value">1</p>
                    <button class="flex" id="add"><ion-icon name="add"></ion-icon></button>
                </div>
            </div>

            <button
                class="bg-black text-white rounded-sm Inter-Tight w-full flex mx-auto mb-10 lg:mb-0 items-center justify-center p-4 sm:col-span-2 md:font-semibold md:text-lg">
                <p>Add to cart</p>
            </button>
        </section>

        <section class="mx-6 mt-8 sm:grid sm:grid-cols-2 sm:px-10 md:mx-0 md:px-0 justify-center text-center col-span-12 grid grid-cols-2">
            <div class="Inter-Tight space-y-2 my-12 col-span-2 md:text-lg lg:mb-16">
                <p class="font-semibold text-2xl mt-20 sm:mt-4 my-7 lg:my-0">Details</p>
                <p>
                    <span class="font-semibold">CLASSICS | JAQUETA WIND BASIC BLACK</span>
                    <br>
                    Moletom c/ capuz e cordão para ajuste c/ bolso canguru. Elástico na manga e barra para ajuste.
                    <br>
                    * <span class="font-semibold">PP</span> - Comprimento: 66cm/ Torax: 51cm/ Barra: 43cm/ Manga: 64cm.
                    <br>
                    * <span class="font-semibold">P</span> - Comprimento: 68cm/ Torax: 54cm/ Barra: 46cm/ Manga: 66cm.
                    <br>
                    * <span class="font-semibold">M</span> - Comprimento: 70cm/ Torax: 57cm/ Barra: 49cm/ Manga: 68cm.
                    <br>
                    * <span class="font-semibold">G</span> - Comprimento: 72cm/ Torax: 60cm/ Barra: 52cm/ Manga: 70cm.
                    <br>
                    * <span class="font-semibold">GG</span> - Comprimento: 74cm/ Torax: 63cm/ Barra: 55cm/ Manga: 72cm.
                    <br>
                    * <span class="font-semibold">GGG</span> - Comprimento: 76cm/ Torax: 66cm/ Barra: 58cm/ Manga: 74cm.
                    <br>
                    Composição - 100% Poliamida.
                </p>
            </div>

            <div class="Inter-Tight text-[1.35rem] mx-auto col-span-2 lg:col-span-1 lg:m">

                <p class="font-bold mb-4">Comments</p>

                <div class="space-y-2 mb-12 mx-auto max-h-72 overflow-y-auto w-fit px-2 max-w-[90vw] xl:max-w-[650px] lg:ms-2 lg:max-w-[50vw] md:col-span-2">

                    <div
                        class="flex text-base space-x-1 items-center border border-black rounded-3xl px-4 py-2 w-full max-w-fit">
                        <p class="flex font-bold whitespace-nowrap">Leonardo Arthur<span class="font-normal">:</span></p>
                        <div class="flex items-center space-x-2 overflow-hidden">
                            <p class="overflow-hidden whitespace-wrap text-ellipsis max-w-full">
                                Bad Jacket 😒
                            </p>
                            <span class="flex">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </span>
                        </div>
                    </div>

                    <div
                        class="flex text-base space-x-1 items-center border border-black rounded-3xl px-4 py-2 w-full max-w-fit">
                        <p class="flex font-bold whitespace-nowrap">Gustavo Lima<span class="font-normal">:</span></p>
                        <div class="flex items-center space-x-2 overflow-hidden">
                            <p class="overflow-hidden whitespace-wrap text-ellipsis max-w-full">
                                Good Jacket 😁
                            </p>
                            <span class="flex">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon>
                            </span>
                        </div>
                    </div>

                    <div
                        class="flex text-base space-x-1 items-center border border-black rounded-3xl px-4 py-2 w-full max-w-fit">
                        <p class="flex flex-shrink-0 font-bold whitespace-nowrap">Ryan Costa<span
                                class="font-normal">:</span>
                        </p>
                        <div class="flex items-center space-x-2 overflow-hidden">
                            <p class="overflow-hidden whitespace-wrap text-ellipsis max-w-full">
                                Excellent Jacket, I bought for my brother 😎
                            </p>
                            <span class="flex flex-shrink-0">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </span>
                        </div>
                    </div>

                    <div
                        class="flex text-base space-x-1 items-center border border-black rounded-3xl px-4 py-2 w-full max-w-fit">
                        <p class="flex font-bold whitespace-nowrap">Leonardo Arthur<span class="font-normal">:</span></p>
                        <div class="flex items-center space-x-2 overflow-hidden">
                            <p class="overflow-hidden whitespace-wrap text-ellipsis max-w-full">
                                Good Jacket, I like
                            </p>
                            <span class="flex">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </span>
                        </div>
                    </div>
                    <div
                        class="flex text-base space-x-1 items-center border border-black rounded-3xl px-4 py-2 w-full max-w-fit">
                        <p class="flex font-bold whitespace-nowrap">Leonardo Arthur<span class="font-normal">:</span></p>
                        <div class="flex items-center space-x-2 overflow-hidden">
                            <p class="overflow-hidden whitespace-wrap text-ellipsis max-w-full">
                                Bad Jacket, not buy 😒
                            </p>
                            <span class="flex">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </span>
                        </div>
                    </div>

                    <div
                        class="flex text-base space-x-1 items-center border border-black rounded-3xl px-4 py-2 w-full max-w-fit">
                        <p class="flex font-bold whitespace-nowrap">Gustavo Lima<span class="font-normal">:</span></p>
                        <div class="flex items-center space-x-2 overflow-hidden">
                            <p class="overflow-hidden whitespace-wrap text-ellipsis max-w-full">
                                Good Jacket 😁
                            </p>
                            <span class="flex">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon>
                            </span>
                        </div>
                    </div>

                    <div
                    class="flex text-base space-x-1 items-center border border-black rounded-3xl px-4 py-2 w-full max-w-fit">
                    <p class="flex font-bold whitespace-nowrap">Gustavo Lima<span class="font-normal">:</span></p>
                    <div class="flex items-center space-x-2 overflow-hidden">
                        <p class="overflow-hidden whitespace-wrap text-ellipsis max-w-full">
                            I like this Jacket 😁
                        </p>
                        <span class="flex">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-half"></ion-icon>
                        </span>
                    </div>
                </div>

                </div>

            </div>

            <div class="Inter-Tight text-[1.35rem] space-y-2 mb-12 mx-auto w-full col-span-2 lg:col-span-1">

                <p class="font-bold">Recommendations</p>
                <div class="flex space-x-3 overflow-x-auto pb-4 max-h-62 lg:max-w-[80%] md:justify-center lg:justify-normal lg:ms-14 ">

                    <div class="w-44 rounded-lg border border-zinc-800 shadow-lg max-h-full">
                        <img src="https://img.ltwebstatic.com/images3_spmp/2024/05/18/7c/1715973914a17b38bee93d2651d836c785286a6ce6.webp"
                            alt="" class="w-44 object-cover rounded-t-lg aspect-[1/1.2]">
                        <div class="p-1">
                            <p class="text-lg font-semibold text-nowrap overflow-hidden whitespace-nowrap text-ellipsis">
                                Drop shoulder Tee</p>
                            <div class="flex text-lg space-x-2 mt-1 mx-auto text-center">
                                <h2 class="font-semibold ms-3">R$99.99</h2>
                                <p class="text-gray-400 line-through">R$125</p>
                            </div>
                            <p class="text-lg mt-1">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon>
                            </p>
                        </div>
                    </div>

                    <div class="w-44 rounded-lg border border-zinc-800 shadow-lg max-h-full">
                        <img src="https://img.ltwebstatic.com/images3_spmp/2024/05/18/7c/1715973914a17b38bee93d2651d836c785286a6ce6.webp"
                            alt="" class="w-44 object-cover rounded-t-lg aspect-[1/1.2]">
                        <div class="p-1">
                            <p class="text-lg font-semibold text-nowrap overflow-hidden whitespace-nowrap text-ellipsis">
                                Drop
                                shoulder Tee</p>
                            <div class="flex text-lg space-x-2 mt-1 mx-auto text-center">
                                <h2 class="font-semibold ms-3">R$99.99</h2>
                                <p class="text-gray-400 line-through">R$125</p>
                            </div>
                            <p class="text-lg mt-1">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon>
                            </p>
                        </div>
                    </div>

                    <div class="w-44 rounded-lg border border-zinc-800 shadow-lg max-h-full">
                        <img src="https://img.ltwebstatic.com/images3_spmp/2024/05/18/7c/1715973914a17b38bee93d2651d836c785286a6ce6.webp"
                            alt="" class="w-44 object-cover rounded-t-lg aspect-[1/1.2]">
                        <div class="p-1">
                            <p class="text-lg font-semibold text-nowrap overflow-hidden whitespace-nowrap text-ellipsis">
                                Drop
                                shoulder Tee</p>
                            <div class="flex text-lg space-x-2 mt-1 mx-auto text-center">
                                <h2 class="font-semibold ms-3">R$99.99</h2>
                                <p class="text-gray-400 line-through">R$125</p>
                            </div>
                            <p class="text-lg mt-1">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon>
                            </p>
                        </div>
                    </div>

                    <div class="w-44 rounded-lg border border-zinc-800 shadow-lg max-h-full">
                        <img src="https://img.ltwebstatic.com/images3_spmp/2024/05/18/7c/1715973914a17b38bee93d2651d836c785286a6ce6.webp"
                            alt="" class="w-44 object-cover rounded-t-lg aspect-[1/1.2]">
                        <div class="p-1">
                            <p class="text-lg font-semibold text-nowrap overflow-hidden whitespace-nowrap text-ellipsis">
                                Drop
                                shoulder Tee</p>
                            <div class="flex text-lg space-x-2 mt-1 mx-auto text-center">
                                <h2 class="font-semibold ms-3">R$99.99</h2>
                                <p class="text-gray-400 line-through">R$125</p>
                            </div>
                            <p class="text-lg mt-1">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </div>
    <script>
        const valueElement = document.getElementById('value');
        const removeButton = document.getElementById('remove');
        const addButton = document.getElementById('add');

        removeButton.addEventListener('click', () => {
            let currentValue = parseInt(valueElement.textContent, 10);
            if (currentValue > 1) {
                currentValue -= 1;
                valueElement.textContent = currentValue;
            }
        });

        addButton.addEventListener('click', () => {
            let currentValue = parseInt(valueElement.textContent, 10);
            if (currentValue < 20) {
                currentValue += 1;
                valueElement.textContent = currentValue;
            }
        });
    </script>
    <script>
        function changeImage(element) {
            const mainImage = document.querySelector('section img');
            mainImage.src = element.src;
        }
    </script>
@endsection
