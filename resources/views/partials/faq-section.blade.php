@php
    $faqId = $faqId ?? 'faq-' . uniqid();
    $compact = $compact ?? false;
    $sectionClass = $sectionClass ?? 'py-20 bg-[#FAFAFA]';
@endphp

<section class="{{ $sectionClass }}" aria-labelledby="{{ $faqId }}-heading">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center mb-12" data-aos="fade-up">
            @isset($eyebrow)
                <span class="text-[#EA222F] font-semibold tracking-wider uppercase">{{ $eyebrow }}</span>
            @endisset
            <h2 id="{{ $faqId }}-heading" class="{{ $compact ? 'text-2xl md:text-3xl' : 'text-3xl md:text-4xl' }} font-bold text-gray-900 mt-3 mb-4">
                {{ $heading ?? 'Frequently Asked Questions' }}
            </h2>
            @isset($intro)
                <p class="text-gray-600">{{ $intro }}</p>
            @endisset
        </div>

        <div class="max-w-4xl mx-auto space-y-4" data-faq-section="{{ $faqId }}" data-aos="fade-up" data-aos-delay="100">
            @foreach ($faqs as $index => $faq)
                @php
                    $itemId = $faqId . '-item-' . $index;
                    $panelId = $faqId . '-panel-' . $index;
                @endphp
                <div class="bg-white border border-gray-100 rounded-xl shadow-sm overflow-hidden">
                    <h3>
                        <button type="button"
                            class="faq-trigger w-full flex items-center justify-between gap-4 text-left px-6 py-5 font-semibold text-gray-900 hover:text-[#EA222F] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#EA222F] focus-visible:ring-offset-2 transition-colors"
                            id="{{ $itemId }}"
                            aria-expanded="{{ $index === 0 && !$compact ? 'true' : 'false' }}"
                            aria-controls="{{ $panelId }}">
                            <span>{{ $faq['question'] }}</span>
                            <i class="fas fa-chevron-down text-[#EA222F] text-sm transition-transform duration-300 {{ $index === 0 && !$compact ? 'rotate-180' : '' }}" aria-hidden="true"></i>
                        </button>
                    </h3>
                    <div id="{{ $panelId }}"
                        role="region"
                        aria-labelledby="{{ $itemId }}"
                        class="faq-panel px-6 pb-5 text-gray-600 leading-relaxed {{ $index === 0 && !$compact ? '' : 'hidden' }}">
                        {{ $faq['answer'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('[data-faq-section="{{ $faqId }}"] .faq-trigger').forEach(function(trigger) {
            trigger.addEventListener('click', function() {
                const panel = document.getElementById(trigger.getAttribute('aria-controls'));
                const icon = trigger.querySelector('i');
                const isOpen = trigger.getAttribute('aria-expanded') === 'true';

                trigger.setAttribute('aria-expanded', String(!isOpen));
                panel.classList.toggle('hidden', isOpen);
                if (icon) {
                    icon.classList.toggle('rotate-180', !isOpen);
                }
            });
        });
    });
</script>
