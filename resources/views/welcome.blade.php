<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Project</title>

        <!-- FontAwesome -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <!-- Tailwind -->
        <link href="{{ mix('css/main.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="flex mb-4">
                <div class="w-1/6 h-max"></div>

                <div class="w-4/6 h-max">
                    <nav class="relative select-none bg-grey font-normal font-normal lg:flex lg:items-stretch w-full">
                        <div class="flex flex-no-shrink items-stretch h-12">
                            <i class="fa fa-flask text-3xl mt-2" ></i>
                            <a href="#" class="flex-no-grow flex-no-shrink relative py-2 px-3 .font-normal leading-normal no-underline flex items-center hover:bg-grey-dark text-3xl font-normal"><span class="text-orange-500 ">Coding</span> Labs</a>
                            <button class="block lg:hidden cursor-pointer ml-auto relative w-12 h-12 p-4">
                                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
                            </button>
                        </div>
                        <div class="lg:flex lg:items-stretch lg:flex-no-shrink lg:flex-grow">
                            <div class="lg:flex lg:items-stretch lg:justify-end ml-auto mt-2">
                                <a href="#" class="flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal no-underline flex items-center hover:bg-grey">Demo</a>
                                <a href="#" class="flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal no-underline flex items-center hover:bg-grey">Blog</a>
                                <a href="#" class="flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal no-underline flex items-center hover:bg-grey">pricing</a>
                                @if (Route::has('login'))
                                    @auth
                                        <a class="bg-orange-500 hover:bg-orange-700 text-white py-2 px-4 rounded" href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a class="bg-orange-500 hover:bg-orange-700 text-white py-2 px-4 rounded mr-3" href="{{ route('login') }}">Login</a>

                                        @if (Route::has('register'))
                                            <a class="bg-orange-500 hover:bg-orange-700 text-white py-2 px-4 rounded" href="{{ route('register') }}">Register</a>
                                        @endif
                                    @endauth
                                @endif
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="w-1/6 h-max"></div>
            </div>

            <div class="content">

                <div class="flex mb-4 bg-gray-200">
                    <div class="w-1/6 h-max"></div>

                    <div class="w-4/6 h-max mb-12 pb-12">
                        <div class="flex mb-4 justify-center mt-12">
                            <p class="text-center text-4xl font-normal">How sitebot works</p>
                        </div>

                        <div class="flex mb-4 mt-12">
                            <div class="w-1/3 h-max px-6 ">
                                <div class="max-w-sm rounded overflow-hidden text-center p-3">
                                    <i class="fas fa-newspaper text-6xl text-gray-700"></i>
                                    <br><br>

                                    <p class="text-gray-700 text-center font-bold">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                    </p>
                                    <br><br>

                                    <p class="text-gray-700 text-center">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                            <div class="w-1/3 h-max px-6">
                                <div class="max-w-sm rounded overflow-hidden text-center p-3">

                                    <i class="fas fa-cogs text-6xl text-gray-700"></i>
                                    <br><br>

                                    <p class="text-gray-700 text-center font-bold">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                    </p>
                                    <br><br>

                                    <p class="text-gray-700 text-center">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                            <div class="w-1/3 h-max px-6">
                                <div class="max-w-sm rounded overflow-hidden text-center p-3">

                                    <i class="fas fa-laptop-code text-6xl text-gray-700"></i>
                                    <br><br>

                                    <p class="text-gray-700 text-center font-bold">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                    </p>
                                    <br><br>

                                    <p class="text-gray-700 text-center">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/6 h-max"></div>
                </div>

                <div class="flex mb-4 ">
                    <div class="w-1/6 h-max"></div>

                    <div class="w-4/6 h-max">
                        <div class="flex mb-4 m-12">
                            <p class="text-center m-12">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>

                    <div class="w-1/6 h-max"></div>
                </div>

                <div class="flex mb-4 bg-gray-200">
                    <div class="w-1/6 h-max"></div>

                    <div class="w-4/6 h-max mt-12">
                        <div class="flex mb-4 justify-center">
                            <p class="text-center text-4xl font-normal">Pricing</p>
                        </div>

                        <div class="flex mb-4 mt-12">
                            <div class="w-1/3 h-max px-6">
                                <div class="max-w-sm rounded overflow-hidden shadow-lg text-center p-3 pb-8 bg-white">
                                    <p class="text-center font-bold">Free</p>
                                    <br><br>

                                    <p class="text-gray-700 text-center">
                                        $ <span class="text-orange-500 font-bold text-3xl">0</span> <br>
                                    </p>
                                    <br><br><br>

                                    <p class="text-gray-700 text-center">
                                        Lorem ipsum dolor sit amet 
                                    </p><br>
                                    <p class="text-gray-700 text-center">
                                        Lorem ipsum dolor sit amet 
                                    </p><br>
                                    <p class="text-gray-700 text-center">
                                        Lorem ipsum dolor sit amet 
                                    </p><br>
                                    <br><br>

                                    <button class=" flex-inline bg-orange-500 hover:bg-orange-700 text-white font-bold py-5 px-12 rounded">
                                        start
                                    </button>
                                </div>
                            </div>
                            <div class="w-1/3 h-max px-6">
                                <div class="max-w-sm rounded overflow-hidden shadow-lg text-center p-3 pb-8 bg-white">
                                    <p class="text-center font-bold">Basic</p>
                                    <br><br>

                                    <p class="text-gray-700 text-center">
                                        $ <span class="text-orange-500 font-bold text-3xl">19</span> / mo <br> per website 
                                    </p>
                                    <br><br>

                                    <p class="text-gray-700 text-center">
                                        Lorem ipsum dolor sit amet 
                                    </p><br>
                                    <p class="text-gray-700 text-center">
                                        Lorem ipsum dolor sit amet 
                                    </p><br>
                                    <p class="text-gray-700 text-center">
                                        Lorem ipsum dolor sit amet 
                                    </p><br>
                                    <br><br>

                                    <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-5 px-12 rounded">
                                        Start Trial
                                    </button>
                                </div>
                            </div>
                            <div class="w-1/3 h-max px-6">
                                <div class="max-w-sm rounded overflow-hidden shadow-lg text-center p-3 bg-white pb-8">
                                    <p class="text-center font-bold">Business</p>
                                    <br><br>

                                    <p class="text-gray-700 text-center">
                                        $ <span class="text-orange-500 font-bold text-3xl">99</span> / mo <br> per website 
                                    </p>
                                    <br><br>

                                    <p class="text-gray-700 text-center">
                                        Lorem ipsum dolor sit amet 
                                    </p><br>
                                    <p class="text-gray-700 text-center">
                                        Lorem ipsum dolor sit amet 
                                    </p><br>
                                    <p class="text-gray-700 text-center">
                                        Lorem ipsum dolor sit amet 
                                    </p><br>
                                    <br><br>

                                    <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-5 px-12 rounded">
                                        Start Trial
                                    </button>
                                </div>
                            </div>
                        </div> 

                        <div class="flex mb-4 justify-center mt-12 mb-12 pb-6">
                            <p class="text-center font-bold">15 days trial. no credit required</p>
                        </div>
                    </div>

                    <div class="w-1/6 h-max"></div>
                </div>

                <div class="flex mb-4">
                    <div class="w-1/6 h-max"></div>

                    <div class="w-4/6 h-max my-12 py-12">
                        <div class="flex">
                            <div class="w-1/3 h-max text-4xl text-black-700 font-normal">User Reviews</div>
                            <div class="w-1/3 h-12"></div>
                            <div class="w-1/3 h-12"></div>
                        </div>
    
                        <div class="flex mt-8">
                            <div class="w-2/3 h-max ml-8">
                                <p class="border-l-4 border-orange-500 pl-5">                            
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                </p>
                                <br>
                                <p>Marth Johnson, Founder of <span class="text-orange-500 font-bold">freecodecamp.org</span>.</p>
                            </div>
                            <div class="w-1/3 h-12"></div>                                
                        </div>

                        <div class="flex m-8">
                            <div class="w-1/3 h-12"></div>                                
                            <div class="w-2/3 h-max p-5 ml-8 bg-green-150">
                                <p class="border-l-4 border-orange-500 pl-5">                            
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                </p>
                                <br>
                                <p>Marth Johnson, Founder of <span class="text-orange-500 font-bold">freecodecamp.org</span>.</p>
                            </div>
                        </div>

                        <div class="flex mt-8">
                            <div class="w-2/3 h-max ml-8">
                                <p class="border-l-4 border-orange-500 pl-5">                            
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                </p>
                                <br>
                                <p>Marth Johnson, Founder of <span class="text-orange-500 font-bold">freecodecamp.org</span>.</p>
                            </div>
                            <div class="w-1/3"></div>                                
                        </div>

                        <div class="flex m-8">
                            <div class="w-1/3 h-12"></div>                                
                            <div class="w-2/3 h-max p-5 ml-8 bg-green-150">
                                <p class="border-l-4 border-orange-500 pl-5">                            
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                </p>
                                <br>
                                <p>Marth Johnson, Founder of <span class="text-orange-500 font-bold">freecodecamp.org</span>.</p>
                            </div>
                        </div>

                        <div class="flex m-8 text-center justify-center">
                            <p class="text-center text-4xl font-black">Services</p>
                        </div>

                        <div class="flex">
                            <div class="w-2/3 h-max px-6">
                                
                                <br>
                                <p class="text-left ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 15 days trial. no credit required. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <br>
                                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 15 days trial. no credit required. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <br>
                                <p class="text-left font-bold">15 days trial. no credit required</p>
                                <br>

                                <div class="flex mb-4">
                                    <div class="w-1/3 h-max px-6">
                                        <i class="far fa-check-circle" style="color:#FFA500;"></i> HTML errors <br><br>
                                        <i class="far fa-check-circle" style="color:#FFA500;"></i> HTML errors <br><br>
                                        <i class="far fa-check-circle" style="color:#FFA500;"></i> HTML errors <br><br>
                                    </div>
                                    <div class="w-1/3 h-max px-6">
                                        <i class="far fa-check-circle" style="color:#FFA500;"></i> HTML errors <br><br>
                                        <i class="far fa-check-circle" style="color:#FFA500;"></i> HTML errors <br><br>
                                        <i class="far fa-check-circle" style="color:#FFA500;"></i> HTML errors <br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/3 h-max px-6 mt-8">
                                <br><br><br>
                                <img class="flex items-center justify-center" src="../images/pic3.png">                                
                            </div>
                        </div> 

                        <div class="flex mb-4 mt-12 pt-12 justify-center">
                            <p class="text-center">
                                Sitebot runs test cases using Google Chrome, consectetur adipisicing elit. 15 days trial adipisicing elit adipisicing elit. It is the same browser that <span class="text-orange-500 font-bold underline">50% of your clients use on daily basis~</span>
                            </p>
                        </div>

                        <div class="flex mb-4 mt-12">
                            <div class="w-1/5 h-max px-6"></div>
                            <div class="flex-inline h-max px-6">
                                <p class="text-left font-bold ">Question Answers</p>
                                <br>
                                <p class="text-left font-bold">Do you want to do that?</p>
                                <p class="text-left ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 15 days trial. no credit required. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <br>
                                <p class="text-left font-bold">Do you want to do that?</p>
                                <p class="text-left ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 15 days trial. no credit required. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <br>
                                <p class="text-left font-bold">Do you want to do that?</p>
                                <p class="text-left ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 15 days trial. no credit required. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <br>
                            </div>
                            <div class="w-1/5 h-max px-6"></div>
                        </div>
    
                    <div class="w-1/6 h-max"></div>
                </div>
            </div>

            <footer>
                <div class="flex w-full justify-center border-t-2 border-gray-400 pt-6 pb-8">
                    <p>&copy; <span class="text-orange-500 font-bold">CodingLabs </span>&mdash; 2020</p>
                </div>
            </footer>
    </body>
</html>
