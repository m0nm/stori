<x-layout>
    
    <div class="py-8 grid place-items-center">
        <form action="" class="w-4/5 md:w-1/3 px-2 md:p-8 mt-auto bg-primary border rounded-lg">
            @csrf

            <h1 class="mb-4 text-center font-bold text-3xl">Welcome</h1>
            {{-- username --}}
            <div class="mx-auto max-w-lg">
                <div class="py-1">
        
                    <span class="px-1 text-sm text-gray-600">Username or Email</span>
        
                    <input placeholder="" type="text" class="text-md block w-full rounded-lg border-2 border-gray-300 bg-white px-3 py-2 placeholder-gray-600 shadow-sm focus:border-gray-600 focus:bg-white focus:placeholder-gray-500 focus:outline-none" />
        
                </div>
                
                {{-- password --}}
                <div class="py-1">
                    
                    <span class="px-1 text-sm text-gray-600">Password</span>
                    
                    <input placeholder="" type="password" x-model="password" class="text-md block w-full rounded-lg border-2 border-gray-300 bg-white px-3 py-2 placeholder-gray-600 shadow-sm focus:border-gray-600 focus:bg-white focus:placeholder-gray-500 focus:outline-none" />
                    
                </div>
    
                <button class="my-6 block w-full rounded-lg bg-gray-800 px-6 py-2 md:py-3 text-lg font-semibold text-white shadow-sm hover:bg-black hover:text-white transition-colors delay-50">Register</button>
        </div>
    
        <div class="flex justify-between items-center">
            
            <a href="/register" class="text-sm border-gray-200 text-black">
                Not a member?
                <span class="font-semibold text-black"> Join us! </span>
            </a>
            
            <a href="#" class="text-sm border-gray-200 text-black">
                reset password
            </a>
            
        </div>
    </form>
    
    
</div>
    
</x-layout>