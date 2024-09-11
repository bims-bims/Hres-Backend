<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\BudgetService;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BudgetServiceResource\Pages;
use App\Filament\Resources\BudgetServiceResource\RelationManagers;

class BudgetServiceResource extends Resource
{
    protected static ?string $model = BudgetService::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('nama_perusahaan_id')
                ->relationship('OfficeUser','nama_perusahaan'),
                TextInput::make('deskripsi'),
                TextInput::make('spare_part'),
                TextInput::make('jumlah_transaksi'),
                TextInput::make('keterangan'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make( 'OfficeUser.nama_perusahaan')->searchable(    ),
                TextColumn::make('deskripsi'),
                TextColumn::make('spare_part'),
                TextColumn::make('jumlah_transaksi'),
                TextColumn::make('keterangan')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListBudgetServices::route('/'),
            'create' => Pages\CreateBudgetService::route('/create'),
            'edit' => Pages\EditBudgetService::route('/{record}/edit'),
        ];
    }
}
