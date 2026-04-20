<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="flex  justify-center">
    <div class="md:w-7/12 sm:w-full sm:m-3 text-center mt-10 mb-7">
        <flux:heading  size="xl" class="mb-5">Data Tanaman</flux:heading>        
        <flux:field class='flex'>
            
            <flux:input icon="magnifying-glass" kbd="⌘+K" placeholder="cari tanaman" clearable class="mr-2"/>


        </flux:field>
    </div>
</div>