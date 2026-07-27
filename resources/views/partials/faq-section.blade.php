@php
    $faqId = $faqId ?? 'faq-' . uniqid();
    $compact = $compact ?? false;
    $sectionClass = $sectionClass ?? 'py-24 bg-white';
@endphp

<section class="{{ $sectionClass }}" aria-labelledby="{{ $faqId }}-heading">

    <div class="container mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">

            @isset($eyebrow)
                <span class="text-accent font-semibold tracking-wider uppercase">
                    {{ $eyebrow }}
                </span>
            @endisset

            <h2 id="{{ $faqId }}-heading"
                class="text-3xl md:text-4xl font-bold text-neutdrk mt-3 mb-6">
                {{ $heading ?? 'Frequently Asked Questions' }}
            </h2>

            @isset($intro)
                <p class="text-gray-600 text-lg">
                    {{ $intro }}
                </p>
            @endisset

        </div>

        <!-- FAQ -->
        <div class="max-w-4xl mx-auto space-y-5"
            data-faq-section="{{ $faqId }}"
            data-aos="fade-up"
            data-aos-delay="100">

            @foreach ($faqs as $index => $faq)

                @php
                    $itemId = $faqId . '-item-' . $index;
                    $panelId = $faqId . '-panel-' . $index;
                @endphp

                <div
                    class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-all duration-300">

                    <h3>

                        <button
                            type="button"
                            id="{{ $itemId }}"
                            aria-expanded="{{ $index === 0 && !$compact ? 'true' : 'false' }}"
                            aria-controls="{{ $panelId }}"
                            class="faq-trigger w-full flex justify-between items-center gap-5 text-left px-10 py-6">

                            <span
                                class="text-lg font-semibold text-gray-800 hover:text-[#303791] transition-colors duration-300">

                                {{ $faq['question'] }}

                            </span>

                            <i
                                class="fas fa-chevron-down text-[#EA222F] transition-transform duration-300 {{ $index === 0 && !$compact ? 'rotate-180' : '' }}">
                            </i>

                        </button>

                    </h3>

                    <div
                        id="{{ $panelId }}"
                        role="region"
                        aria-labelledby="{{ $itemId }}"
                        class="faq-panel px-10 pb-8 text-gray-600 leading-8 {{ $index === 0 && !$compact ? '' : 'hidden' }}">

                        {{ $faq['answer'] }}

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll('[data-faq-section="{{ $faqId }}"] .faq-trigger')
        .forEach(function (trigger) {

            trigger.addEventListener('click', function () {

                const panel = document.getElementById(
                    trigger.getAttribute('aria-controls')
                );

                const icon = trigger.querySelector('i');

                const isOpen =
                    trigger.getAttribute('aria-expanded') === 'true';

                trigger.setAttribute(
                    'aria-expanded',
                    String(!isOpen)
                );

                panel.classList.toggle('hidden', isOpen);

                icon.classList.toggle('rotate-180', !isOpen);

            });

        });

});
</script>