<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers;
use App\Models\Menu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ToggleColumn;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\TextInput::make('desc')
                    ->required(),
                Forms\Components\Select::make('tags')
                    ->relationship('tags', 'Name')
                    ->required(),
                Forms\Components\Select::make('categories')
                    ->relationship('category', 'Name')
                    ->required(),
                    Forms\Components\TextInput::make('price')
                    ->required()
                    ->prefix('Rp.')
                    ->numeric(),
                Forms\Components\FileUpload::make('img')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9', ])
                    ->directory('uploads/img')
                    ->columnspan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->label('Nama Menu')
                ->sortable(),
                Tables\Columns\ImageColumn::make('img') 
                    ->label('Gambar')
                    ->disk('public') 
                    ->size(100)
                    ->visibility('public'),
                Tables\Columns\TextColumn::make('desc')
                    ->label('Deskripsi Menu'),
                Tables\Columns\TextColumn::make('tags.Name')
                    ->label('Tagar')
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->prefix('Rp.')    
                    ->label('Harga Menu')
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.Name')->label('Kategori Menu'),
                Tables\Columns\ToggleColumn::make('status')  
                    ->toggleable() 
                    ->oncolor('1')  
                    ->offcolor('0')   
                    ->label('Aktif')
                    ->sortable(),
                        
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
