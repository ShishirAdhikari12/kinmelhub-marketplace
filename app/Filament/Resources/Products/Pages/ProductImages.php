<?php

namespace App\Filament\Resources\Products\Pages;

use App\Filament\Resources\Products\ProductResource;
use Filament\Actions\DeleteAction;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Pages\EditRecord;
use Filament\Schemas\Schema;

class ProductImages extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-c-photo';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                SpatieMediaLibraryFileUpload::make('images')
                    ->image()
                    ->multiple()
                    ->openable()
                    ->panelLayout('grid')
                    ->collection('images')
                    ->disk('public')
                    ->reorderable()
                    ->appendFiles()
                    ->preserveFilenames()
                    ->columnSpan(2),

            ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Product Images';
    }
}
