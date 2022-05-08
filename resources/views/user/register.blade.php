<x-layout>
    
    <div class="py-8 grid place-items-center">
        <form action="" class="w-4/5 md:w-1/3 p-2 md:p-8 mt-auto bg-primary border rounded-lg">
            @csrf

            <h1 class="text-center font-bold text-4xl">Join Stori</h1>
            {{-- username --}}
            <div class="mx-auto max-w-lg">
                <div class="py-1">
        
                    <span class="px-1 text-sm text-gray-600">Username</span>
        
                    <input placeholder="" type="text" class="text-md block w-full rounded-lg border-2 border-gray-300 bg-white px-3 py-2 placeholder-gray-600 shadow-sm focus:border-gray-600 focus:bg-white focus:placeholder-gray-500 focus:outline-none" />
        
                </div>
        
                {{-- email --}}
                <div class="py-1">
        
                    <span class="px-1 text-sm text-gray-600">Email</span>
        
                    <input placeholder="" type="email" class="text-md block w-full rounded-lg border-2 border-gray-300 bg-white px-3 py-2 placeholder-gray-600 shadow-sm focus:border-gray-600 focus:bg-white focus:placeholder-gray-500 focus:outline-none" />
        
                </div>
                
                {{-- password --}}
                <div class="py-1">
                    
                    <span class="px-1 text-sm text-gray-600">Password</span>
                    
                    <input placeholder="" type="password" x-model="password" class="text-md block w-full rounded-lg border-2 border-gray-300 bg-white px-3 py-2 placeholder-gray-600 shadow-sm focus:border-gray-600 focus:bg-white focus:placeholder-gray-500 focus:outline-none" />
                    
                </div>
                
                {{-- password confirm --}}
                <div class="py-1">
        
                    <span class="px-1 text-sm text-gray-600">Password Confirm</span>
        
                    <input placeholder="" type="password" x-model="password_confirm" class="text-md block w-full rounded-lg border-2 border-gray-300 bg-white px-3 py-2 placeholder-gray-600 shadow-sm focus:border-gray-600 focus:bg-white focus:placeholder-gray-500 focus:outline-none" />
                </div>
    
                <button class="my-4 block w-full rounded-lg bg-gray-800 px-6 py-2 md:py-3 text-lg font-semibold text-white shadow-sm hover:bg-black hover:text-white transition-colors delay-50">Register</button>
        </div>
    
        <a href="/login" class=" border-gray-200 font-normal text-black">
    
            You're already a member?
            <span class="font-semibold text-black"> Login </span>
        
        </a>
    </form>
    
    
</div>
    
</x-layout>