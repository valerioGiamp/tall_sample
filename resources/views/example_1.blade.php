<x-app-layout>
    <div class="bg-white">
        <!-- Header -->
        {{-- <header class="absolute inset-x-0 top-0 z-50">
          <nav
            class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8"
            aria-label="Global"
          >
            <div class="flex lg:flex-1">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img
                  class="h-8 w-auto"
                  src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                  alt=""
                />
              </a>
            </div>
            <div class="flex lg:hidden">
              <button
                type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
              >
                <span class="sr-only">Open main menu</span>
                <svg
                  class="h-6 w-6"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  aria-hidden="true"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                  />
                </svg>
              </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900"
                >Product</a
              >
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900"
                >Features</a
              >
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900"
                >Resources</a
              >
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900"
                >Company</a
              >
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900"
                >Log in <span aria-hidden="true">&rarr;</span></a
              >
            </div>
          </nav>
          <!-- Mobile menu, show/hide based on menu open state. -->
          <div class="lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-50"></div>
            <div
              class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
            >
              <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                  <span class="sr-only">Your Company</span>
                  <img
                    class="h-8 w-auto"
                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt=""
                  />
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                  <span class="sr-only">Close menu</span>
                  <svg
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M6 18L18 6M6 6l12 12"
                    />
                  </svg>
                </button>
              </div>
              <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                  <div class="space-y-2 py-6">
                    <a
                      href="#"
                      class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                      >Product</a
                    >
                    <a
                      href="#"
                      class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                      >Features</a
                    >
                    <a
                      href="#"
                      class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                      >Resources</a
                    >
                    <a
                      href="#"
                      class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                      >Company</a
                    >
                  </div>
                  <div class="py-6">
                    <a
                      href="#"
                      class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                      >Log in</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header> --}}

        <main class="isolate">
          <!-- Hero section -->
          <div class="relative isolate -z-10">
            <svg
              class="absolute inset-x-0 top-0 -z-10 h-[64rem] w-full stroke-gray-200 [mask-image:radial-gradient(32rem_32rem_at_center,white,transparent)]"
              aria-hidden="true"
            >
              <defs>
                <pattern
                  id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84"
                  width="200"
                  height="200"
                  x="50%"
                  y="-1"
                  patternUnits="userSpaceOnUse"
                >
                  <path d="M.5 200V.5H200" fill="none" />
                </pattern>
              </defs>
              <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                <path
                  d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                  stroke-width="0"
                />
              </svg>
              <rect
                width="100%"
                height="100%"
                stroke-width="0"
                fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)"
              />
            </svg>
            <div
              class="absolute left-1/2 right-0 top-0 -z-10 -ml-24 transform-gpu overflow-hidden blur-3xl lg:ml-24 xl:ml-48"
              aria-hidden="true"
            >
              <div
                class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                style="
                  clip-path: polygon(
                    63.1% 29.5%,
                    100% 17.1%,
                    76.6% 3%,
                    48.4% 0%,
                    44.6% 4.7%,
                    54.5% 25.3%,
                    59.8% 49%,
                    55.2% 57.8%,
                    44.4% 57.2%,
                    27.8% 47.9%,
                    35.1% 81.5%,
                    0% 97.7%,
                    39.2% 100%,
                    35.2% 81.4%,
                    97.2% 52.8%,
                    63.1% 29.5%
                  );
                "
              ></div>
            </div>
            <div class="overflow-hidden">
              <div
                class="mx-auto max-w-7xl px-6 pb-32 pt-36 sm:pt-60 lg:px-8 lg:pt-32"
              >
                <div
                  class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center"
                >
                  <div class="w-full max-w-xl lg:shrink-0 xl:max-w-2xl">
                    <h1
                      class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl"
                    >
                      We’re changing the way people connect.
                    </h1>
                    <p
                      class="relative mt-6 text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none"
                    >
                      Cupidatat minim id magna ipsum sint dolor qui. Sunt sit in quis
                      cupidatat mollit aute velit. Et labore commodo nulla aliqua
                      proident mollit ullamco exercitation tempor. Sint aliqua anim
                      nulla sunt mollit id pariatur in voluptate cillum. Eu voluptate
                      tempor esse minim amet fugiat veniam occaecat aliqua.
                    </p>
                  </div>
                  <div
                    class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0"
                  >
                    <div
                      class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-none xl:pt-80"
                    >
                      <div class="relative">
                        <img
                          src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80"
                          alt=""
                          class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg"
                        />
                        <div
                          class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"
                        ></div>
                      </div>
                    </div>
                    <div
                      class="mr-auto w-44 flex-none space-y-8 sm:mr-0 sm:pt-52 lg:pt-36"
                    >
                      <div class="relative">
                        <img
                          src="https://images.unsplash.com/photo-1485217988980-11786ced9454?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80"
                          alt=""
                          class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg"
                        />
                        <div
                          class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"
                        ></div>
                      </div>
                      <div class="relative">
                        <img
                          src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-x=.4&w=396&h=528&q=80"
                          alt=""
                          class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg"
                        />
                        <div
                          class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"
                        ></div>
                      </div>
                    </div>
                    <div class="w-44 flex-none space-y-8 pt-32 sm:pt-0">
                      <div class="relative">
                        <img
                          src="https://images.unsplash.com/photo-1670272504528-790c24957dda?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=left&w=400&h=528&q=80"
                          alt=""
                          class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg"
                        />
                        <div
                          class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"
                        ></div>
                      </div>
                      <div class="relative">
                        <img
                          src="https://images.unsplash.com/photo-1670272505284-8faba1c31f7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80"
                          alt=""
                          class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg"
                        />
                        <div
                          class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content section -->
          <div class="mx-auto -mt-12 max-w-7xl px-6 sm:mt-0 lg:px-8 xl:-mt-8">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
              <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Our mission
              </h2>
              <div class="mt-6 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
                <div class="lg:w-full lg:max-w-2xl lg:flex-auto">
                  <p class="text-xl leading-8 text-gray-600">
                    Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem.
                    At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at
                    vitae feugiat egestas ac. Diam nulla orci at in viverra
                    scelerisque eget. Eleifend egestas fringilla sapien.
                  </p>
                  <div class="mt-10 max-w-xl text-base leading-7 text-gray-700">
                    <p>
                      Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget
                      risus enim. Mattis mauris semper sed amet vitae sed turpis id.
                      Id dolor praesent donec est. Odio penatibus risus viverra tellus
                      varius sit neque erat velit. Faucibus commodo massa rhoncus,
                      volutpat. Dignissim sed eget risus enim. Mattis mauris semper
                      sed amet vitae sed turpis id.
                    </p>
                    <p class="mt-10">
                      Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis
                      odio id et. Id blandit molestie auctor fermentum dignissim.
                      Lacus diam tincidunt ac cursus in vel. Mauris varius vulputate
                      et ultrices hac adipiscing egestas. Iaculis convallis ac tempor
                      et ut. Ac lorem vel integer orci.
                    </p>
                  </div>
                </div>
                <div class="lg:flex lg:flex-auto lg:justify-center">
                  <dl class="w-64 space-y-8 xl:w-80">
                    <div class="flex flex-col-reverse gap-y-4">
                      <dt class="text-base leading-7 text-gray-600">
                        Transactions every 24 hours
                      </dt>
                      <dd class="text-5xl font-semibold tracking-tight text-gray-900">
                        44 million
                      </dd>
                    </div>
                    <div class="flex flex-col-reverse gap-y-4">
                      <dt class="text-base leading-7 text-gray-600">
                        Assets under holding
                      </dt>
                      <dd class="text-5xl font-semibold tracking-tight text-gray-900">
                        $119 trillion
                      </dd>
                    </div>
                    <div class="flex flex-col-reverse gap-y-4">
                      <dt class="text-base leading-7 text-gray-600">
                        New users annually
                      </dt>
                      <dd class="text-5xl font-semibold tracking-tight text-gray-900">
                        46,000
                      </dd>
                    </div>
                  </dl>
                </div>
              </div>
            </div>
          </div>

          <!-- Image section -->
          <div class="mt-32 sm:mt-40 xl:mx-auto xl:max-w-7xl xl:px-8">
            <img
              src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2832&q=80"
              alt=""
              class="aspect-[5/2] w-full object-cover xl:rounded-3xl"
            />
          </div>

          <!-- Values section -->
          <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
              <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Our values
              </h2>
              <p class="mt-6 text-lg leading-8 text-gray-600">
                Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam
                voluptatum cupiditate veritatis in accusamus quisquam.
              </p>
            </div>
            <dl
              class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3"
            >
              <div>
                <dt class="font-semibold text-gray-900">Be world-class</dt>
                <dd class="mt-1 text-gray-600">
                  Aut illo quae. Ut et harum ea animi natus. Culpa maiores et sed sint
                  et magnam exercitationem quia. Ullam voluptas nihil vitae dicta
                  molestiae et. Aliquid velit porro vero.
                </dd>
              </div>
              <div>
                <dt class="font-semibold text-gray-900">Share everything you know</dt>
                <dd class="mt-1 text-gray-600">
                  Mollitia delectus a omnis. Quae velit aliquid. Qui nulla maxime
                  adipisci illo id molestiae. Cumque cum ut minus rerum architecto
                  magnam consequatur. Quia quaerat minima.
                </dd>
              </div>
              <div>
                <dt class="font-semibold text-gray-900">Always learning</dt>
                <dd class="mt-1 text-gray-600">
                  Aut repellendus et officiis dolor possimus. Deserunt velit quasi
                  sunt fuga error labore quia ipsum. Commodi autem voluptatem nam.
                  Quos voluptatem totam.
                </dd>
              </div>
              <div>
                <dt class="font-semibold text-gray-900">Be supportive</dt>
                <dd class="mt-1 text-gray-600">
                  Magnam provident veritatis odit. Vitae eligendi repellat non. Eum
                  fugit impedit veritatis ducimus. Non qui aspernatur laudantium modi.
                  Praesentium rerum error deserunt harum.
                </dd>
              </div>
              <div>
                <dt class="font-semibold text-gray-900">Take responsibility</dt>
                <dd class="mt-1 text-gray-600">
                  Sit minus expedita quam in ullam molestiae dignissimos in harum.
                  Tenetur dolorem iure. Non nesciunt dolorem veniam necessitatibus
                  laboriosam voluptas perspiciatis error.
                </dd>
              </div>
              <div>
                <dt class="font-semibold text-gray-900">Enjoy downtime</dt>
                <dd class="mt-1 text-gray-600">
                  Ipsa in earum deserunt aut. Quos minus aut animi et soluta. Ipsum
                  dicta ut quia eius. Possimus reprehenderit iste aspernatur ut est
                  velit consequatur distinctio.
                </dd>
              </div>
            </dl>
          </div>

          <!-- Logo cloud -->
          <div class="relative isolate -z-10 mt-32 sm:mt-48">
            <div
              class="absolute inset-x-0 top-1/2 -z-10 flex -translate-y-1/2 justify-center overflow-hidden [mask-image:radial-gradient(50%_45%_at_50%_55%,white,transparent)]"
            >
              <svg
                class="h-[40rem] w-[80rem] flex-none stroke-gray-200"
                aria-hidden="true"
              >
                <defs>
                  <pattern
                    id="e9033f3e-f665-41a6-84ef-756f6778e6fe"
                    width="200"
                    height="200"
                    x="50%"
                    y="50%"
                    patternUnits="userSpaceOnUse"
                    patternTransform="translate(-100 0)"
                  >
                    <path d="M.5 200V.5H200" fill="none" />
                  </pattern>
                </defs>
                <svg x="50%" y="50%" class="overflow-visible fill-gray-50">
                  <path
                    d="M-300 0h201v201h-201Z M300 200h201v201h-201Z"
                    stroke-width="0"
                  />
                </svg>
                <rect
                  width="100%"
                  height="100%"
                  stroke-width="0"
                  fill="url(#e9033f3e-f665-41a6-84ef-756f6778e6fe)"
                />
              </svg>
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <h2 class="text-center text-lg font-semibold leading-8 text-gray-900">
                Trusted by the world’s most innovative teams
              </h2>
              <div
                class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5"
              >
                <img
                  class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                  src="https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg"
                  alt="Transistor"
                  width="158"
                  height="48"
                />
                <img
                  class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                  src="https://tailwindui.com/img/logos/158x48/reform-logo-gray-900.svg"
                  alt="Reform"
                  width="158"
                  height="48"
                />
                <img
                  class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                  src="https://tailwindui.com/img/logos/158x48/tuple-logo-gray-900.svg"
                  alt="Tuple"
                  width="158"
                  height="48"
                />
                <img
                  class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                  src="https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-900.svg"
                  alt="SavvyCal"
                  width="158"
                  height="48"
                />
                <img
                  class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                  src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg"
                  alt="Statamic"
                  width="158"
                  height="48"
                />
              </div>
            </div>
          </div>

          <!-- Team section -->
          <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-48 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
              <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Our team
              </h2>
              <p class="mt-6 text-lg leading-8 text-gray-600">
                Sit facilis neque ab nulla vel. Cum eos in laudantium. Temporibus eos
                totam in dolorum. Nemo vel facere repellendus ut eos dolores
                similique.
              </p>
            </div>
            <ul
              role="list"
              class="mx-auto mt-20 grid max-w-2xl grid-cols-2 gap-x-8 gap-y-16 text-center sm:grid-cols-3 md:grid-cols-4 lg:mx-0 lg:max-w-none lg:grid-cols-5 xl:grid-cols-6"
            >
              <li>
                <img
                  class="mx-auto h-24 w-24 rounded-full"
                  src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                  alt=""
                />
                <h3
                  class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"
                >
                  Michael Foster
                </h3>
                <p class="text-sm leading-6 text-gray-600">Co-Founder / CTO</p>
              </li>

              <!-- More people... -->
            </ul>
          </div>

          <!-- Blog section -->
          <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
              <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                From the blog
              </h2>
              <p class="mt-2 text-lg leading-8 text-gray-600">
                Vel dolorem qui facilis soluta sint aspernatur totam cumque.
              </p>
            </div>
            <div
              class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3"
            >
              <article
                class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80"
              >
                <img
                  src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                  alt=""
                  class="absolute inset-0 -z-10 h-full w-full object-cover"
                />
                <div
                  class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"
                ></div>
                <div
                  class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"
                ></div>

                <div
                  class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300"
                >
                  <time datetime="2020-03-16" class="mr-8">Mar 16, 2020</time>
                  <div class="-ml-4 flex items-center gap-x-4">
                    <svg
                      viewBox="0 0 2 2"
                      class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50"
                    >
                      <circle cx="1" cy="1" r="1" />
                    </svg>
                    <div class="flex gap-x-2.5">
                      <img
                        src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt=""
                        class="h-6 w-6 flex-none rounded-full bg-white/10"
                      />
                      Michael Foster
                    </div>
                  </div>
                </div>
                <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Vel expedita assumenda placeat aut nisi optio voluptates quas
                  </a>
                </h3>
              </article>

              <!-- More posts... -->
            </div>
          </div>
        </main>

        <!-- Footer -->
        <footer
          class="mx-auto mt-40 max-w-7xl overflow-hidden px-6 pb-20 sm:mt-64 sm:pb-24 lg:px-8"
        >
          <nav
            class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12"
            aria-label="Footer"
          >
            <div class="pb-6">
              <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900"
                >Blog</a
              >
            </div>
            <div class="pb-6">
              <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900"
                >Jobs</a
              >
            </div>
            <div class="pb-6">
              <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900"
                >Press</a
              >
            </div>
            <div class="pb-6">
              <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900"
                >Accessibility</a
              >
            </div>
            <div class="pb-6">
              <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900"
                >Partners</a
              >
            </div>
          </nav>
          <div class="mt-10 flex justify-center space-x-10">
            <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Facebook</span>
              <svg
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Instagram</span>
              <svg
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">X</span>
              <svg
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z"
                />
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">GitHub</span>
              <svg
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">YouTube</span>
              <svg
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </div>
          <p class="mt-10 text-center text-xs leading-5 text-gray-500">
            &copy; 2020 Your Company, Inc. All rights reserved.
          </p>
        </footer>
      </div>
    </x-app-layout>
