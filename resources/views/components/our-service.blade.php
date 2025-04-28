<div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="uppercase text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
            What is Lorem Ipsum?
        </h2>
        <p class="mt-6 text-lg leading-8 text-gray-600">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
    </div>
    <dl class="mx-auto mt-16 grid grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <div>
            <dt class="font-semibold text-gray-900">
                <livewire:animated-image images-folder="lamiere"></livewire:animated-image>
            </dt>
            <dd class="mt-4">
                <p class="font-semibold text-gray-900">Integer tristique</p>
                <p class="mt-1 text-gray-600">
                    Donec sit amet malesuada orci. Phasellus accumsan lectus eu arcu porta, et condimentum neque interdum.
                </p>
            </dd>
        </div>
        <div>
            <dt class="font-semibold text-gray-900">
                <livewire:animated-image images-folder="profili"></livewire:animated-image>
            </dt>
            <dd class="mt-4">
                <p class="font-semibold text-gray-900">Donec quis</p>
                <p class="mt-1 text-gray-600">
                    Nunc vulputate suscipit dui vitae porttitor.
                </p>
            </dd>
        </div>
        <div>
            <dt class="font-semibold text-gray-900">
                <livewire:animated-image images-folder="saldatura"></livewire:animated-image>
            </dt>
            <dd class="mt-4">
                <p class="font-semibold text-gray-900">Morbi eget</p>
                <p class="mt-1 text-gray-600">
                    Morbi cursus turpis quis urna pharetra, a sollicitudin arcu ornare.
                </p>
            </dd>
        </div>
    </dl>

    <div class="mt-32">
        <livewire:animated-strip></livewire:animated-strip>
        <div class="mx-auto lg:mx-0 my-20">
            <p class="text-lg leading-8 text-gray-600">
                Suspendisse iaculis tempor ultrices <span class="font-semibold">Lorem Ipsum</span>,
                consequat tellus augue, nec vestibulum lacus consequat nec. Nam odio sapien, consectetur ut erat vel, viverra faucibus lectus
            </p>
        </div>
    </div>

    <div class="mx-auto flex max-w-2xl flex-col items-center justify-between gap-16 lg:mx-0 lg:max-w-none lg:flex-row">
        <div class="w-full lg:max-w-lg lg:flex-auto">
            <img
                src="{{ asset('images/meccanica/03.JPG')}}"
                alt=""
                class="aspect-[6/5] w-full rounded-2xl bg-gray-50 object-cover lg:aspect-auto lg:h-[34.5rem]"
            />
        </div>
        <div class="w-full lg:max-w-xl lg:flex-auto">
            <ul class="-my-8 divide-y divide-gray-100">
                <li class="py-6">
                    <dl class="relative flex flex-wrap gap-x-3">
                        <dd class="mt-2 w-full flex-none text-base leading-7 text-gray-600">
                            Donec laoreet urna eu euismod scelerisque:<br />
                            <span class="font-semibold">Fusce vel ultricies urna, id pharetra tellus etiam pulvinar augue et arcu molestie, sit amet consectetur libero commodo.</span>
                        </dd>
                    </dl>
                </li>
                <li class="py-6">
                    <dl class="relative flex flex-wrap gap-x-3">
                        <dd class="mt-2 w-full flex-none text-base leading-7 text-gray-600">
                            Suspendisse efficitur, dui eu euismod suscipit <span class="font-semibold">eo quam interdum neque</span> at viverra dolor nisl eu quam.
                        </dd>
                    </dl>
                </li>
                <li class="py-6">
                    <dl class="relative flex flex-wrap gap-x-3">
                        <dd class="mt-2 w-full flex-none text-base leading-7 text-gray-600">
                            Donec tellus orci, <span class="font-semibold">feugiat ut lectus rutrum</span>, auctor consequat lorem <span class="font-semibold">in cursus</span> ante vel sollicitudin mollis, arcu dui vulputate sem.
                        </dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
</div>
