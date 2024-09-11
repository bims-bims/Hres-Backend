<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\OfficeUser;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Hash;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OfficeUserResource\Pages;
use App\Filament\Resources\OfficeUserResource\RelationManagers;

class OfficeUserResource extends Resource
{
    protected static ?string $model = OfficeUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_perusahaan'),
                TextInput::make('email_perusahaan')->email(),
                TextInput::make('password')->password()->revealable()
                ->dehydrateStateUsing(fn (string $state): string => Hash::make($state)),
                TextInput::make('alamat_perusahaan'),
                TextInput::make('nama_pimpinan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_perusahaan'),
                TextColumn::make('email_perusahaan'),
                TextColumn::make('alamat_perusahaan'),
                TextColumn::make('nama_perusahaan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListOfficeUsers::route('/'),
            'create' => Pages\CreateOfficeUser::route('/create'),
            'edit' => Pages\EditOfficeUser::route('/{record}/edit'),
        ];
    }
}
