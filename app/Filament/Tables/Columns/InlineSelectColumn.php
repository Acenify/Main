<?php

namespace App\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;
use Illuminate\View\ComponentAttributeBag;

class InlineSelectColumn extends Column
{
    protected string $view = 'tables.columns.inline-select';

    public function options(array $options): static
    {
        $this->configure(function () use ($options) {
            $this->extraAttributes['selectOptions'] = $options;
        });

        return $this;
    }

    public function getSelectOptions(): array
    {
        return $this->extraAttributes['selectOptions'] ?? [];
    }
}
