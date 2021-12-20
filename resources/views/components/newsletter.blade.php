<div class="py-12 font-sans">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="m-auto">
                        <h1 class="text-center pb-12 text-2xl font-bold">
                            Newsletter
                        </h1>
                        <div class="m-auto text-center">
                        <form action="/subscribe" method="post">
                            @csrf
                            <input type="text" name="email" placeholder="Enter your email"
                            class="px-4 py-2 shadow-xl rounded-xl placeholder-gray-50::placeholder">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-4 rounded-full" type="submit">Subscribe</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>