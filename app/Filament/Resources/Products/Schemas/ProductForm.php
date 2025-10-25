<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('Rs'),
                FileUpload::make('image')
                    ->disk('public')
                    ->previewable()
                    ->visibility('public')
                    ->directory('products')
                    ->imageEditor()
                    ->image()
                    ->imageCropAspectRatio('1:1')
                    ->imageResizeTargetWidth('800')
                    ->imageResizeTargetHeight('800')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('stock')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('rating')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
