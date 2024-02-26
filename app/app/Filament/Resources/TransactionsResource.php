<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionsResource\Pages;
use App\Filament\Resources\TransactionsResource\RelationManagers;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\FeeSetup;
use App\Models\Transactions;
use Attribute;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;


class TransactionsResource extends Resource
{
    protected static ?string $model = Transactions::class;

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('reg_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_number')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('paymentStatus')
                    ->maxLength(255),
                // Forms\Components\TextInput::make('amount')
                //     ->maxLength(255),
                Forms\Components\Select::make('amount')
                    ->options(
                        $fee = FeeSetup::all()->pluck('name', 'amount')
                    ),    
                Forms\Components\Select::make('faculty')
                    ->options(
                        Faculty::all()->pluck('name', 'name')
                    )
                    ->required(), 
                Forms\Components\Select::make('department')
                    ->options(Department::all()->pluck('name', 'name'))
                    ->required(),    
                Forms\Components\TextInput::make('amount_settled')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tx_ref')
                    ->default('BSU-CSL2024' . substr(rand(0000, time()), 0, 8))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('txr_id')
                    ->maxLength(255),
            ])->columns(3);
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
                Tables\Columns\TextColumn::make('amount')
                    ->searchable(),
                Tables\Columns\TextColumn::make('faculty')
                    ->searchable(),
                Tables\Columns\TextColumn::make('department')
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
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransactions::route('/create'),
            'view' => Pages\ViewTransactions::route('/{record}'),
            'edit' => Pages\EditTransactions::route('/{record}/edit'),
        ];
    }
}
