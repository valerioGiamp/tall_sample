<div class="mt-10 divide-y divide-gray-500/10">
    @foreach ($certifications as $certification)
        <livewire:certification-item :$certification :key="$certification->id"></livewire:certification-item>
    @endforeach
</div>
