<x-layout title='Contact Us'>
    <h1>Contact Us</h1>
        <p>We’d love to hear from you! Whether you have a question, feedback, or just want to say hello, feel free to reach out.</p>
    {{-- <div>
        <ul>
            <li><a href="/">Return to home</a></li>
        </ul>
        <ul>
            <li><b>Address:</b> 123 Business Park, MG Road, Bengaluru – 560001,India</li>
            <li><b>Phone:</b> +91 98765 43210</li>
            <li><b>Email:</b> support@yourcompany.com</li>
            <li><b>Website:</b> www.yourcompany.com</li>
        </ul>
    </div> --}}
    <form method="POST" action="/contact">
        @csrf
        <div class="col-span-full">
        <label for="idea" class="block text-sm/6 font-medium text-gray-900">New Ideas</label>
        <div class="mt-2">
        <textarea id="idea" name="idea" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
        </div>
        <p class="mt-3 text-sm/6 text-gray-600">Any ideas for later?</p>
        </div>
        <div class="mt-6 flex items-center gap-x-6">
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        <a href="/delete-ideas" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">delete</a>
    </div>
        @if ($ideas)
            <div class="mt-6 text-white">
                <h2 class="font-bold">Submitted Ideas</h2>
                <ul>
                @foreach ($ideas as $idea )
                    <li class="text-sm">{{ $idea }}</li>
                @endforeach
                </ul>
            </div>
        @endif
</form>
</x-layout>
