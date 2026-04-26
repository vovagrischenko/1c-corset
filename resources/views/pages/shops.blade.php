<?php

use Livewire\Component;

new class extends Component
{
    public string $title;
};
?>
<div>
    <flux:modal.trigger name="create-shop">
        <flux:button variant="primary" color="green">Добавить</flux:button>
    </flux:modal.trigger>

    <flux:modal name="create-shop" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Добавление магазина</flux:heading>
            </div>
            <flux:input label="Название" placeholder="Название" />
            <flux:input label="Ссылка" placeholder="url" />
            <div class="flex">
                <flux:spacer />
                <flux:button type="submit" variant="primary">Save changes</flux:button>
            </div>
        </div>
    </flux:modal>

    <flux:table>
        <flux:table.columns>
            <flux:table.column>Наименование</flux:table.column>
            <flux:table.column>Url</flux:table.column>
            <flux:table.column>Действия</flux:table.column>
        </flux:table.columns>
        <flux:table.rows>
            <flux:table.row>
                <flux:table.cell>Lindsey Aminoff</flux:table.cell>
                <flux:table.cell>Jul 29, 10:45 AM</flux:table.cell>
                <flux:table.cell><flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge></flux:table.cell>
            </flux:table.row>
            <flux:table.row>
                <flux:table.cell>Hanna Lubin</flux:table.cell>
                <flux:table.cell>Jul 28, 2:15 PM</flux:table.cell>
                <flux:table.cell><flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge></flux:table.cell>
            </flux:table.row>
            <flux:table.row>
                <flux:table.cell>Kianna Bushevi</flux:table.cell>
                <flux:table.cell>Jul 30, 4:05 PM</flux:table.cell>
                <flux:table.cell><flux:badge color="zinc" size="sm" inset="top bottom">Refunded</flux:badge></flux:table.cell>
            </flux:table.row>
            <flux:table.row>
                <flux:table.cell>Gustavo Geidt</flux:table.cell>
                <flux:table.cell>Jul 27, 9:30 AM</flux:table.cell>
                <flux:table.cell><flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge></flux:table.cell>
            </flux:table.row>
        </flux:table.rows>
    </flux:table>
</div>
