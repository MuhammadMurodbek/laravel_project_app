<!-- component -->
<div class="flex items-center justify-center p-4">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form class="py-6 px-9" action="{{ route('create-application') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label for="title" class="mb-3 block text-base font-medium text-[#07074D]">
                    Title:
                </label>
                <input type="title" name="title" id="title" placeholder="example@domain.com"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="mb-5">
                <label for="message" class="mb-3 block text-base font-medium text-[#07074D]">
                    Message:
                </label>
                <textarea name="message" id="message" cols="30" rows="5" placeholder="Message..."
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                {{-- <textarea type="email" name="email" id="email" placeholder="example@domain.com"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" /> --}}
            </div>

            <div class="mb-2 pt-2">
                <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                    Upload File
                </label>

                <div class="mb-8">
                    <input type="file" name="file_url" id="file" class="sr-only" />
                    <label for="file"
                        class="relative flex min-h-[20px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-10 text-center">
                        <div>
                            <span
                                class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                                Browse
                            </span>
                        </div>
                    </label>
                </div>


            </div>

            <div>
                <button
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Send File
                </button>
            </div>
        </form>
    </div>
</div>
