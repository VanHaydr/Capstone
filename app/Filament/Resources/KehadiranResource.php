<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KehadiranResource\Pages;
use App\Filament\Resources\KehadiranResource\RelationManagers;
use App\Models\Kehadiran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;


class KehadiranResource extends Resource
{
    protected static ?string $model = Kehadiran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_user')
                    ->relationship('users', 'name'),
                Select::make('id_penjadwalan')
                    ->relationship('penjadwalan', 'id'),
                TextInput::make('jadwal_lokasi_peta'),
                TimePicker::make('jadwal_waktu_mulai'),
                TimePicker::make('jadwal_waktu_selesai'),
                TextInput::make('lokasi_peta'),
                TimePicker::make('waktu_mulai'),
                TimePicker::make('waktu_selesai'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListKehadirans::route('/'),
            'create' => Pages\CreateKehadiran::route('/create'),
            'edit' => Pages\EditKehadiran::route('/{record}/edit'),
        ];
    }
}
