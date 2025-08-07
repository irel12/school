<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentrecordsResource\Pages;
use App\Filament\Resources\StudentrecordsResource\RelationManagers;
use App\Models\Studentrecords;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentrecordsResource extends Resource
{
    protected static ?string $model = Studentrecords::class;
    protected static ?string $label = 'Student Records';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('student_name'),
                TextInput::make('student_address'),
                DatePicker::make('student_contact'),
                TextInput::make('student_course'),
                Select::make('customer_id')
                  ->reactive()
                  ->relationship('customer', 'firstname')
                  ,
                TextInput::make('number_books'),
                TextInput::make('balance'),
                TextInput::make('total'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               TextColumn::make('student_name')
               ->searchable(),
               TextColumn::make('student_address'),
               TextColumn::make('student_contact'),
               TextColumn::make('student_course'),
               TextColumn::make('customer.firstname'),
               TextColumn::make('number_books'),
               TextColumn::make('balance'),
               TextColumn::make('total')
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListStudentrecords::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
