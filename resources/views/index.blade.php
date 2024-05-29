@extends('layout')

@section('title', ' E-Commerce HomePage')

@section('content')
<div>

  {{-- HeroSection --}}
    <!-- Slider -->
    <div data-hs-carousel='{
        "loadingClasses": "opacity-0"
      }' class="relative py-11">
      <div class="hs-carousel relative overflow-hidden w-full min-h-96 rounded-lg">
        <div class="hs-carousel-body flex flex-nowrap transition-transform duration-700  {{-- absolute top-0 bottom-0 start-0 opacity-0 --}}">
          <div class="hs-carousel-slide">
          
              {{-- <span class="self-center text-4xl text-gray-800 transition duration-700">First slide</span>--}} 
              <div class="flex sm:px-[70px] px-[30px] sm:py-[20px] py-[10px] ">
                <div class="w-[200px] font-poppins text-[16px] flex flex-col gap-[16px] ">
                  <a href="">
                    <div class="">
                      <p>Woman’s Fashion</p>
                    </div>
                  </a>
                  <a href="">
                    <div class="">
                      <p>Men’s Fashion</p>
                    </div>
                  </a>
                  
                    <div>
                        <p>Electronics</p>
                    </div>
                    <div>
                        <p>Home & Lifestyle</p>
                    </div>
                    <div>
                        <p>Medicine</p>
                    </div>
                    <div>
                        <p>Sports & Outdoor</p>
                    </div>
                    <div>
                        <p>Baby’s & Toys</p>
                    </div>
                    <div>
                        <p>Groceries & Pets</p>
                    </div>
                    <div>
                        <p>Health & Beauty</p>
                    </div>
        
                </div>
                <div class="bg-black flex w-[950px] gap-5 p-[2px]">
                    <div class="flex flex-col justify-center px-[50px] gap-5 ">
                        <div class="flex items-center gap-[24px]">
                            <img src="images/apple.svg" alt="">
                            <p class="text-white font-poppins text-[16px] font-extralight text-center">iPhone 14 Series</p>
                        </div>
                        <div>
                            <p class="text-white text-[40px] w-[250px] font-inter font-semibold ">Up to 10% off Voucher</p>
                        </div>
                       <a href="">
                        <div class="flex items-center ">
                            <p class="font-poppins text-[16px] font-medium underline text-white">Shop Now</p>
                            <img src="images/arrow-right.svg" alt="">
                        </div>
                       </a>
                    </div>
                    
                    <div>
                        <img src="images/iPhone.svg" alt="">
                    </div>
                </div>
                

          </div>
          </div>
          <div class="hs-carousel-slide">
            <div class="flex justify-center h-full bg-gray-200 p-6">
              <span class="self-center text-4xl text-gray-800 transition duration-700">Second slide</span>
            </div>
          </div>
          <div class="hs-carousel-slide">
            <div class="flex justify-center h-full bg-gray-300 p-6">
              <span class="self-center text-4xl text-gray-800 transition duration-700">Third slide</span>
            </div>
          </div>
        </div>
      </div>

      {{-- <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
        <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
        <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
        <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
      </div> --}}
    </div>

  {{-- Frame Products --}}
    <div class="sm:px-[70px] px-[30px] sm:py-[20px] py-[10px] flex flex-col gap-[10px]">
      <div class="flex gap-[20px] items-center">
        <div class="bg-[#DB4444] w-[10px] h-[30px]"></div>
        <p class="text-[16px] font-semibold font-poppins text-[#DB4444] text-center">Today's</p>
      </div>
      <div class="flex gap-[60px] items-center text-center">
        <div class="">
          <p class="text-[36px] font-semibold font-inter leading-[48px]">Flash Sales</p>
        </div>
        <div class="flex flex-col">
          <div class="flex text-[12px] font-medium font-poppins leading-[18px] gap-8">
            <p>Days</p>
            <p>Hours</p>
            <p>Minutes</p>
            <p>Seconds</p>
          </div>
          <div class="flex text-[32px] font-inter leading-[30px] font-bold gap-[10px]">
            <p>03</p>
            <p class="text-[#DB4444]">:</p>
            <p>23</p>
            <p class="text-[#DB4444]">:</p>
            <p>19</p>
            <p class="text-[#DB4444]">:</p>
            <p>56</p>
          </div>
        </div>
      </div>
    </div>
    <div class=" flex flex-col justify-center items-center sm:px-[50px] px-[30px]  sm:py-[20px] py-[10px]">
      <div class="flex gap-[80px]">
        <div>
          <div class="relative w-[220px] flex items-center justify-center bg-slate-100">
            <div class="absolute top-0 left-0 w-[40px] h-[18px] bg-[#DB4444] text-white  flex justify-center items-center text-[9px] font-poppins">
              -40%

            </div>
            <div class="flex flex-col justify-center items-center">
              <div class="">
                <img class="w-[170px] h-[170px]" src="images/gamepad.svg" alt="">
              </div>
              <div>
                <button class="bg-black text-white p-1 w-[220px] " >
                  Add to Card
                </button>
              </div>
            </div>
            <div class="absolute top-0 right-0 ">
              <img src="images/heartSmall.svg" alt="">
              <img src="images/oeil.svg" alt="">
            </div>
          </div >
          <div class="py-[20px] flex flex-col gap-[6px]">
            <div>
              <p class="text-[16px] font-medium">
                HAVIT HV-G92 Gamepad
              </div>
            <div class="flex gap-[10px]">
              <p>$120</p>
              <p class="text-gray-400 line-through">$160</p>
            </div>
            <div class="flex gap-[10px]">
              <img src="images/fiveStar.svg" alt="">
              <p class="text-gray-400">(88)</p>
            </div>
          </div>
        </div>

        <div>
          <div class="relative w-[220px]flex items-center justify-center bg-slate-100">
            <div class="absolute top-0 left-0 w-[40px] h-[18px] bg-[#DB4444] text-white  flex justify-center items-center text-[10px]">
              -35%

            </div>
            <div class="flex flex-col justify-center items-center">
              <div class="">
                <img class="w-[170px] h-[170px]" src="images/clavier.svg" alt="">
              </div>
              <div>
                <button class="bg-black text-white p-1 w-[220px] " >
                  Add to Card
                </button>
              </div>
            </div>
            <div class="absolute top-0 right-0 ">
              <img src="images/heartSmall.svg" alt="">
              <img src="images/oeil.svg" alt="">
            </div>
          </div >
          <div class="py-[20px] flex flex-col gap-[6px]">
            <div>
              <p class="text-[16px] font-medium">
                AK-900 Wired Keyboard
              </div>
            <div class="flex gap-[10px]">
              <p>$960</p>
              <p class="text-gray-400 line-through">$1160</p>
            </div>
            <div class="flex gap-[10px]">
              <img src="images/fourStar.svg" alt="">
              <p class="text-gray-400">(75)</p>
            </div>
          </div>
        </div>

        <div>
          <div class="relative w-[220px] flex items-center justify-center bg-slate-100">
            <div class="absolute top-0 left-0 w-[40px] h-[18px] bg-[#DB4444] text-white  flex justify-center items-center text-[10px]">
              -30%

            </div>
            <div class="flex flex-col justify-center items-center">
              <div class="">
                <img class="w-[170px] h-[170px]" src="images/moniteur.svg" alt="">
              </div>
              <div>
                <button class="bg-black text-white p-1 w-[220px] " >
                  Add to Card
                </button>
              </div>
            </div>
            <div class="absolute top-0 right-0 ">
              <img src="images/heartSmall.svg" alt="">
              <img src="images/oeil.svg" alt="">
            </div>
          </div >
          <div class="py-[20px] flex flex-col gap-[6px]">
            <div>
              <p class="text-[16px] font-medium">
                IPS LCD Gaming Monitor
              </div>
            <div class="flex gap-[10px]">
              <p>$370</p>
              <p class="text-gray-400 line-through">$400</p>
            </div>
            <div class="flex gap-[10px]">
              <img src="images/fiveStar.svg" alt="">
              <p class="text-gray-400">(99)</p>
            </div>
          </div>
        </div>

        <div>
          <div class="relative w-[220px] flex items-center justify-center bg-slate-100">
            <div class="absolute top-0 left-0 w-[40px] h-[18px] bg-[#DB4444] text-white  flex justify-center items-center text-[10px]">
              -25%

            </div>
            <div class="flex flex-col justify-center items-center">
              <div class="">
                <img class="w-[170px] h-[170px]" src="images/chaise.svg" alt="">
              </div>
              <div>
                <button class="bg-black text-white p-1 w-[220px] " >
                  Add to Card
                </button>
              </div>
            </div>
            <div class="absolute top-0 right-0 ">
              <img src="images/heartSmall.svg" alt="">
              <img src="images/oeil.svg" alt="">
            </div>
          </div >
          <div class="py-[20px] flex flex-col gap-[6px]">
            <div>
              <p class="text-[16px] font-medium">
                S-Series Comfort Chair
              </div>
            <div class="flex gap-[10px]">
              <p>$375</p>
              <p class="text-gray-400 line-through">$400</p>
            </div>
            <div class="flex gap-[10px]">
              <img src="images/fourHalfStar.svg" alt="">
              <p class="text-gray-400">(99)</p>
            </div>
          </div>
        </div>
      </div>
      <div class="w-[200px] bg-[#DB4444] text-sm text-white flex flex-col justify-center items-center p-3 rounded-lg">
        <button> View all products</button>
      </div>
    </div>
    
  {{-- Trait Horizontal --}}
    <div class="sm:px-[70px] px-[30px] sm:py-[20px] py-[10px]">
      <hr class="  border-gray-400 text-white w-[1100px] font-thin">
    </div>

  {{-- Frame Categories --}}
  <div class="sm:px-[70px] px-[30px] sm:py-[20px] py-[10px] flex flex-col gap-[25px]">
    <div class="flex gap-[20px] items-center">
      <div class="bg-[#DB4444] w-[10px] h-[30px]"></div>
      <p class="text-sm font-bold text-[#DB4444] text-center">Categories</p>
    </div>
    <div class="flex justify-between">
      <p class="text-[36px] font-semibold">Browse By Category</p>
      <div class="flex justify-center items-center gap-[20px]">
        <div class="rounded-full shadow bg-slate-50  py-[10px] px-[10px]">
          <img src="images/left.svg" alt="">
        </div>
        <div class="rounded-full  bg-slate-50 shadow py-[10px] px-[10px]">
          <img src="images/right.svg" alt="">
        </div>
      </div>
    </div>
    <div class="flex justify-between ">
      <div class=" border w-[170px] h-[130px] p-3 flex flex-col justify-center items-center rounded-lg gap-[5px] ">
        <img  class="w-[40px] h-[40px]" src="images/category-CellPhone.svg" alt="">
        <p class="text-[16px] font-regular ">Phones</p>
      </div>
      <div class=" border w-[170px] h-[130px] p-3 flex flex-col justify-center items-center rounded-lg gap-[5px] ">
        <img class="w-[40px] h-[40px]"  src="images/category-Computer.svg" alt="">
        <p class="text-[16px] font-regular ">Computers</p>
      </div>
      <div class=" border w-[170px] h-[130px] p-3 flex flex-col justify-center items-center rounded-lg gap-[5px] ">
        <img class="w-[40px] h-[40px]"  src="images/category-SmartWatch.svg" alt="">
        <p class="text-[16px] font-regular ">SmartWatch</p>
      </div>
      <div class=" border w-[170px] h-[130px] p-3 flex flex-col justify-center items-center rounded-lg gap-[5px] ">
        <img class="w-[40px] h-[40px]"  src="images/category-Camera.svg" alt="">
        <p class="text-[16px] font-regular ">Camera</p>
      </div>
      <div class=" border w-[170px] h-[130px] p-3 flex flex-col justify-center items-center rounded-lg gap-[5px] ">
        <img class="w-[40px] h-[40px]"  src="images/category-Headphone.svg" alt="">
        <p class="text-[16px] font-regular ">HeadPhone</p>
      </div>
      <div class=" border w-[170px] h-[130px] p-3 flex flex-col justify-center items-center rounded-lg gap-[5px] ">
        <img class="w-[40px] h-[40px]"  src="images/category-Gamepad.svg" alt="">
        <p class="text-[16px] font-regular ">Gaming</p>
      </div>
    </div>
    <div></div>
  </div>
  {{-- Trait Horizontal --}}
  <div class="sm:px-[70px] px-[30px] sm:py-[20px] py-[10px]">
    <hr class="  border-gray-400 text-white w-[1100px] font-thin">
  </div>

  {{-- Frame This Month --}}
  <div class="sm:px-[70px] px-[30px] sm:py-[20px] py-[10px] flex flex-col gap-[10px]">
    <div class="flex gap-[20px] items-center">
      <div class="bg-[#DB4444] w-[10px] h-[30px]"></div>
      <p class="text-sm font-bold text-[#DB4444] text-center">This Month</p>
    </div>
    <div class="flex justify-between">
      <p class="text-[36px] font-semibold">Best Selling Products</p>
      <div class="w-[150px] bg-[#DB4444] text-sm text-white flex flex-col justify-center items-center p-3 rounded-lg">
        <button> View all </button>
      </div>
    </div>
    <div class="flex justify-between">
      <a href="">
        <div>
          <div class="relative w-[220px] flex items-center justify-center bg-slate-100">
            
            <div class="flex flex-col justify-center items-center">
              <div class="">
                <img class="w-[170px] h-[170px] p-[30px]" src="images/coat.svg" alt="">
              </div>
             
            </div>
            <div class="absolute top-0 right-0 flex flex-col gap-[10px] px-[10px] py-[10px] ">
              <img class="bg-white rounded-full flex items-center justify-center p-[2px]" src="images/heartSmall.svg" alt="">
              <img class="bg-white rounded-full flex items-center justify-center p-[2px]" src="images/oeil.svg" alt="">
            </div>
          </div >
          <div class="py-[10px] flex flex-col gap-[6px]">
            <div>
              <p class="text-[16px] font-medium">
                The north coat 
              </div>
            <div class="flex gap-[10px] font-poppins ">
              <p class="text-[#DB4444]">$260</p>
              <p class="text-gray-400 line-through">$360</p>
            </div>
            <div class="flex gap-[10px]">
              <img src="images/fiveStar.svg" alt="">
              <p class="text-gray-400">(65)</p>
            </div>
          </div>
        </div>
      </a>
      <a href="">
        <div>
          <div class="relative w-[220px] flex items-center justify-center bg-slate-100">
            
            <div class="flex flex-col justify-center items-center">
              <div class="">
                <img class="w-[170px] h-[170px] p-[30px]" src="images/bag.svg" alt="">
              </div>
             
            </div>
            <div class="absolute top-0 right-0 flex flex-col gap-[10px] px-[10px] py-[10px] ">
              <img class="bg-white rounded-full flex items-center justify-center p-[2px]" src="images/heartSmall.svg" alt="">
              <img class="bg-white rounded-full flex items-center justify-center p-[2px]" src="images/oeil.svg" alt="">
            </div>
          </div >
          <div class="py-[10px] flex flex-col gap-[6px]">
            <div>
              <p class="text-[16px] font-medium">
                Gucci duffle bag 
              </p>
            </div>
            <div class="flex gap-[10px] font-poppins ">
              <p class="text-[#DB4444]">$960</p>
              <p class="text-gray-400 line-through">$1160</p>
            </div>
            <div class="flex gap-[10px]">
              <img src="images/fourHalfStar.svg" alt="">
              <p class="text-gray-400">(65)</p>
            </div>
          </div>
        </div>
      </a>
      <a href="">
        <div>
          <div class="relative w-[220px] flex items-center justify-center bg-slate-100">
            
            <div class="flex flex-col justify-center items-center">
              <div class="">
                <img class="w-[170px] h-[170px] p-[30px]" src="images/gammaxx.svg" alt="">
              </div>
             
            </div>
            <div class="absolute top-0 right-0 flex flex-col gap-[10px] px-[10px] py-[10px] ">
              <img class="bg-white rounded-full flex items-center justify-center p-[2px]" src="images/heartSmall.svg" alt="">
              <img class="bg-white rounded-full flex items-center justify-center p-[2px]" src="images/oeil.svg" alt="">
            </div>
          </div >
          <div class="py-[10px] flex flex-col gap-[6px]">
            <div>
              <p class="text-[16px] font-medium">
                RGB liquid CPU Cooler 
              </div>
            <div class="flex gap-[10px] font-poppins ">
              <p class="text-[#DB4444]">$160</p>
              <p class="text-gray-400 line-through">$170</p>
            </div>
            <div class="flex gap-[10px]">
              <img src="images/fourHalfStar.svg" alt="">
              <p class="text-gray-400">(65)</p>
            </div>
          </div>
        </div>
      </a>
      <a href="">
        <div>
          <div class="relative w-[220px] flex items-center justify-center bg-slate-100">
            
            <div class="flex flex-col justify-center items-center">
              <div class="">
                <img class="w-[170px] h-[170px] p-[30px]" src="images/library.svg" alt="">
              </div>
             
            </div>
            <div class="absolute top-0 right-0 flex flex-col gap-[10px] px-[10px] py-[10px] ">
              <img class="bg-white rounded-full flex items-center justify-center p-[2px]" src="images/heartSmall.svg" alt="">
              <img class="bg-white rounded-full flex items-center justify-center p-[2px]" src="images/oeil.svg" alt="">
            </div>
          </div >
          <div class="py-[10px] flex flex-col gap-[6px]">
            <div>
              <p class="text-[16px] font-medium">
                Small BookSelf 
              </div>
            <div class="flex gap-[10px] font-poppins ">
              <p class="text-[#DB4444]">$360</p>
              <p class="text-gray-400 line-through"></p>
            </div>
            <div class="flex gap-[10px]">
              <img src="images/fiveStar.svg" alt="">
              <p class="text-gray-400">(65)</p>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>

    {{-- Frame Categories --}}
    <div class="sm:px-[70px] px-[30px] sm:py-[20px] py-[10px] flex flex-col gap-[10px]">
      <div class="px-[56px] bg-black py-[40px] flex  ">
        <div class="flex flex-col gap-[40px]">
          <div>
            <p class="font-poppins font-semibold text-[16px] leading-[20px] text-[#00FF66]  py-[20px] w-[90px]">Categories</p>
            <p class="font-inter font-semibold text-[48px] leading-[60px] text-white tracking-wider  py-[40px] w-[500px]">Enhance Your Music Experience</p>
          </div>
          <div class="flex w-[320px] gap-[24px]">
            <div class="w-[62px] h-[62px] bg-white flex flex-col items-center justify-center rounded-full">
              <div class="text-black flex flex-col justify-center items-center">
                <p class="font-poppins font-semibold text-[16px] leading-[20px]">05</p>
                <p class="font-poppins text-[11px] leading-[18px]">Days</p>
              </div>
            </div>
            <div class="w-[62px] h-[62px] bg-white flex flex-col items-center justify-center rounded-full">
              <div class="text-black flex flex-col justify-center items-center">
                <p class="font-poppins font-semibold text-[16px] leading-[20px]">23</p>
                <p class="font-poppins text-[11px] leading-[18px]">Hours</p>
              </div>
            </div>
            <div class="w-[62px] h-[62px] bg-white flex flex-col items-center justify-center rounded-full">
              <div class="text-black flex flex-col justify-center items-center">
                <p class="font-poppins font-semibold text-[16px] leading-[20px]">59</p>
                <p class="font-poppins text-[11px] leading-[18px]">Minutes</p>
              </div>
            </div>
            <div class="w-[62px] h-[62px] bg-white flex flex-col items-center justify-center rounded-full">
              <div class="text-black flex flex-col justify-center items-center">
                <p class="font-poppins font-semibold text-[16px] leading-[20px]">35</p>
                <p class="font-poppins text-[11px] leading-[18px]">Seconds</p>
              </div>
            </div>
          </div>
          <div class="w-[172px] bg-[#00FF66] text-sm text-white flex flex-col justify-center items-center p-3 rounded-lg ">
            <button class="font-poppins font-medium text-[16px] leading-[24px]"> Buy Now</button>
          </div>
        </div>
        <div class="">
          <img class="flex justify-center items-center w-[600px] h-[420px] py-[37px] shadow-2xl" src="images/jbl.svg" alt="">
        </div>
      </div>
    </div>
     

  


</div>

@endsection
