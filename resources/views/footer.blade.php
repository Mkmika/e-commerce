<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="bg-black text-white  flex flex-col  sm:flex  justify-center items-center sm:justify-between sm:items-center p-5 sm:p-[40px]   ">
        <div>
            <div class=" flexflex-col gap-5 sm:flex sm:gap-5 justify-between  ">
                <div class="sm:flex sm:flex-col flex flex-col gap-3 sm:gap-3">
                    <div class="font-bold font-inter">
                        <p>Exclusive</p>
                    </div>
                    <div class="font-poppins">
                        <a href="#">Subscribe</a>
                    </div>
                    <div class="font-poppins">
                        <a href="#">Get 10% off your first order</a>
                    </div>
                    <div class="relative">
                        <input type="search" id="default-search" class="block sm:w-full w- sm:p-4 p-2 sm:ps-10 ps-6 sm:text-sm text-xs text-gray-900 border border-gray-300 rounded-lg bg-black focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-poppins" placeholder="Enter your email" required="" value="">
                        <div class="absolute inset-y-0 right-2 flex sm:flex sm:items-center items-center sm:ps-3 ps-3 pointer-events-none">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.912 12H4L2.023 4.13499C2.01034 4.08928 2.00263 4.04234 2 3.99499C1.978 3.27399 2.772 2.77399 3.46 3.10399L22 12L3.46 20.896C2.78 21.223 1.996 20.737 2 20.029C2.00203 19.9657 2.01314 19.9031 2.033 19.843L3.5 15" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                        </div>
                    </div>
                </div>
                <div class="sm:flex sm:flex-col flex flex-col gap-3 sm:gap-3 font-poppins">
                    <p class="font-bold">Support</p>
                    <p>111 Bijoy sarani, Dhaka, DH 1515, Bangladesh.</p>
                    <p>exclusive@gmail.com</p>
                    <p>+88015-88888-9999</p>
                </div>
                <div class="sm:flex sm:flex-col flex flex-col gap-3 sm:gap-3 font-poppins">
                    <p class="font-bold"> Account </p>
                    <a href="#"> My Account </a>
                    <a href="#"> Login/Register </a>
                    <a href="#"> Cart</a>
                    <a href="#"> Wishlist</a>
                    <a href="#"> Shop </a>
                </div>
                <div class="sm:flex sm:flex-col flex flex-col gap-3 sm:gap-3 font-poppins">
                    <p class="font-bold"> Quick Link </p>
                    <a href="#"> Privacy Policy </a>
                    <a href="#"> Terms Of Use </a>
                    <a href="#"> FAQ</a>
                    <a href="#"> Contact</a>
                </div>
                <div class="sm:flex sm:flex-col flex flex-col gap-3 sm:gap-3 font-poppins">
                    <p class="font-bold">Download App</p>
                    <a href="#">Save $3 with App New User Only</a>
                    <div class="flex sm:flex gap-2 sm:gap-2">
                        <a href="#">
                            <img src="images/qr-code.svg" alt="">
                        </a>
                        <div class="flex flex-col sm:flex sm:flex-col gap-3 sm:gap-[8px]">
                            <a href="#">
                                <img src="images/playStore.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="images/appStore.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="flex sm:flex gap-3 sm:gap-5">
                        <img src="images/facebook.svg" alt="">
                        <img src="images/twitter.svg" alt="">
                        <img src="images/instagram.svg" alt="">
                        <img src="images/linkedin.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-slate-100 text-white w-[1100px] font-thin">
        <div class="flex sm:flex gap-1 sm:gap-1 font-thin">
            <img class="" src="images/copyright.svg" alt="">
            <p>Copyright <a href="#" class="text-slate-500 hover:text-blueGray-800"> Agossi Mika</a> <span id="get-current-year">2024</span> .</p>
            <a href="https://www.creative-tim.com/product/notus-js"> All right reserved</a>
        </div>
        
    </div>
</body>
</html>