<div>
    <p class="text-gray-500">Anda akan dialihkan dalam <span id="detik" class="font-semibold text-gray-700">{{ $detik }}</span> detik.</p>
    <script>
        document.addEventListener('livewire:initialized', () => {
            setInterval(() => {
                Livewire.dispatch('mundur');
            }, 1000);
        });
    </script>
</div>
