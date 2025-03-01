<section class="container mt-8">
    <div x-data="{ selectedAccordionItem: 'one' }"
        class="w-full overflow-hidden border divide-y rounded-md divide-neutral-300 border-neutral-300 bg-neutral-50/40 text-neutral-600">
        <div class="divide-y divide-neutral-300">
            <button id="controlsAccordionItemOne" type="button"
                class="flex items-center justify-between w-full gap-4 p-4 text-left bg-neutral-50 underline-offset-2 hover:bg-neutral-50/75 focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none"
                aria-controls="accordionItemOne" @click="selectedAccordionItem = 'one'"
                :class="selectedAccordionItem === 'one' ? 'text-onSurfaceStrong ' :
                    'text-onSurface '"
                :aria-expanded="selectedAccordionItem === 'one' ? 'true' : 'false'">
                What products does Agrimandu offer?
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                    stroke="currentColor" class="transition size-5 shrink-0" aria-hidden="true"
                    :class="selectedAccordionItem === 'one' ? 'rotate-180' : ''">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div x-cloak x-show="selectedAccordionItem === 'one'" id="accordionItemOne" role="region"
                aria-labelledby="controlsAccordionItemOne" x-collapse>
                <div class="p-4 text-sm sm:text-base text-pretty">
                    Agrimandu provides a wide range of fresh, organic produce directly from local farmers. We offer
                    seasonal fruits, vegetables, herbs, and grains while ensuring fair pricing for farmers.
                </div>
            </div>
        </div>
        <div class="divide-y divide-neutral-300">
            <button id="controlsAccordionItemTwo" type="button"
                class="flex items-center justify-between w-full gap-4 p-4 text-left bg-neutral-50 underline-offset-2 hover:bg-neutral-50/75 focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none"
                aria-controls="accordionItemTwo" @click="selectedAccordionItem = 'two'"
                :class="selectedAccordionItem === 'two' ? 'text-onSurfaceStrong ' :
                    'text-onSurface '"
                :aria-expanded="selectedAccordionItem === 'two' ? 'true' : 'false'">
                How does Agrimandu support rooftop farmers?
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                    stroke="currentColor" class="transition size-5 shrink-0" aria-hidden="true"
                    :class="selectedAccordionItem === 'two' ? 'rotate-180' : ''">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div x-cloak x-show="selectedAccordionItem === 'two'" id="accordionItemTwo" role="region"
                aria-labelledby="controlsAccordionItemTwo" x-collapse>
                <div class="p-4 text-sm sm:text-base text-pretty">
                    Agrimandu encourages rooftop farming by providing high-quality organic seeds, compost, and expert
                    advice on growing vegetables and herbs in limited spaces. Join our workshops for more guidance!
                </div>
            </div>
        </div>
        <div class="divide-y divide-neutral-300">
            <button id="controlsAccordionItemThree" type="button"
                class="flex items-center justify-between w-full gap-4 p-4 text-left bg-neutral-50 underline-offset-2 hover:bg-neutral-50/75 focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none"
                aria-controls="accordionItemThree" @click="selectedAccordionItem = 'three'"
                :class="selectedAccordionItem === 'three' ? 'text-onSurfaceStrong ' :
                    'text-onSurface '"
                :aria-expanded="selectedAccordionItem === 'three' ? 'true' : 'false'">
                How can Agrimandu help farmers increase productivity?
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                    stroke="currentColor" class="transition size-5 shrink-0" aria-hidden="true"
                    :class="selectedAccordionItem === 'three' ? 'rotate-180' : ''">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div x-cloak x-show="selectedAccordionItem === 'three'" id="accordionItemThree" role="region"
                aria-labelledby="controlsAccordionItemThree" x-collapse>
                <div class="p-4 text-sm sm:text-base text-pretty">
                    Agrimandu uses sales data to suggest the most in-demand crops, helping farmers maximize their yield
                    and profit. We also provide soil testing services and organic fertilizers to improve productivity.
                </div>
            </div>
        </div>
    </div>
</section>
