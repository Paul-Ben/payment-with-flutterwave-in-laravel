<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistrationsResource\Pages;
use App\Filament\Resources\RegistrationsResource\RelationManagers;
use App\Models\Registrations;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;


class RegistrationsResource extends Resource
{
    protected static ?string $model = Registrations::class;

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('reg_number')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('name')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('email')
                //     ->email()
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('phone_number')
                //     ->tel()
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('paymentStatus')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('faculty')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('department')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('amount')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('amount_settled')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('tx_ref')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('txr_id')
                //     ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('reg_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('paymentStatus')
                    ->searchable(),
                Tables\Columns\TextColumn::make('faculty')
                    ->searchable(),
                Tables\Columns\TextColumn::make('department')
                    ->searchable(),
                Tables\Columns\TextColumn::make('amount')
                    ->searchable(),
                Tables\Columns\TextColumn::make('amount_settled')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tx_ref')
                    ->searchable(),
                Tables\Columns\TextColumn::make('txr_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportBulkAction::make()->exports([
                        ExcelExport::make('table')->fromTable(),
                        
                    ]),
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
            'index' => Pages\ListRegistrations::route('/'),
            // 'create' => Pages\CreateRegistrations::route('/create'),
            'view' => Pages\ViewRegistrations::route('/{record}'),
            // 'edit' => Pages\EditRegistrations::route('/{record}/edit'),
        ];
    }
}
