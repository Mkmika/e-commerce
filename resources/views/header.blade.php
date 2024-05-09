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
    <div class="flex sm:flex sm:justify-between items-center align-middle sm:gap-[50px] gap-[20px] sm:px-[70px] px-[30px] shadow-sm ">
        <div class="flex gap-[200px]">
            {{--    logo --}}
            <div class="flex justify-center items-center">
                <p class="font-bold font-inter sm:text-[24px] ">Exclusive</p>
            </div>
            {{-- menu --}}
            <div class="flex gap-[48px] justify-center items-center sm:text-[16px] text-[16px] font-inter">
                <div>
                    <a href="" class="text-[18px] hover:text-blue-600 transition-all duration-300 sm:text-[20px] font-Poppins-black underline"> Home
                    </a>
                </div>
                <div>
                    <a href="" class="text-[18px] hover:text-blue-600 transition-all duration-300 sm:text-[20px] "> Contact
                    </a>
                </div>
                <div>
                    <a href="" class="text-[18px] hover:text-blue-600 transition-all duration-300 sm:text-[20px] "> About
                    </a>
                </div>
                <div>
                    <a href="" class="text-[18px] hover:text-blue-600 transition-all duration-300 sm:text-[20px] "> SignUp
                    </a>
                </div>
            </div>
        </div>
        <div class="flex gap-[25px]">
            {{-- Partie recherche --}}
            <div class="flex justify-center items-center sm:py-2 py-1 sm:gap-3 gap-3">
                <div class="flex sm:gap-[25pxpx] gap-[25px]">
                    <div class="relative flex gap-[34px]">
                        <input type="search" id="default-search" class=" font-poppins py-[7px] text-[12px] pl-[20px] pr-[30px] p-3 sm:p-3 block sm:w-full w-  sm:text-sm text-xs text-gray-900  shadow-xl rounded-lg bg-[#F5F5F5] focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="What are you looking for?" required="" value="">
                        <div class="absolute inset-y-0 right-2 flex sm:flex sm:items-center items-center sm:ps-3 ps-3 pointer-events-none">
                            <svg class="sm:w-4 w-2 sm:h-4 h-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center sm:gap-3 gap-3 sm:ps-1 ps-10">
                    <img class="sm:w-10 w-5 sm:h-10 h-5" src="images/heartSmall.svg" alt="">
                    <img class="sm:w-10 w-5 sm:h-10 h-5" src="images/cart.svg" alt="">
                    <img class="sm:w-10 w-5 sm:h-10 h-5" src="images/user.svg" alt="">
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>