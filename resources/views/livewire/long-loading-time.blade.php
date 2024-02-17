<div>
    
    <div class="flex items-center text-primary-500 dark:text-white">
        <x-icon name="arrow-path" class="mr-2 h-10 w-10 animate-spin" />
        Loading ...
    </div>
    
    <form wire:submit="save">
        <input type="text" wire:model="title">
        
        <input type="text" wire:model="content">
        
        <button type="submit">Save</button>
    </form>
</div>
