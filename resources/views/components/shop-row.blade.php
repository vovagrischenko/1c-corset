<?php

use Livewire\Component;
use App\Models\Shop;

new class extends Component
{
    public Shop $shop;

//    public function mount(Shop, $shop): void
//    {
//        $this->shop = $shop;
//    }
};
?>

<flux:table.row>
    <flux:table.cell>{{$shop->name}}</flux:table.cell>
    <flux:table.cell>{{$shop->url}}</flux:table.cell>
    <flux:table.cell>
        <flux:modal.trigger name="update-shop-{{$shop->id}}">
            <flux:button variant="primary" color="blue">Редактировать</flux:button>
        </flux:modal.trigger>
        <flux:modal.trigger name="delete-shop-{{$shop->id}}">
            <flux:button variant="danger">Удалить</flux:button>
        </flux:modal.trigger>
    </flux:table.cell>
    <flux:modal name="delete-shop-{{$shop->id}}" class="min-w-[22rem]">
        <form class="space-y-6" wire:submit="delete">
            <div>
                <flux:heading size="lg">Удалить магазин?</flux:heading>
                <flux:text class="mt-2">
                    Это действие нельзя будет отменить.
                </flux:text>
            </div>
            <div class="flex gap-2">
                <flux:spacer />
                <flux:modal.close>
                    <flux:button variant="ghost">Отмена</flux:button>
                </flux:modal.close>
                <flux:button type="submit" variant="danger">Удалить</flux:button>
            </div>
        </form>
    </flux:modal>
</flux:table.row>
