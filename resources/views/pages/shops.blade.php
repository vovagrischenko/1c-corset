<?php

use Livewire\Component;
use App\Models\Shop;

new class extends Component
{
    public string $name;
    public string $url;
    public $shops;

    public function mount():void
    {
        $this->shops = Shop::all();
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'url' => 'nullable|max:500',
        ]);

        Shop::create($validated);
        $this->reset(['name', 'url']);
        return $this->redirect(route('shops.index'), navigate: false);
    }
};
?>
<div class="w-3/4">
    <flux:modal.trigger name="create-shop">
        <flux:button variant="primary" color="green">Добавить</flux:button>
    </flux:modal.trigger>

    <flux:modal name="create-shop" flyout>
        <form class="space-y-6" wire:submit="save">
            <div>
                <flux:heading size="lg">Добавить магазин</flux:heading>
                <flux:text class="mt-2">Внесите данные о магазине</flux:text>
            </div>
            <flux:input label="Название" placeholder="Название" wire:model="name" />
            @error('name') <span style="color: red;">{{ $message }}</span> @enderror
            <flux:input label="Ссылка" placeholder="url" wire:model="url" />
            @error('url') <span style="color: red;">{{ $message }}</span> @enderror
            <div class="flex">
                <flux:spacer />
                <flux:button type="submit" variant="primary">Сохранить</flux:button>
            </div>
        </form>
    </flux:modal>

    <flux:table>
        <flux:table.columns>
            <flux:table.column>Наименование</flux:table.column>
            <flux:table.column>Url</flux:table.column>
            <flux:table.column class="w-1/9">Действия</flux:table.column>
        </flux:table.columns>
        <flux:table.rows>
            @foreach($shops as $shop)
                <livewire:shop-row :shop="$shop" />
            @endforeach
        </flux:table.rows>
    </flux:table>
</div>
